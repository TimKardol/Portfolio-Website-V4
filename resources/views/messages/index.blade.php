@extends('layouts.layout')

@section('content')
    <div class="justify-content-center vh-100">
        <div class="d-flex justify-content-center">
            <p class="top-message">Leave a nice message here!</p>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-outline-light"><a class="hover-message" type="submit" href="/messages/create">Create a new message</a></button>
        </div>
    </div>
@endsection
