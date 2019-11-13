@extends('layout.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <section>
                <h3 class="tm-gold-text tm-form-title">Form Edit Artikel</h3>
                <p class="tm-form-description">Silakan Masukkan Data Artikel yang akan di Rubah.</p> 


                <form action="{{url('/update', $article->id)}}" method="post" enctype="multipart/form-data" class="tm-contact-form">
                {{ csrf_field() }}{{ method_field('put')}}
                <div class="form-group">
                    <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{ $article->title}}" required/>
                </div>
                <div class="form-group">
                        <textarea id="content" name="content" class="form-control" rows="6" placeholder="Content" required>{{ $article->content}}</textarea>
                </div>
                <div class="form-group">
                    <input type="text" id="author" name="author" class="form-control" placeholder="Author" value="{{$article->author}}" required/>
                </div>
                <div class="form-group">
                    <input type="file" id="article_image" name="article_image" class="form-control" placeholder="Author"  required/>
                </div>
    
                <button type="submit" class="tm-btn">Submit</button>                          
                </form>   
            </section>
        </div>
    </div>
</div>  
<br/>
<br/>  
@endsection