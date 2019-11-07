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

                                <form action="{{route('blog')}}" method="get" class="form-control">
                                        <input type="text" name="content" id="content" placeholder="Search">
                                        <input type="submit" value="Search">
                                    </form>
                            </div>
                        </div>
                        <p>@foreach ($articles as $a)
                                <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                                                    <div class="container-fluid">
                                                        <br/>
                                                        <h1>{!! $a->title !!}</h1>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                                                    <div class="container-fluid">
                                                        <p>{!! $a->content !!}</p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                                                    <div class="container-fluid">
                                                        <a href="{{ url('detail',$a->id)}}"><button class="btn btn-primary">Detail</button></a>
                                                        <a href="{{ url('formEdit',$a->id)}}"><button class="btn btn-primary">Edit</button></a>
                                                        <a href="{{url('hapus',$a->id)}}"><button class="btn btn-danger">Hapus</button></a>
                                                        
                                                    </div>
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                        @endforeach
                        <ul class="pagination">
                            {{ $articles->links() }}
                        </ul>
                        
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
                                <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                <li><a href="#" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                                <li><a href="#" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                                <li><a href="#" class="tm-text-link">Elementum egestas dui</a></li>
                                <li><a href="#" class="tm-text-link">Nam in augue consectetur</a></li>
                                <li><a href="#" class="tm-text-link">Fusce non turpis euismod</a></li>
                                <li><a href="#" class="tm-text-link">Text Link Color #006699</a></li>
                            </ul>
                        </nav>
                        <hr class="tm-margin-t-small">   
                        <h3 class="tm-gold-text tm-title tm-margin-t-small">
                            Useful Links
                        </h3>
                        <nav>   
                            <ul class="nav">
                                <li><a href="#" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                                <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                <li><a href="#" class="tm-text-link">Duiss nec purus et eros</a></li>
                                <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                                <li><a href="#" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
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

        