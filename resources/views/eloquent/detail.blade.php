@extends('layout.master')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="container-fluid">
                    <br/>
                    <h1>{!! $article->title !!}</h1>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="container-fluid">
                    <p>{!! $article->content !!}</p>
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="container-fluid">
                    <p>
                        {!! $article->author !!}
                    </p>
                    
                </div>
                <br/>
            </div>
        </div>
    <div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="container-fluid">
                    <div class="card"></div>
                    <h3><i><u>Give Comments</u></i></h3>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                        
                    @endif
                    @if (session('notice'))
                    <div class="alert alert-success">
                        <strong>{!!session('notice')!!}</strong>
                    </div>
                        
                    @endif
                    <form class="comment_form tm-contact-form">
                    {{ csrf_field() }}
                    <label for="article_id">Title</label>
                    <input type="number" class="form-control" value="{{$article->id}}" name="article_id" id="article_id"><br/>
                    <label for="">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea><br/>
                    <label for="">User</label>
                    <input type="text" name="user" id="user" class="form-control" value="{!!Sentinel::getUser()->email!!}"><br/>
                    <button id="comment" class="comment btn btn-success" type="button">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <br/>
        <div class="comments_list">
            @include('ajaxLoyout.comments_list')
        </div>

    </div>

    </div>
</div>    
@endsection
