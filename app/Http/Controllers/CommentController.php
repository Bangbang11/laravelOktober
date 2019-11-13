<?php

namespace App\Http\Controllers;

use App\comment, App\Article;
use Session, Redirect, Validator;
use Illuminate\Http\Request;

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
        
        $validate = Validator::make($request->all(),Comment::valid());
        if($validate->fails()){
            return Redirect::to('detail/'.$request->article_id)
            ->withErrors($validate)
            ->withInput();
        } else {
            Comment::create($request->all());
            $article = Article::where('article_id',$request->article_id)->orderBy('created_at','desc');
            $comments = Comment::where('article_id',$request->article_id)->get()->sortBy('created_at')->paginate(2);
            Session::flash('notice','Success add comment');
            $view = (string) view('ajaxLoyout.comments_list')->with('comments', $comments)->render();
            return response()->json(['view'=>$view,'status'=>'success']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        //
    }
}
