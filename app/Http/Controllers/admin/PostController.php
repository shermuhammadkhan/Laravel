<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\category;
use App\Model\Tag;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admins');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts      = post::orderBy('id', 'desc')->with('tags','categories')->get();
      
        $categories = category::all();
        $tags       = Tag::all();
        return view('admin.posts',compact(['posts','categories','tags']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[
                'title'     => 'required',
                'subtitle'  => 'required',
                'body'      => 'required',
                'slug'      => 'required',
                // 'image'     => 'required|image|max:2048',
            ]);

                $image = '';
                if($request->hasFile('image'))
                {
                    $image = $request->image->store('public');
                }

         $post = new post;
                
                $post->title    = $request->title; 
                $post->subtitle = $request->subtitle; 
                $post->body     = $request->body; 
                $post->slug     = $request->slug; 
                $post->image    = $image;
                $post->save();
                $id = $post->id;
                $post->tags()->sync(['tag_id'=>$request->tags,'post_id'=>$id]);
                $post->categories()->sync(['category_id'=>$request->categories,'post_id'=>$id]);
                     
                flash('aadded successfully')->success();
                return redirect(route('post.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
                'title'     => 'required',
                'subtitle'  => 'required',
                'body'      => 'required',
                'slug'      => 'required'
            ]);
         $post = post::find($id);
        
        $post->title    = $request->title; 
        $post->subtitle = $request->subtitle; 
        $post->body     = $request->body; 
        $post->slug     = $request->slug; 
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "working....";

    }

    public function delete_post($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }



    
}
