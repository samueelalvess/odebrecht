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
        return view('dashboard.client.clientlist',['client' => $clientlist]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}