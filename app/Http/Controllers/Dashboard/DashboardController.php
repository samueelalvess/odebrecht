<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Client;
use App\Model\Product;
use App\Model\ReportBilled;

class DashboardController extends Controller
{

    public function index(Client $client,Product $product,ReportBilled $rb)
    {
      $topclient = $client->getTopClient();
      $topproduct = $product->getTopProduct();
      $billeds = $rb->getReportBilledDashboard();
      $notbilleds =  $rb->getReportNotBilledDashboard();
      return view('dashboard.dashboard',[
                                          'topclient' => $topclient,
                                          'topproduct' => $topproduct,
                                          'billeds' => $billeds,
                                          'notbilleds' => $notbilleds
                                        ]);

    }

}
