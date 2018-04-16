<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientDelivery extends Model
{
    protected $table = 'A06';

    public function getDeliveryClient($ukeyclient)
    {
      //dd($ukeyclient);
      $val = $this->select(
                            'A03.A03_003_C AS EMPRESA_ENTREGA',
                            'A06.A06_001_C AS ENDERECO_ENTREGA',
                            'A06.A06_002_C AS NUMERO_ENTREGA',
                            'A06.A06_004_C AS CEP_ENTREGA',
                            'A24.A24_001_C AS CIDADE_ENTREGA',
                            'A23.A23_001_C AS UF_ENTREGA',
                            'A03.A03_012_C AS TELEFONE_ENTREGA'
                           )
                   ->leftjoin('A03','A06.A03_UKEY', '=', 'A03.UKEY')
                   ->leftjoin('A25','A06.A25_UKEY', '=', 'A25.UKEY')
                   ->leftJoin('A24', 'A25.A24_UKEY', '=', 'A24.UKEY')
                   ->leftjoin('A23','A24.A23_UKEY', '=', 'A23.UKEY')
                   ->where('A03.UKEY',$ukeyclient)
                   ->first();
      if (!empty($val))
      {
        $val->EMPRESA_ENTREGA = trim($val->EMPRESA_ENTREGA);
        $val->ENDERECO_ENTREGA = trim($val->ENDERECO_ENTREGA);
        $val->NUMERO_ENTREGA = trim($val->NUMERO_ENTREGA);
        $val->CEP_ENTREGA = trim($val->CEP_ENTREGA);
        $val->CIDADE_ENTREGA = trim($val->CIDADE_ENTREGA);
        $val->TELEFONE_ENTREGA = trim($val->TELEFONE_ENTREGA);

      }
      return $val;
    }
}
