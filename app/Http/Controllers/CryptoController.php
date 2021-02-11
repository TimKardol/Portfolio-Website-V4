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
        if (\Auth::check()){
            return view('account.cryptos.index', ['user_id' => $user_id]);
        }
        else return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.cryptos.create');
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

//        $request['user_id'] = \Auth::id();
//        Crypto::create($request->all());
        return redirect('account.cryptos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crypto  $crypto
     * @return \Illuminate\Http\Response
     */
    public function show(Crypto $crypto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crypto  $crypto
     * @return \Illuminate\Http\Response
     */
    public function edit(Crypto $crypto)
    {
        return view('account.cryptos.edit', compact('crypto'));
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
        return redirect('account.cryptos.index');
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
        return redirect('account.cryptos.index');
    }
}
