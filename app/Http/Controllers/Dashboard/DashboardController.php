<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Client;

class DashboardController extends Controller
{

    public function index(Client $client)
    {
      $topclient = $client->getTopClient();
      return view('dashboard.dashboard',compact('topclient'));
    }

}
