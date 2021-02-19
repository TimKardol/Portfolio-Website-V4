@extends('adminlte::page')

@section('title')

@section('content_header')
    <h1>Dashboard - Crypto</h1>
@stop

@section('content')
    <script type="text/javascript" defer src="../js/app.js"></script>
    <button class="btn btn-primary"><a class="text-white" type="submit" href="{{ route('cryptos.create') }}">Add new currency</a></button>
    <button class="btn btn-success" id="calculate">Calculate</button>
    <br>
    <br>
{{--  TODO: Add table to show DB results  --}}
    <table class="table">
        <tr>
            <th>Coin Name</th>
            <th>Coin Amount</th>
            <th>Initial Value (€)</th>
            <th>Current Value (€)</th>
            <th>Potential Profit (€)</th>
        </tr>
        @foreach($cryptos as $crypto)
            <tr>
                <td>{{ $crypto->coin_name }}</td>
                <td>{{ $crypto->coin_amount }}</td>
                <td id="initialValue">{{ $crypto->initial_value }}</td>
                <td id="currentValue">{{ $crypto->current_value }}</td>
                <td id="profit"></td>
            </tr>
        @endforeach
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
