<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
            <div class="container-fluid">
            @foreach ($comments as $item)
            <ul class="list-group">
                <li class="list-group-item">
                    <h3>{!! $item->user!!}</h3>
                    <p>{!! $item->content!!}</p>
                </li>
            </ul>
            @endforeach
            </div>
        </div>
</div>