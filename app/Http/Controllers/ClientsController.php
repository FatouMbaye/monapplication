<?php

namespace App\Http\Controllers;
use App\Client;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function liste()
    {
        $clients = Client::all();

        return view('client.index',[
            'clients' => $clients
        ]);
    }

    public function store()
    {
      $pseudo = request('pseudo');
      // dd($pseudo); 
      $client = new Client();
      $client->name = $pseudo;
      $client->save(); 

       return back();
    }
}
