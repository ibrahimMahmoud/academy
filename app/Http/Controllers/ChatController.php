<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user = Auth::user();
        $message = Chat::all();
        $chat = Chat::where('receiver_id',$user->id)->orWhere('sender_id',$user->id)->distinct()->where(function($query) 
            use ($user) {
                        $query->where('receiver_id','!=',$user->id);
                        $query->orWhere('sender_id','!=',$user->id);
                    })->select('receiver_id','sender_id')->get();

        $receiver = $chat->pluck('receiver_id');
        $sender   = $chat->pluck('sender_id');

        $all = array();
         array_push($all,$sender,$receiver);
         [$keys, $all]  = array_divide(array_unique(array_collapse($all)));

          $select_users = User::whereIn('id',$all)->select('first_name','last_name','image','id')->get();

        return view('chat', compact('user','message','select_users'));
    }


    public function conversation ()
    {
        $user = Auth::user();
        $reciverid = Input::get("usr2");
        $userid = Auth::user()->id;
         if($reciverid != $userid){

        $z = array();
        array_push($z,$reciverid ,$userid);

        $x = Chat::whereIn('receiver_id',$z)->whereIn('sender_id', $z)->where(function($query) 
            use ($user) {
                        $query->where('receiver_id','!=',$user->id);
                        $query->orWhere('sender_id','!=',$user->id);
                    })->orderBy('created_at','DESC')->take(10)->get();
        }else{

            $x = Chat::where('receiver_id',$reciverid)->where('sender_id', $reciverid)->get(); 
        }

        return $x;
    }

    public function more(Request $request)
    {
        $id = Input::get("lastid");
        $user = Auth::user();
        $reciverid = Input::get("usr2");
        $userid = Auth::user()->id;
          $z = array();
        array_push($z,$reciverid ,$userid);

        $x = Chat::whereIn('receiver_id',$z)->whereIn('sender_id', $z)->where(function($query) 
            use ($user) {
                        $query->where('receiver_id','!=',$user->id);
                        $query->orWhere('sender_id','!=',$user->id);
                    })->orderBy('created_at','DESC')->where('id','<',$id)->take(10)->get();

            return $x;
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
        // Chat::create([
        //     'receiver_id' => $request->reciver,
        //     'sender_id' => $request->sender,
        //     'title' => $request->title,
        //     'content' => $request->description,
        // ]);

        // return redirect()->back();

        $reciverid = Input::get("reciverid");
        $messagetitle = Input::get("messagetitle");
        $messagecontent = Input::get("messagecontent");
        $userid = Auth::user()->id;

        $chat = new Chat();
        $chat->sender_id = $userid;
        $chat->receiver_id = $reciverid;
        $chat->title = $messagetitle;
        $chat->content = $messagecontent;
        $chat->save();

        return $chat;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
