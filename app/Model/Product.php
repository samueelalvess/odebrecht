<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'D04';

    public function getProductAll()
    {
      $data = $this->select('D04_001_C','D04_002_C') 
                   ->leftJoin('D17','D04.D17_UKEY','=','D17.UKEY')
                   ->leftJoin('D03','D04.D03_UKEY','=','D03.UKEY')
                   ->where('D04.D04_039_N',0)
                   ->where(function ($query) {
                                $query->where('D04.D04_077_N',2)

                                  ->orWhere(function ($query2) {
                                      $query2->where('D04.D04_077_N',1)
                                      $query2->where('D03.D03_004_N',1)
                                  });
                            })
                   ->orderBy('D04_001_C','desc')
                   ->get();

      return $data;
    }
}
