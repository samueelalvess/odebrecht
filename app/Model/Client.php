<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    protected $table = 'A03';

    public function getClientAll()
    {
      return $this->select('A03_001_C','A03_002_C','A03_003_C','A03_012_C','A03_009_C','A03_010_C','A24_001_C','A03_017_C','A03_500_C')
                  ->Join('A25', 'A03.A25_UKEY', '=', 'A25.UKEY')
                  ->Join('A24', 'A25.A24_UKEY', '=', 'A24.UKEY')
                  ->Join('A23', 'A24.A23_UKEY', '=', 'A23.UKEY')
                  ->Where('ARRAY_003','1')
                  ->Where('A33_UKEY','7CB0A0344D4C414E95CC')
                  ->get();
    }

    public function getClientId($id)
    {
      return $this->select('A03_001_C','A03_002_C','A03_003_C','A03_004_C','A03_005_C','A03_006_C','A03_008_M',
                           'A03_017_C','A03_012_C','A03_014_C','A03_015_C','A03_016_C','A03_009_C','A03_010_C',
                           'A33_UKEY','A24_001_C')
                  ->leftJoin('A24', 'A03.A24_UKEY', '=', 'A24.UKEY')
                  ->Where('A03_001_C',$id)
                  ->Where('ARRAY_003','1')
                  ->Where('A33_UKEY','7CB0A0344D4C414E95CC')  // chave do vendedor!!
                  ->first();
    }

}
