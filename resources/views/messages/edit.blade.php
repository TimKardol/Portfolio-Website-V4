@extends('layouts.layout')

@section('content')
    {{Form::model($message, ['method' => 'PUT', 'route' => ['messages.update', $message->id]])}}
    @csrf

    {{ Form::label('title', "Title")}}
    <br>
    {{ Form::text('title', $message->title, ['class' => 'namearea', 'placeholder' => "Title"])}}
    <br>
    <br>
    {{ Form::textarea('body', $message->body , ['class' => 'textarea', 'placeholder' => 'Type message here...', 'maxlength' => 210])}}
    <br>
    <br>
    <div class="button-box">
        {{ Form::submit('Update Message', ['class' => 'create-message-button']) }}
        {{ Form::close() }}
    </div>
    <div class="">
        {{ Form::model($message, ['method' => 'DELETE', 'route' =>  ['messages.destroy', $message->id], 'onsubmit' => 'return confirm("Are you sure you want to delete this message?")'])}}
        {{ Form::submit('Delete Message') }}
    </div>
    <br>
    {{ Form::close() }}
@endsection
