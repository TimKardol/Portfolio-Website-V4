@extends('adminlte::page')

@section('title')

@section('content_header')
    <h1>Dashboard - Crypto</h1>
@stop

@section('content')
    <button class="btn btn-primary"><a class="hover-message" type="submit" href="{{ route('account.crypto.create', $user_id) }}">Add new currency</a></button>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
