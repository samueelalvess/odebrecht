<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests\InformativeFormResquest;
use App\Model\Informative;

use App\Http\Controllers\Controller;

class InformativeController extends Controller
{
    private $inf;

    public function __construct(Informative $infor)
    {
      $this->inf = $infor;
    }
    
    public function index()
    {
      $informatives = $this->inf->getInformativeAll();
      return view('',compact('informatives'));
    }

    public function store(InformativeFormResquest $request)
    {
      $informative = $this->inf->setInformative($request);
      if ( $infomative )
          redirect()->route('informativeList');
      else
          redirect()->back();
    }

    public function show($id)
    {
      $informative = $this->inf->getInformativeId($id);
      return view('',compact('informative'));
    }

    public function edit($id)
    {
      $informative = $this->inf->getInformativeId($id);
      return view('',compact('informative'));
    }

    public function update(InformativeFormResquest $request, $id)
    {
      $informative = $this->inf->setInformativeUpdate($request,$id);
      if ( $infomative )
          redirect()->route('informativeList');
      else
          redirect()->back();
    }


}