<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Termwind\Components\Dd;

class MeetController extends Controller
{
    public function mytgetcontent(Request $request){
        $query=$request->query();
        $content=DB::table('mytquestion')
            ->where('name','like',$query['name'])
            ->first();
        $parsecontent = null;
        if($content -> q1 != null){
            $cc1 = "<b>When did you start with Access?</b> <br> $content->q1<br>";
            $parsecontent .=$cc1;
        }
        if($content -> q2 != null){
            $cc2 = "<b>What is the best part of your job?</b> <br> $content->q2<br>";
            $parsecontent .=$cc2;
        }
        if($content -> q3 != null){
            $cc2 = "<b>If you could be one super hero, who would you be and why?</b> <br> $content->q3<br>";
            $parsecontent .=$cc2;
        }
        if($content -> q4 != null){
            $cc2 = "<b>If you had to eat one food for the rest of your life, what would it be?</b> <br> $content->q4<br>";
            $parsecontent .=$cc2;
        }
        if($content -> q5 != null){
            $cc2 = "<b>What is your favorite book?</b> <br> $content->q5<br>";
            $parsecontent .=$cc2;
        }
        if($content -> q6 != null){
            $cc2 = "<b>What is your favorite type of music?</b> <br> $content->q6 <br>";
            $parsecontent .=$cc2;
        }
        if($content -> q7 != null){
            $cc2 = "<b>Number one item on your bucket list?</b> <br> $content->q7<br>";
            $parsecontent .=$cc2;
        }
        if($content -> q8 != null){
            $cc2 = "<b>What is your favorite thing to do on the weekends?</b> <br> $content->q8<br>";
            $parsecontent .=$cc2;
        }
        if($content -> q9 != null){
            $cc2 = "<b>What was your last Netflix binge?</b> <br> $content->q9<br>";
            $parsecontent .=$cc2;
        }
        if($content -> q10 != null){
            $cc2 = "<b>What is your go-to karaoke song?</b> <br> $content->q10<br>";
            $parsecontent .=$cc2;
        }
        return response()-> json($parsecontent);


    }
}
