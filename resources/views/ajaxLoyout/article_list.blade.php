@foreach ($articles as $a)
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="container-fluid">
                                <br/>
                                <img src="{{ $a->img_article()}}" alt="">
                            </div>
                        </div>
                    </div>
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
        </div>
</div>
@endforeach