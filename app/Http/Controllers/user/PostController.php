<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\category;
use App\Model\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function index()
    {
    	$posts = post::with("categories")->where('status',1)->paginate(5);
    	return view('user/home',compact('posts'));
    }

    public function post($post)
    {
        $posts = post::with('categories','tags')->whereHas('tags', function ($q) use ($post) {
            $q->where('slug', $post);
        })->get();
      
    	return view('user/post',compact('posts'));
    }

    public function testing()
    {
    	echo category::with("posts")->get();
    }


    public function search_tag(tag $tag)
    {
        $posts = $tag->posts;
        return view('user/search',compact('posts'));
    }

    public function search($search)
    {
        $posts = post::with('categories')->whereHas('categories', function ($q) use ($search) {
            $q->where('slug', $search);
        })->get();
        // return $posts;
        return view('user/search',compact('posts'));
    }


}
