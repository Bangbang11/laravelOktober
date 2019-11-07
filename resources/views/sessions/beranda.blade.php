{{-- mengextends target file, ex:file master.blade.php di folder layout --}}
@extends('layouts.app')

{{-- memanggil section dari yield ex:section bernama content pada yield bernama content pada file lain yang di extends --}}
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
    
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- akhir section bernama content --}}