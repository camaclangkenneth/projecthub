<?php

namespace App\Modules\Client\Http\Controllers;

use App\Modules\Client\Http\Requests\ClientRequest;

use App\Http\Controllers\Controller;

use App\Modules\Client\Models\Client;

class ClientController extends Controller
{

    public function index(){
        $clients = Client::all();
        return $clients;
    }

    public function show(Client $client){
        return $client;
    }

    public function store(ClientRequest $request){

        $client = Client::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $client,
        ]);
    }

    public function update(ClientRequest $request, Client $client){

        return response()->json([
            'success' => $client->update($request->all()),
            'data' => $client,
          ]);
    }

    public function delete(Client $client){
        return response()->json([
            'success' => $client->delete(),
        ]);
    }
}
