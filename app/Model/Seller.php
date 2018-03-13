<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
  protected $table = 'A33';

  public function getSellerAll()
  {
    $data = $this->select('A33_001_C','A33_002_C','A33_003_C','A33_010_C','A33_012_C','A33_024_C','ARRAY_009','A24_001_C')
                 ->leftJoin('A24', 'A33.A24_UKEY', '=', 'A24.UKEY')
                 ->where('ARRAY_003','1')
                 ->get();
    return $data;
  }
  public function getSellerId($id)
  {
    return $this->find($id);
  }

}
