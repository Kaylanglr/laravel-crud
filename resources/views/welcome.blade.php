@extends('layout')

@section('titel', 'Laravel crud-app')





@section('content')
    <div class="welkom">
        <h1>Welkom bij mijn eerste laravel app!</h1>
        <p>Gemaakt door Kaylan de Groot</p>
    </div>
@endsection


@section('scripts')

@endsection


@section('styles')
<link rel="stylesheet" href="{{url('css/welcome.style.css')}}">
@endsection