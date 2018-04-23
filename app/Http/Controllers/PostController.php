<?php

namespace App\Http\Controllers;

use App\Post;
use App\Like_Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function like (Request $request)
    {
        $postid = Input::get("postid");
        $userid = Auth::user()->id;
        $like  = 0;
        $t = Like_Post::where('user_id',$userid)->where('post_id', $postid)->first();

        if(count($t) > 0 )
            {
                $p = Post::find($postid);
                $p->nmoflikes = --$p->nmoflikes;
                $p->save();

               Like_Post::destroy($t->id);

                return ['likes_count' => $p,'like_status'=> $like];
            }
            else
            {
                $p = Post::find($postid);
                $p->nmoflikes = ++$p->nmoflikes;
                $p->save();

                $likepost = new Like_Post();
                $likepost->user_id = $userid;
                $likepost->post_id = $postid;
                $likepost->save();

                $like  = 1;

                return ['likes_count' => $p,'like_status'=> $like];
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $image = $request->file('file');
      $input['filename'] = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/images');
      $image->move($destinationPath, $input['filename']);


        Post::create([
          'user_id' => $request['user_id'],
          'post_name' => $request['title'],
          'file_url' => $input['filename'],
          'content' => $request['content'],
        ]);

        return redirect()->to(url('blog'));
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
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
