<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Client;
use App\Model\Product;

class DashboardController extends Controller
{

    public function index(Client $client,Product $product)
    {
      $topclient = $client->getTopClient();
      $topproduct = $product->getTopProduct();
      return view('dashboard.dashboard',compact('topclient'),compact('topproduct'));
    }

}
