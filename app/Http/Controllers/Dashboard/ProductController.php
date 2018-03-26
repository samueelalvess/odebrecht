<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;

class ProductController extends Controller
{

    private $product;

    public function __construct(Product $prod)
    {
      $this->product = $prod;
    }

    public function index()
    {
      $products = $this->product->getProductAll();
      return view('dashboard.product.productlist',['product' => $products]);
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
