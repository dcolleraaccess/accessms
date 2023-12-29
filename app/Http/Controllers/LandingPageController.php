<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class LandingPageController extends Controller
{
    public function fetchSpecialties(Request $request){
        $selectedProfession = $request->query('profession');

        $specialties = DB::table('specialties')
            ->where('profession_id', $selectedProfession)
            ->get()
            ->toArray();

            return response()->json($specialties);
    }


    public function oauthToken(){
        $url = 'https://api-nexus.laboredge.com:9000/api/secured/oauth/token';

        $headers = [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Basic bmV4dXM6NXM6Nn5EcEhaelcmVFoj'
        ];

        $data = [
            'username' => 'api_accesshealthcare',
            'password' => 'Api@AccessHealthcare',
            'client_id' => 'nexus',
            'grant_type' => 'password',
            'organizationCode' => 'Access'
        ];

        $options = [
            'http' => [
                'header' => implode("\r\n", $headers),
                'method' => 'POST',
                'content' => http_build_query($data),
            ],
        ];

        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);

        if ($response === FALSE) {
            die('Error occurred while fetching data from the API');
        }

        // Decode the JSON string
        $datas = json_decode($response, true);

        // Check if decoding was successful
        if ($datas === null) {
            die('Error occurred while decoding JSON');
        }

        // Output the decoded data
        return $datas['access_token'];
    }

    public function jobCount(){
        $url = 'https://api-nexus.laboredge.com:9000/api/job-service/v1/ats/external/jobs/search';

        $headers = [
            'Authorization: Bearer ' . $this->oauthToken(),
            'Content-Type: application/json',
        ];

        $data = [
            'jobStatusCode' => 'OPEN',
            'jobStatusCodes' => ['OPEN', 'CLOSED'],
            'pagingDetails' => ['start' => 0],
        ];

        $options = [
            CURLOPT_URL            => $url,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => json_encode($data),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER     => $headers,

            // FOR LOCAL TESTING ONLY
            // CURLOPT_SSL_VERIFYPEER => false,
            // CURLOPT_SSL_VERIFYHOST => false,
        ];

        $ch = curl_init();
        curl_setopt_array($ch, $options);

        $response = curl_exec($ch);

        if ($response === FALSE) {
            die('0');
        }

        curl_close($ch);

        $datas = json_decode($response, true);

        // Check if decoding was successful
        if ($datas === null) {
            die('Error occurred while decoding JSON');
        }

        // Output the decoded data
        return $datas['count'];
    }

    public function fetchJobCount(Request $request){
        return response()->json($this->jobCount());
    }
}
