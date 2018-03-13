<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Seller;

class SellerController extends Controller
{
    private $seller;

    public function __construct(Seller $sel)
    {
      $this->seller = $sel;
    }

    public function index()
    {
        $sellers = $this->seller->getSellerAll();

        return view('dashboard.seller.sellerlist',['seller' => $sellers]);
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
