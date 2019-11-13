@extends('layouts.app')
@section('content')
<section class="tm-section">
    <?php 
    $user = Sentinel::getUser();
    $role = $user->roles()->first()->slug;
    ?>
    Selamat Datang {{$role}} : {{ $user->first_name }} &nbsp;{{ $user->last_name }}
</section>    
@endsection