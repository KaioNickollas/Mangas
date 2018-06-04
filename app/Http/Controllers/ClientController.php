<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Client;
use Auth;

class ClientController extends Controller
{
    public function register()
    {
        return view('clients.register');
    }

    public function store(Request $request)
    {
        $data_user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        $validator = validator( $data_user, [
            'name' => 'required|min:5|max:15',
            'email' => 'required',
            'password' => 'required|min:5'
        ]);
        
        if($validator->fails()){
            return back();
        }

        $client = Client::create($data_user);

        if(Auth::guard('client')->attempt( [ 'email' => $request->email, 'password' => $request->password]) ){
            return redirect()->route('home', compact('client'));
        }else{
            return redirect()->route('client.login');
        }
    }

    public function edit($id)
    {
        return view('clients.edit', ['client' => Client::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
       
    }

    public function login()
    {
        return view('clients.login');
    }

    public function postLogin(Request $request)
    {
        $data_user = [
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        $validator = validator( $data_user, [
            'email' => 'required',
            'password' => 'required|min:5'
        ]);
        
        if($validator->fails()){
            return back();
        }

        if(Auth::guard('client')->attempt( [ 'email' => $request->email, 'password' => $request->password]) ){
            return redirect()->route('home', compact('client'));
        }else{
            return redirect()->route('client.login');
        }

    }

    public function logout()
    {
        Auth::guard('client')->logout();
        return redirect()->route('client.login');
    }
}
