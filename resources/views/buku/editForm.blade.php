@extends('layout.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <section>
                <h3 class="tm-gold-text tm-form-title">Form Edit Buku</h3>
                <p class="tm-form-description">Silakan Masukkan Data Buku yang akan di Rubah.</p> 


                <form action="{{route('about.update', $buku->id)}}" method="post" class="tm-contact-form">
                {{ csrf_field() }}{{ method_field('put')}}
                <div class="form-group">
                    <input type="text" id="judul_buku" name="judul_buku" class="form-control" placeholder="Judul Buku" value="{{ $buku->judul_buku}}" required/>
                </div>
                <div class="form-group">
                        <input type="text" id="pengarang" name="pengarang" class="form-control" placeholder="Pengarang" value="{{ $buku->pengarang}}" required/>
                </div>
                <div class="form-group">
                    <input type="text" id="penerbit" name="penerbit" class="form-control" placeholder="Penerbit" value="{{$buku->penerbit}}" required/>
                </div>
                <div class="form-group">
                        <input type="text" id="tahun_terbit" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value="{{ $buku->tahun_terbit}}" required/>
                </div>
    
                <button type="submit" class="tm-btn">Update</button>                          
                </form>   
            </section>
        </div>
    </div>
</div>  
<br/>
<br/>  
@endsection