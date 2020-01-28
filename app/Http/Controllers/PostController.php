<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $linkpost = "something";
        return view('posts.index',compact('posts','linkpost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $linkpost="something";
        return view('posts.create',compact('linkpost'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'title' => 'required|unique:posts|max:255',
            'group' => 'required',
            'type' => 'required'
        ]);
        $datasave = new Post;

        if(!empty($req->isactive)){
            $datasave->is_active ='1';
           }
        else {
            $datasave->is_active ='0';
        }
        $datasave->group = $req->group;
        $datasave->type = $req->type;
        $datasave->title = $req->title;
        $datasave->save();
        $linkpost = "something";
        return redirect()->route('posts.index')
           ->with('flash_message',
            'Page successfully added.','linkpost');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $linkpost = "something";
        return view('posts.edit',compact('post','linkpost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {
        $validatedData = $req->validate([
            'title' => 'required|max:255',
            'group' => 'required',
            'type' => 'required'
        ]);
                
        $datasave = Post::findOrFail($id)->first();

        if(!empty($req->isactive)){
            $datasave->is_active ='1';
           }
        else {
            $datasave->is_active ='0';
        }
        $datasave->group = $req->group;
        $datasave->type = $req->type;
        $datasave->title = $req->title;
        $datasave->save();
        $linkpost = "something";
        return redirect()->route('posts.index')
           ->with('flash_message',
            'Page successfully added.','linkpost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        $linkpost = "something";
        //page_log::log_Entry($id,'Deleted') ;

        return redirect()->route('posts.index')
            ->with('flash_message',
             'Page successfully deleted','linkpost');
    }
}
