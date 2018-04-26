<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Client;

class ClientController extends Controller
{

    private $client;

    public function __construct(Client $cli)
    {
      $this->client = $cli;
    }

    public function index()
    {
        $clientlist = $this->client->getClientAll();
        //print_r($clientlist);
        return view('dashboard.client.clientlist',['client' => $clientlist]);
    }

    public function edit($id)
    {
      $client_id = $this->client->getClientId($id);
      return view('dashboard.client.client',['client'=>$client_id]);
    }

}
