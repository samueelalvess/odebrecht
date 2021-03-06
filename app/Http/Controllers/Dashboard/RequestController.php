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
use Illuminate\Support\Facades\Mail;
use App\Mail\PedidoEmail;

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
      $insert = $pe->setRequest($request);
      $ukey = $pe->getNumeric();

      $print = $pe->getprint($ukey);
      $product = $pe->getPrintProduct('W8-WEB-'.trim($ukey));

      if ( $insert ){
          Mail::to(['mayron@w8tecnologia.com.br','samuel@w8tecnologia.com.br'])->send(new PedidoEmail($print,$product));
          return redirect()->route('printOrder', ['id'=>trim($ukey)]);
      }else{
          return redirect()->back();
        }
    }

    public function print($ukey) {
      $pe = new \App\Model\Request();
      $print = $pe->getprint($ukey);
      $product = $pe->getPrintProduct('W8-WEB-'.$ukey);
      return view('dashboard.order.printorder', compact('print'), compact('product'));
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
    public function reportNotBilled(ReportBilled $rpbilled, $status)
    {
      $reportebilled = $rpbilled->getReportNotBilled($status);
      return view('dashboard.order.notbilledorderslist',compact('status'),['rpbilled'=>$reportebilled]);
    }

}
