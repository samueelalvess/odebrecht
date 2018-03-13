<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'D04';

    public function getProductAll()
    {
      $data = $this->select('D04_001_C','D04_002_C')
                   ->get();
      return $data;
    }
}
