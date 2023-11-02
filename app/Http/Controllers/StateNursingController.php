<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class StateNursingController extends Controller
{
    public function fetchStateInfo(Request $request){

        $selected = $request->query('state');

        $info = DB::table('statenursing')
            ->where('id', $selected)
            ->first();




        return response()->json([
            'rn' => $this->generateInfoHtml($info, 'rn'),
            'lpn' => $this->generateInfoHtml($info, 'lpn'),
            'cna' => $this->generateInfoHtml($info, 'cna'),
        ]);
    }

    private function generateInfoHtml($info, $type){
        switch ($type) {
            case 'rn':
                return $this->generateSectionHtml('RN', $info->rntemp, $info->rnperm, $info->rnfees, $info->rnnote, $info->rnlink);
            case 'lpn':
                return $this->generateSectionHtml('LPN', $info->lpntemp, $info->lpnperm, $info->lpnfees, $info->lpnnote, $info->lpnlink);
            case 'cna':
                return $this->generateSectionHtml('CNA', $info->cnatemp, $info->cnaperm, $info->cnafees, $info->cnanote, $info->cnalink);
            default:
                return '';
        }
    }

    private function generateSectionHtml($title, $temp, $perm, $fees, $notes, $link){
        $html = "<h4>$title</h4>
             <ul>
                 <li class='my-1'><b>Temp License:</b> $temp</li>";

    // Only include "Perm License" section if $perm is not null
    if ($perm !== 'null') {
        $html .= "<li class='my-1'><b>Perm License:</b> $perm</li>";
    }

    $html .= "<li class='my-1'><b>Fees:</b> $fees</li>";

    // Only include "Notes" section if $notes is not null
    if ($notes !== 'null') {
        $html .= "<li class='my-1'><b>Notes:</b> $notes</li>";
    }

    // Only include "Link" section if $link is not null
    if ($link !== 'null') {

        $linkArray = explode(',', $link);

        foreach ($linkArray as $linkz) {
            $html .= "<li class='my-1'><a href=\"$linkz\" target=\"_blank\"><b>Link</b> </a></li>";
        }

    }

    $html .= "</ul>";

    return $html;
    }
}
