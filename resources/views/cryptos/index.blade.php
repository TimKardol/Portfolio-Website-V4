@extends('adminlte::page')

@section('title')

@section('content_header')
    <h1>Dashboard - Crypto</h1>
@stop

@section('content')
    <button class="btn btn-primary"><a class="text-white" type="submit" href="{{ route('cryptos.create') }}">Add new currency</a></button>
    <br>
    <br>
{{--  TODO: Add table to show DB results  --}}
    <table class="table">
        <tr>
            <th>Coin Name</th>
            <th>Coin Amount</th>
            <th>Initial Value</th>
            <th>Current Value</th>
            <th>Potential Profit</th>
        </tr>
        @foreach($cryptos as $crypto)
            <tr>
                <td>{{ $crypto->coin_name }}</td>
                <td>{{ $crypto->coin_amount }}</td>
                <td>{{ $crypto->initial_value }}</td>
                <td>{{ $crypto->current_value }}</td>
                <td id="profit"></td>
            </tr>
        @endforeach
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
