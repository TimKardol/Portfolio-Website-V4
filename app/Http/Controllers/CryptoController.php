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

        if (\Auth::check()){
            return view('account.crypto.index', ['user_id' => $user_id]);
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
        return view('account.crypto.create');
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
            'initial_value' => 'required',
            'current_value' => 'required',
            'potential_profit' => 'required'
        ]);

        $request['user_id'] = \Auth::id();
        Crypto::create($request->all());
        return redirect('account.crypto.index');
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
        return view('account.crypto.edit', compact('crypto'));
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
            'initial_value' => 'required',
            'current_value' => 'required',
            'potential_profit' => 'required'
        ]);

        $crypto->update($request->all());
        return redirect('account.crypto.index');
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
        return redirect('account.crypto.index');
    }
}
