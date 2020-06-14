@extends('layouts.layout')

@section('content')
    <div class="justify-content-center vh-100">
        <div class="d-flex justify-content-center">
            <p class="top-message">Leave a nice message here!</p>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-outline-light"><a class="hover-message" type="submit" href="/messages/create">Create a new message</a></button>
        </div>
        <br>
        @foreach($messages as $message)
            <div class="d-flex justify-content-center">
                <div class="message-box">
                    <div>
                        <h4>{{ $message->title }}</h4>
                    </div>
                    <div>
                        <p>{{ $message->body }}</p>
                    </div>

                    <div>
                        <button class="btn btn-outline-primary" style="margin-right: 5px"><a class="hover-message-white" href="/messages/{{ $message->id }}/edit">Edit Message</a></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
