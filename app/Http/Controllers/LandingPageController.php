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
            'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJsYXN0TmFtZSI6IlVzZXIiLCJjbGllbnRJZCI6bnVsbCwidXNlcl9uYW1lIjoiYXBpX2FjY2Vzc2hlYWx0aGNhcmUiLCJoaWVyYXJjaHlFbmFibGVkIjpmYWxzZSwiYWdlbmN5SWQiOjMyLCJjbGllbnRDb250YWN0SWQiOm51bGwsInVzZXJJZCI6NTIzOTc5LCJhdXRob3JpdGllcyI6WyJBVFNfQUdFTkNZIl0sImNsaWVudF9pZCI6Im5leHVzIiwib3JnYW5pemF0aW9uSWQiOjM0LCJvcmdhbml6YXRpb25UeXBlIjoiQVRTIiwicG93ZXJVc2VyIjpmYWxzZSwiZmlyc3ROYW1lIjoiQVBJIiwib3JnYW5pemF0aW9uQ29kZSI6IkFjY2VzcyIsImFwcGxpY2F0aW9uVHlwZUlkIjoiQVRTX0FHRU5DWSIsIm9yZ2FuaXphdGlvbklkZW50aWZpZXIiOiJBY2Nlc3MiLCJzY29wZSI6WyJyZWFkIiwid3JpdGUiXSwib3JnYW5pemF0aW9uQ291bnRyeUlkIjo0MCwidGVuYW50SWQiOiJURU5BTlRfMSIsImV4cCI6MTcwMzg3MDM2MCwiY2FuZGlkYXRlSWQiOm51bGwsImp0aSI6ImE1N2FjOTFkLTI5YmItNDI2Yi1hODY5LWFhMTI2ZDU0NGFkZiIsImVtYWlsIjoiIn0.ekhtbiA8iWkYGbXPRFjKPgZdAi9XYqu9MnNVJ9zhOL4',
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
        ];

        $ch = curl_init();
        curl_setopt_array($ch, $options);

        $response = curl_exec($ch);

        if ($response === FALSE) {
            die('Curl error: ' . curl_error($ch));
        }

        curl_close($ch);

        echo $response;
    }
}
