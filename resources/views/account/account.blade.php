@extends('adminlte::page')

@section('title')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welkom {{ Auth::user()->first_name }}!</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
