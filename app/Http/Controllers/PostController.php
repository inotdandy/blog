<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return view('blog.index', [
            'posts' => Post::orderBy('created_at', 'desc')->with('user')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:5024',
        ]);
        
        $slugTitle = Str::slug(request()->title);

        $imageName = uniqid().'-'.$slugTitle.'.'.request()->image->extension();

        request()->image->move(public_path('images'), $imageName);

        auth()->user()->posts()->create([
            'title' => request()->title,
            'slug' => $slugTitle,
            'description' => request()->description,
            'image_path' => $imageName
        ]);

        return redirect('/blog')->with(['message' => 'Post succesfully created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $blog)
    {
        return view('blog.show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $blog)
    {
        return view('blog.edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $blog)
    {

        $blog->update([

            'title' => request()->title,
            'slug' => Str::slug(request()->title),
            'description' => request()->description,
            'user_id' => auth()->user()->id

        ]);

        return redirect('/blog')->with(['message' => 'Post succesfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $blog)
    {
        $blog->delete();

        return redirect('/blog')->with('message', 'Post has been deleted');
    }
}
