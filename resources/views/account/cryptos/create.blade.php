@extends('adminlte::page')

@section('title')

@section('content_header')
    <h1>Dashboard - Add new coin</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Coin Toevoegen</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('account.cryptos.store') }}">
                            @csrf
                            @method('POST')
                            <h4>Coin Informatie</h4><br>
                            <label for="coin_name">Naam</label>
                            <input class="form-control" id="coin_name" type="text" name="coin_name" placeholder="Naam van de coin"><br>

                            <label for="coin_amount">Totaal gekochte coin</label>
                            <input class="form-control" id="coin_amount" type="number" min="0" step="0.00000001" name="coin_amount" placeholder="Gekochte coin"><br>

                            <label for="initial_value">Inlegbedrag (€)</label>
                            <input class="form-control" id="initial_value" type="number" name="initial_value" placeholder="Inleg bedrag"><br>

                            <label for="current_value">Huidige waarde</label>
                            <input class="form-control" id="current_value" type="number" name="current_value" step="0.01" placeholder="Huidige waarde"><br>

                        <button class="btn btn-primary" type="submit"><a href="{{ route('account.cryptos.store') }}"></a>Toevoegen</button>
                            <a class="btn" href="{{ route('account.cryptos.index') }}">Annuleren</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
