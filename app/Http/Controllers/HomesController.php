<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomesController extends Controller
{
    public function __construct() {
        $this->middleware('sentinel');
        // $this->middleware('sentinel.role');
    }

    public function index(){
        return view('artikel/profile');
    }

    public function post(Request $request){
        
        // $articles = Article::paginate(5);
        // $content = $request->input('content');
        // if (!empty($content)) {
        //     $articles = Article::Where('title','like','%'.$content.'%')
        //     ->orWhere('content','like','%'.$content.'%')->paginate(5);
        // }else{
        //     $articles = Article::paginate(5);
        // }
        if ($request->ajax()) {
            $articles = Article::with('comments')->Where('title','like','%'.$request->search.'%')
            ->orWhere('content','like','%'.$request->search.'%')->orderBy('created_at', 'desc')->paginate(1);
            $view = (string) view('ajaxLoyout.article_list')->with('articles',$articles)->render();
            return response()->json(['view'=>$view,'status'=>'success']);
        }
            $articles = Article::with('comments')->orderBy('created_at','desc')->paginate(5);
            return view('artikel/post')->with('articles', $articles);
    }

    public function newForm(){
        return view('eloquent/form_article');
    }

    public function store(Request $request){
        // Article::create($request->all());
        // return redirect()->route('blog');
        $pathImage = '/images/article/';
        
        $modelArticle = new Article();
        if ($request->article_image) {
            $article_image = 'image_article-'.str_random(5).time().'.'.$request->file('article_image')->getClientOriginalExtension();
            //rename file yang di upload menjadi image_articlerandom.extensiondile
            $request->article_image->move(public_path('images/article/'), $article_image);
            //path lokasi penyimpanan file public/image/article/
            $modelArticle->article_image = $article_image;
            //simpan nama file image ke field article_image
        }
        $title = $request->get('title');
        $content = $request->get('content');
        $author = $request->get('author');
        $modelArticle->title = $title;
        $modelArticle->content = $content;
        $modelArticle->author = $author;
        $modelArticle->save();
        //Article::create($request->all());
        return redirect()->route('blog');
    }

    public function editForm($id){
        $articles = Article::find($id);

        return view('eloquent/edit_article')->with('article',$articles);
    }

    public function updateForm(Request $request, $id){
        // Article::find($id)->update($request->all());
        // return redirect()->route('blog');
        $pathImage = '/images/article/';
        $article = Article::find($id);
        $foto_lama = public_path('images/article/'.$article->article_image);
        if ($request->article_image) {
            $article_image = 'image_article-'.str_random(5).time().'.'.$request->file('article_image')->getClientOriginalExtension();
            //rename file yang di upload menjadi image_articlerandom.extensiondile
            $request->article_image->move(public_path('images/article/'), $article_image);
            //path lokasi penyimpanan file public/image/article/
            $article->article_image = $article_image;
            //simpan nama file image ke field article_image
        }
        $title = $request->get('title');
        $content = $request->get('content');
        $author = $request->get('author');
        $article->title = $title;
        $article->content = $content;
        $article->author = $author;
        if ($article->save()) {
            if (file_exists($foto_lama)) {
                unlink($foto_lama);
            }
        } else {
            Session::flash('error','gagal upload');
        }
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
