@extends('layouts.layout')
@section('content')
    <div class="justify-content-md-center align-items-center vh-100 ">
        <div class="row error-margin">
            <img src="/img/obi-wan-gif.gif" alt="obi-wan gif">
        </div>
        <br>
        <br>
        <div class="row" style="margin-left: 20%">
            <p class="error-message">Error 404 | This is not the page you were looking for...</p>
        </div>
        <div class="row" style="margin-left: 42%">
            <button class="btn btn-outline-light"><a class="hover-not-found" href="/">Click here to return to the homepage</a></button>
        </div>
    </div>
@endsection
