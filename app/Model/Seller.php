<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Seller extends Model
{
  protected $table = 'A33';

  public function getSellerAll()
  {
    $data = $this->select('users.id','A33.UKEY','A33_001_C','A33_002_C','A33_003_C','A33_010_C','A33_012_C','A33_024_C','A33.ARRAY_009','A24_001_C')
                 ->Join('A25', 'A33.A25_UKEY', '=', 'A25.UKEY')
                 ->Join('A24', 'A25.A24_UKEY', '=', 'A24.UKEY')
                 ->Join('A23', 'A24.A23_UKEY', '=', 'A23.UKEY')
                 ->Join('A03','A33.A03_UKEY', '=', 'A03.UKEY')
                 ->leftJoin('users','A33.UKEY', '=', 'users.UKEY')
                 ->where('A33.ARRAY_003','1')
                 ->where('A03_500_c','<>','')
                 ->where('A33.UKEY','<>','')
                 ->whereNotNull('A33_UKEY')
                 ->get();
    return $data;
  }

  public function getSellerId($id)
  {
    return $this->select()
                ->leftJoin('A24', 'A33.A24_UKEY', '=', 'A24.UKEY')
                ->leftJoin('A23', 'A24.A23_UKEY', '=', 'A23.UKEY')
                ->where('A33.UKEY',$id)
                ->first();
  }
  public function setSellerUpdate($data,$id)
  {
    //update vendedor
  }
  public function setLinkSeller($data,$id)
  {
    $user = new User;
    $seller = $this->select()->where('UKEY',$id)->first();
    return $user->setUser($data->name,$data->email,$data->password,$seller->Ukey);


  }

}
