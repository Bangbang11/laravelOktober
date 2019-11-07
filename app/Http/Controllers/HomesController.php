<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomesController extends Controller
{
    public function __construct() {
        $this->middleware('sentinel');
    }

    public function index(){
        return view('artikel/profile');
    }

    public function post(Request $request){
        // $articles = Article::paginate(5);
        $content = $request->input('content');
        if (!empty($content)) {
            $articles = Article::Where('title','like','%'.$content.'%')
            ->orWhere('content','like','%'.$content.'%')->paginate(5);
        }else{
            $articles = Article::paginate(5);
        }

        return view('artikel/post')->with('articles', $articles);
    }

    public function newForm(){
        return view('eloquent/form_article');
    }

    public function store(Request $request){
        Article::create($request->all());
        return redirect()->route('blog');        
    }

    public function editForm($id){
        $articles = Article::find($id);

        return view('eloquent/edit_article')->with('article',$articles);
    }

    public function updateForm(Request $request, $id){
        Article::find($id)->update($request->all());
        return redirect()->route('blog');
    }

    public function hapus($id){
        Article::destroy($id);
        return redirect()->route('blog');
    }

    public function about(){
        return view('artikel/about');
    }

    public function contact(){
        return view('artikel/contact');
    }

    public function simpan(Request $request){
        $nama = $request->input('contact_name');
        $email = $request->input('contact_email');
        $subject = $request->input('contact_subject');
        $message = $request->input('contact_message');
        return "nama :".$nama."<br>"." Email : ".$email."<br>"." Subject :".$subject."<br>"." Message : ".$message;
    }

    public function show($id){
        $article = Article::find($id);
        $comments = Article::find($id)->comments->sortBy('Comment.created_at');
        return view('eloquent.detail')->with('article',$article)->with('comments',$comments);
    }
}
