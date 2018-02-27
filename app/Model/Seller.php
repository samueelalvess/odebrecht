<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
  protected $table = 'A33';

  public function getSellerAll()
  {
    return $this->all();
  }
  public function getSellerId($id)
  {
    return $this->find($id);
  }

}
