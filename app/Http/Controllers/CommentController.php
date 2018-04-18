<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Comment::create([
        //     'post_id' => $request->reciver,
        //     'user_id' => $request->sender,
        //     'content' => $request->title,
        // ]);

        // return redirect()->back();

        $postid = Input::get("postid");
        $commentcontent = Input::get("commentcontent");
        $userid = Auth::user()->id;

        $comment = new Comment();
        $comment->user_id = $userid;
        $comment->post_id = $postid;
        $comment->content = $commentcontent;
        $comment->save();

    //     foreach($comment as $row)
    // {
    //     $comment =  '<div class="comment row">
    //                     <div class="col-xs-1">
    //                       <img src="" class="img-responsive">
    //                     </div>
    //                     <div class="col-xs-9">
    //                       <h4>'.$row->user->first_name.'</h4>
    //                       <p>'.$row->content.'</p>
    //                     </div>
    //                   </div>';
    // }

        return $comment;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
