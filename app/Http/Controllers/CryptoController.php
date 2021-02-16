<?php

namespace App\Http\Controllers;

use App\Crypto;
use Illuminate\Http\Request;

class CryptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = \Auth::id();
        $cryptos = Crypto::all();

        return view('cryptos.index', ['user_id' => $user_id], compact('cryptos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cryptos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'coin_name' => 'required',
            'coin_amount' => 'required',
            'initial_value' => 'required',
            'current_value' => 'required',
        ]);

        Crypto::create(([
            'user_id' => auth()->user()->id,
            'coin_name' => $request->coin_name,
            'coin_amount' => $request->coin_amount,
            'initial_value' => $request->initial_value,
            'current_value' => $request->current_value,
            'potential_profit' => 0
        ]));

        $cryptos = Crypto::all();

        return view('cryptos.index', compact('cryptos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crypto  $crypto
     * @return \Illuminate\Http\Response
     */
    public function show(Crypto $crypto)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crypto  $crypto
     * @return \Illuminate\Http\Response
     */
    public function edit(Crypto $crypto)
    {
        return view('cryptos.edit', compact('crypto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crypto  $crypto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crypto $crypto)
    {
        $request->validate([
            'coin_name' => 'required',
            'coin_amount' => 'required',
            'initial_value' => 'required',
            'current_value' => 'required',
            'potential_profit' => 'required'
        ]);

        $crypto->update($request->all());
        return redirect('cryptos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crypto  $crypto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crypto $crypto)
    {
        $crypto->delete();
        return redirect('cryptos.index');
    }
}
