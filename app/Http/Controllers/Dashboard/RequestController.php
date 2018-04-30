<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Client;
use App\Model\Product;
use App\Model\Branch;
use App\Model\Document;
use App\Model\Payment;
use App\Model\Billed;
use App\Model\ReportBilled;
use Auth;

class RequestController extends Controller
{
    private $client;
    private $product;
    private $user;

    public function __construct(Client $cli,Product $pro)
    {
      $this->client = $cli;
      $this->product = $pro;
      $this->user = Auth::user();
    }

    public function create()
    {
      $clients = $this->client->getClientAllBasic();
      $products = $this->product->getProductAll();
      return view('dashboard.order.order',compact('clients'),compact('products'));
    }

    public function store(Request $request)
    {
      $pe = new \App\Model\Request();
      if ( $pe->setRequest($request) )
          return 'sucesso';
      else
          return 'erro';

    }


    public function checkout(Branch $br,Document $doc,Billed $bi,Payment $pay,Client $cli,$ukey_client)
    {
      $branchall = $br->getBranchAll();
      $docs = $doc->getDocumentAll();
      $pays = $pay->getPaymentAll();
      $bis = $bi->getBilledAll();
      $clis = $cli->getClientBilled($ukey_client);
      $clideli = $cli->getClientDelivery($ukey_client);
      return view('dashboard.order.checkout',
                                              [
                                                'branch'=>$branchall,
                                                'documents'=>$docs,
                                                'payment'=>$pays,
                                                'billed'=>$bis,
                                                'clientbilled'=>$clis,
                                                'delivery'=>$clideli
                                              ]
                  );
    }

    public function reportBilled(ReportBilled $rpbilled)
    {
      $reportebilled = $rpbilled->getReportBilled();
      return view('dashboard.order.billedorderslist',['rpbilled'=>$reportebilled]);
    }
    public function reportNotBilled(ReportBilled $rpbilled)
    {
      $reportebilled = $rpbilled->getReportNotBilled(1);
      return view('dashboard.order.notbilledorderslist',['rpbilled'=>$reportebilled]);
    }
    public function getPrint($ukey)
    {
      $pe = new \App\Model\Request();
      //W8-WEB-000047717
      $data = $pe->getPrint($ukey);
      $dataproduct = $pe->getPrintProduct($ukey);

      return view('',compact('data'),compact('dataproduct'));
    }
}
