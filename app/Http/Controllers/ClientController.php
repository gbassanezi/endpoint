<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /** this method is listing all of our data */
    public function list()
    {
        return $this->client->all();
    }

    /** searching for and specific client by id */
    public function find($client)
    {
        return $this->client->findOrFail($client);
    }

    /** Create / Update
     *
     */
    public function store($client, Request $request)
    {
        //searching for our client
        $client = $this->client->findOrFail($client);

        //if we didnt found our client we'll use the create method
        if (!$client){
            $this->client->create($request->all());
            return response()->json(['data' => ['message' => 'O cliente não foi encontrado, portando foi criado']]);
        }else{
            //if it receives a post with and id, it will update our data
            $client->update($request->all());
            return response()->json(['data' => ['message' => 'O cliente foi atualizado']]);
        }

    }

    public function destroy($client)
    {
        $client = $this->client->find($client);

        $client->delete();

        return response()->json(['data' => ['message' => 'Cliente excluido!']]);

    }
}
