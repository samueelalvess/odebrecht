<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Model\ClientDelivery;

class Client extends Model
{
    protected $table = 'A03';

    public function getClientAll()
    {
      return $this->select('A03.UKEY','A03_001_C','A03_002_C','A03_003_C','A03_012_C','A03_009_C','A03_010_C','A24_001_C','A03_017_C','A03_500_C')
                  ->Join('A25', 'A03.A25_UKEY', '=', 'A25.UKEY')
                  ->Join('A24', 'A25.A24_UKEY', '=', 'A24.UKEY')
                  ->Join('A23', 'A24.A23_UKEY', '=', 'A23.UKEY')
                  ->Where('ARRAY_003','1')
                  ->Where('A33_UKEY',auth()->user()->ukey)
                  ->get();
    }

    public function getClientAllBasic()
    {
      return $this->select('A03.UKEY','A03_001_C','A03_002_C','A03_003_C','ARRAY_009','UKEY')
                  ->Where('ARRAY_003','1')
                  ->Where('A33_UKEY',auth()->user()->ukey)
                  ->get();
    }

    public function getClientId($id)
    {
      return $this->select('A03.UKEY','A03_001_C','A03_002_C','A03_003_C','A03_004_C','A03_005_C','A03_006_C','A03_008_M',
                           'A03_017_C','A03_012_C','A03_014_C','A03_015_C','A03_016_C','A03_009_C','A03_010_C',
                           'A33_UKEY','A24_001_C')
                  ->leftJoin('A24', 'A03.A24_UKEY', '=', 'A24.UKEY')
                  ->Where('A03.UKEY',$id)
                  ->Where('ARRAY_003','1')
                  ->Where('A33_UKEY',auth()->user()->ukey)  // chave do vendedor!!
                  ->first();
    }
    public function getClientBilled($id)
    {
      $client = $this->select(
                          	'A03.A03_003_C AS EMPRESA',
                            'A03.UKEY AS UKEY',
                            'A03.A03_017_C AS EMAIL',
                          	'A03.A03_009_C AS CNPJ_CPF',
                          	'A03.A03_010_C AS INSCRICAO_RG',
                          	'A03.A03_021_C as NUMERO',
                            'A03.A03_005_C AS ENDERECO',
                          	'A25.A25_001_C AS CEP',
                          	'A24.A24_001_C AS CIDADE',
                          	'A23.A23_001_C AS UF',
                          	'A03.A03_012_C AS TELEFONE'
                          )
                  ->leftjoin('A25','A03.A25_UKEY', '=', 'A25.UKEY')
                  ->leftJoin('A24', 'A25.A24_UKEY', '=', 'A24.UKEY')
                  ->leftjoin('A23','A24.A23_UKEY', '=', 'A23.UKEY')
                  ->where('A03.UKEY',$id)
                  ->first();

      $client->ENDERECO = trim($client->ENDERECO);
      $client->NUMERO = trim($client->NUMERO);
      return $client;
    }
    public function getClientDelivery($ukey)
    {
      $clidelivery = new ClientDelivery();
      return $clidelivery->getDeliveryClient($ukey);
    }
    public function getTopClient()
    {
       //\DB::select("SELECT * FROM JJ20 WHERE A33_UKEY = '".auth()->user()->ukey."'");
       $valor = \DB::select("SELECT Total,A03.A03_002_C
                             FROM A03
                             INNER JOIN (
                                          SELECT TOP 10 COUNT(jj20.A03_UKEY) Total,jj20.A03_UKEY as ukey
                                          FROM jj20
                                          WHERE jj20.A33_UKEY = '".auth()->user()->ukey."'
                                          GROUP BY A03_UKEY
                                          ORDER BY Total desc
                                        ) as topcliente on topcliente.ukey = A03.UKEY");
       return $valor;
    }
    public function getClientTop()
    {

      $valor = \DB::select("SELECT
                                	TOP 10
                                	A03_003_C AS CLIENTE,
                                	COUNT(A03_003_C) AS NCOMPRAS,
                                	SUM(B01_001_B) AS VALOR
                                FROM
                                	J10
                                	INNER JOIN B01 ON B01.B01_UKEYP = J10.UKEY AND B01_002_N = 2
                                	INNER JOIN T04 ON T04.UKEY = J10.T04_UKEY
                                	INNER JOIN A03 ON A03.UKEY = J10.A03_UKEY
                                	INNER JOIN A33 ON A33.UKEY = J10.A33_UKEY
                                WHERE
                                	J10.J10_002_N = 0  AND
                                	T04.T04_004_N = 1  AND
                                	A33.UKEY = '".auth()->user()->ukey."'  AND
                                	J10_003_D >= '".date('Y')."0101'
                                GROUP BY
                                	A03_003_C
                                ORDER BY
                                	SUM(B01_001_B) DESC");

      return $valor;

    }


}
