@extends('layout.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <section>
                <h3 class="tm-gold-text tm-form-title">Form Input Artikel Baru</h3>
                <p class="tm-form-description">Silakan Masukkan Data Artikel Baru.</p> 


                <form action="{{url('/simpan')}}" method="post" class="tm-contact-form">
                {{ csrf_field() }}                                
                <div class="form-group">
                    <input type="text" id="title" name="title" class="form-control" placeholder="Title"  required/>
                </div>
                <div class="form-group">
                        <textarea id="content" name="content" class="form-control" rows="6" placeholder="Content" required></textarea>
                </div>
                <div class="form-group">
                    <input type="text" id="author" name="author" class="form-control" placeholder="Author"  required/>
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