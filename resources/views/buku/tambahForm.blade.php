@extends('layout.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <section>
                <h3 class="tm-gold-text tm-form-title">Form Tambah Buku</h3>
                <p class="tm-form-description">Silakan Masukkan Data Buku yang akan di Tambahkan.</p> 


                <form action="{{route('about.store')}}" method="post" class="tm-contact-form">
                {{ csrf_field() }}{{ method_field('post')}}
                <div class="form-group">
                    <input type="text" id="judul_buku" name="judul_buku" class="form-control" placeholder="Judul Buku" required/>
                </div>
                <div class="form-group">
                        <input type="text" id="pengarang" name="pengarang" class="form-control" placeholder="Pengarang" required/>
                </div>
                <div class="form-group">
                    <input type="text" id="penerbit" name="penerbit" class="form-control" placeholder="Penerbit" required/>
                </div>
                <div class="form-group">
                        <input type="text" id="tahun_terbit" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required/>
                </div>
    
                <button type="submit" class="tm-btn">SIMPAN</button>                          
                </form>   
            </section>
        </div>
    </div>
</div>  
<br/>
<br/>  
@endsection