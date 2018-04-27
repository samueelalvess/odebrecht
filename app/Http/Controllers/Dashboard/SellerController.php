<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Seller;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

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

    public function edit(User $user,$ukey)
    {
        $usr = $user->getUserUkey($ukey);
        return view('dashboard.seller.linkseller',['user' => $usr,'ukey' => $ukey]);

    }
    public function show($id)
    {
        $_seller = $this->seller->getSellerId($id);
        return view('dashboard.seller.seller',['seller' => $_seller]);

    }
    public function link($id)
    {
        $_seller = $this->seller->getSellerId($id);
        return view('dashboard.seller.linkseller',['seller' => $_seller,'ukey' => $id]);
    }
    public function linkUser(Request $data,$id)
    {
      $link = $this->seller->setLinkSeller($data,$id);
      if ( $link )
        return redirect()->route('sellerList');
      else
        return redirect()->back();
    }
    public function update(User $user,Request $request,$id)
    {
      $update = $user->setUserUpdate($request,$id);
      if ( $update )
        return redirect()->route('sellerList');
      else
        return redirect()->back();
    }

    public function login(Request $request)
    {
      if ( Auth::attempt(['email' => $request->email, 'password' => $request->password]) ) {
            return redirect()->route('home');
        }else{
           return redirect()->route('logar');
        }
    }
    public function logout()
    {
      if( Auth::logout() )
        return redirect()->route('logar');
      else
        return redirect()->back();

    }


}
