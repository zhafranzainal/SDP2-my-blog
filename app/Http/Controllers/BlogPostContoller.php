<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogPosts = BlogPost::get();
        return view('blog-post.index', [
            'blogPosts' => $blogPosts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog-post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BlogPost::create(
            [
                "title" => $request->input('title'),
                "body" =>$request->input('body'),
                "user_id" => 4,
            ]
        );

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogPost = BlogPost::find($id);
        $cal = 45;
        return view('blog-post.show', [
            'blogPost' => $blogPost,
            "answer" => $cal,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogPost = BlogPost::find($id);

        return view('blog-post.edit', [
            'blogPost' => $blogPost,
        ]);
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
        $blogPost = BlogPost::find($id);

        $blogPost->update(
            [
                "title" => $request->input('title'),
                "body" =>$request->input('body'),
                "user_id" => 4,
            ]
        );

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogPost = BlogPost::find($id);
        $blogPost->delete();
    }
}
