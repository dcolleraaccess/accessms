<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function AddBlog(Request $request){

        $input = $request->input();

        // dd($input);
        DB::table('blog')
            ->insert([
                'image' => $this->imageHandler($request->file('image'), $input['title']),
                'title' => $input['title'],
                'content' => $input['content'],
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);

    }

    public function imageHandler($input, $title){
        $photo = null;

        $destinationPath = 'public/blog';

        $image = $input;
        $extension = $image->getClientOriginalExtension();
        $filename = $title . '.' . $extension;
        $path = $image->storeAs($destinationPath, $filename);
        $photo = $filename;

        return $photo;
    }

    public function blogpage(Request $request){
        $query = $request->query();

        $data = array();

        $data['article'] = DB::table('blog')
            ->where('id', $query['id'])
            ->first();


        // dd($data);
        return view('blogpage', $data);
    }

    public function savePost(Request $request)
    {
        $content = $request->input('content');

        // Use dd to inspect the submitted content
        dd($content);

        // You can handle the content and save it to the database or perform other actions here
        // Example: Post::create(['content' => $content]);

        // Redirect or return a response as needed
    }
}
