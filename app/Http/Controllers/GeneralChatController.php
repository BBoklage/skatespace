<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\GeneralChat;
use App\Http\Resources\GenChat;
use Auth;
use App\User;
class GeneralChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Posts
        $posts = GeneralChat::orderBy('created_at', 'desc')->paginate(10);

        return GenChat:: collection($posts);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth:: user();
        $post = $request->isMethod('put') ? GeneralChat::find($request->post_id) : new GeneralChat;
        if (isset($post->id)) {
            $post->id = $request->input('post_id');
        }
        
        $post->user_id = $user->id;
        $post->post = $request->input('post');
        
        if ($post->save()) {
            return new GenChat($post);
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get a single post
        $post = GeneralChat:: find($id);
        return new GenChat($post);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          //get a single post
          $post = GeneralChat:: find($id);
          if ($post->delete()) {
              return new GenChat($post);
          }
          
    }
}

