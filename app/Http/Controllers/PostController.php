<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Student;

use App\Http\Requests\PostStoreRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all(); // lấy ra hết
        //hoặc $student =Student::orderBy('id','desc')->get();
        $post = Post::paginate(10); //lay ra ds co phan trang
        return view('post.post-list', ['posts' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();

        return view('post.create', ['students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = new Post;
        if ($request->hasFile('img')) {
            //Lấy ra tên file gửi lên
            $originalFileName = $request->img->getClientOriginalName();
            //Format lại tên
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            //Xử lý config config/filesystems.php
            //disk->local->public_path

            $path = $request->file('img')->storeAs('img/posts', $fileName);

            //Gán đường dẫn vào thuộc tính img_url 
            $post->img_url = $path;
        };
        // $post->desc = $request->desc;
        $post->fill($request->all());
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
