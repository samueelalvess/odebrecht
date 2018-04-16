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

class RequestController extends Controller
{
    private $client;
    private $product;

    public function __construct(Client $cli,Product $pro)
    {
      $this->client = $cli;
      $this->product = $pro;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clients = $this->client->getClientAllBasic();
      $products = $this->product->getProductAll();
      return view('dashboard.order.order',compact('clients'),compact('products'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
}
