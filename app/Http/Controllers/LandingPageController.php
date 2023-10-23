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
}
