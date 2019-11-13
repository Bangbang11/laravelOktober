@extends('layout.master')
@section('content')
<div class="tm-blog-img-container">           
    </div>
        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                        <div class="tm-blog-post">
                            <h3 class="tm-gold-text">List Artikel</h3>
                            <p>Berikut list Artikel yang terdaftar</p>
                            <img src="img/tm-img-1010x336-1.jpg" alt="Image" class="img-fluid tm-img-post">
                            <div class="row">
                                <div class="col-md-8">
                                    <a href="{{ url('newForm')}}">
                                        <button class="form-control btn btn-success">
                                        <i class="fas fa-plus"></i> Tambah Artikel Baru
                                        </button>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <form>
                                        <input type="text" name="content" id="content" class="search-text form-control" placeholder="Search">    
                                    </form>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="article_list">
                                        @include('ajaxLoyout.article_list')
                                    </div>
                                </div>
                            </div>
                        </div>       
                        <div class="row tm-margin-t-big">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="tm-content-box">
                                    <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                    <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Detail</a>    
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="tm-content-box">
                                    <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                                    <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Read More</a>    
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <div class="tm-content-box">
                                    <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                                    <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Detail</a>    
                                </div>  
                            </div>    
                        </div>            
                    </div>
                    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">
                        <div class="tm-aside-container">
                            <h3 class="tm-gold-text tm-title">
                                Categories
                            </h3>
                                <nav>
                                    <ul class="nav">
                                    </ul>
                                </nav>
                                <hr class="tm-margin-t-small">   
                                <h3 class="tm-gold-text tm-title tm-margin-t-small">
                                Useful Links
                                </h3>
                                <nav>   
                                    <ul class="nav">
                                    </ul>
                                </nav>   
                                <hr class="tm-margin-t-small"> 
                                    <div class="tm-content-box tm-margin-t-small">
                                        <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #1</h4></a>
                                        <p class="tm-margin-b-30">Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                                    </div>
                                <hr class="tm-margin-t-small">
                                    <div class="tm-content-box tm-margin-t-small">
                                        <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #2</h4></a>
                                        <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                                    </div>  
                                <hr class="tm-margin-t-small">
                                    <div class="tm-content-box tm-margin-t-small">
                                        <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #3</h4></a>
                                        <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                                    </div>      
                        </div>                    
                    </aside>
                </div>            
            </div>
        </section>    
@endsection

        