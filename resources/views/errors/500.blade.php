@extends('layouts.layout')
@section('content')
    <div class="justify-content-md-center align-items-center vh-100 ">
        <div class="row" style="margin-left: 25%; margin-top: 250px">
            <p class="error-message">Error 500 | Something went wrong on our side</p>
        </div>
        <div class="row" style="margin-left: 21.5%">
            <p class="error-message">Try refreshing or come back later if that doesn't work</p>
        </div>
        <div class="row" style="margin-left: 42%">
            <button class="btn btn-outline-light"><a class="hover-not-found" href="/">Click here to return to the homepage</a></button>
        </div>
    </div>
@endsection
