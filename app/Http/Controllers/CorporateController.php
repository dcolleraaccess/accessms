<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class CorporateController extends Controller
{
    public function jobpage(Request $request){
        $query = $request->query();

        $data = array();

        $data['job'] = DB::table('corporatecareer')
            ->where('id', $query['id'])
            ->first();

        return view('corporatecareerpage', $data);
    }
}
