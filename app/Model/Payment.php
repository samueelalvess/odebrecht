<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $table = 'A13';

  public function getPaymentAll()
  {
    return $this->select('a13_001_c','a13_002_c','ukey')
                ->where('a13_030_n',1)
                ->where('a13_031_n',1)
                ->get();
  }

}
