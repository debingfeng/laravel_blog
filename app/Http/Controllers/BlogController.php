<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Carbon\Carbon;
class BlogController extends Controller
{
    public function index()
    {
//        echo "xx";
//        $posts = Posts::where('published_at', '<=', Carbon::now())
//            ->orderBy('published_at', 'desc')
//            ->paginate(config('blog.posts_per_page'));

        return view('show');
    }

    public function showPost($slug)
    {
        $post = Posts::whereSlug($slug)->firstOrFail();
        return view('blog.show')->withPost($post);
    }
}
