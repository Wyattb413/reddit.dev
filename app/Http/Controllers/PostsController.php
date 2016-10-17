<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data['posts'] = Post::join('users', 'users.id', '=', 'posts.created_by')->
                                   where('users.email', 'like', '%' . $request->search . '%')
                                   ->orWhere('users.name', 'like', '%' . $request->search . '%')
                                   ->orWhere('posts.title', 'like', '%' . $request->search . '%')
                                   ->orWhere('posts.url', 'like', '%' . $request->search . '%')
                                   ->orWhere('posts.content', 'like', '%' . $request->search . '%')->with('user')->paginate(5);
        } else {
            $data['posts'] = Post::orderBy('created_at', 'desc')->paginate(5);
        }
        return view('posts.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'title' => 'required',
            'url' => 'required',
            'content' => 'required',
        );

        $this->validate($request, $rules);


        $post = new Post();
        $post->created_by = $request->user()->id;
        $post->title = $request->input('title');
        $post->url = $request->input('url');
        $post->content = $request->input('content');
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved succesfully');

        Log::info($post);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['post'] = Post::findOrFail($id);
        return view('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $data = ['post' => $post];
        return view('posts.edit')->with($data);
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
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was updated succesfully');

        return redirect()->action('PostsController@show', $post->$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was deleted succesfully');

        return redirect()->action('PostsController@index');
    }

}
