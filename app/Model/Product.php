<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'D04';

    public function getProductAll()
    {
      $data = $this->select('D04.UKEY','D04_001_C','D04_002_C')
                   ->leftJoin('D17','D04.D17_UKEY','=','D17.UKEY')
                   ->leftJoin('D03','D04.D03_UKEY','=','D03.UKEY')
                   ->where('D04.D04_039_N',0)
                   ->where(function ($query) {
                                $query->where('D04.D04_077_N',2)

                                  ->orWhere(function ($query2) {
                                      $query2->where('D04.D04_077_N',1)
                                              ->where('D03.D03_004_N',1);
                                  });
                            })
                   ->orderBy('D04_001_C','desc')
                   ->get();

      return $data;
    }
    public function getTopProduct()
    {
      $valor = \DB::select("SELECT Total,D04.D04_002_C
                            FROM D04
                            INNER JOIN (
                                         SELECT TOP 10 COUNT(JJ21.D04_UKEY) as Total,JJ21.D04_UKEY AS ukeyproduto
                                         FROM JJ20
                                         INNER JOIN JJ21 ON jj21.JJ20_UKEY = JJ20.UKEY
                                         WHERE A33_UKEY = '".auth()->user()->ukey."'
                                         GROUP BY JJ21.D04_UKEY
                                         ORDER BY Total desc
                                       ) as topprodutos on topprodutos.ukeyproduto = D04.UKEY");
      return $valor;
    }
    public function getProductTop()
    {
      $valor = \DB::select("SELECT
                                  	TOP 10
                                  	D04_002_C AS PRODUTO,
                                  	COUNT(D04_002_C) AS NCOMPRAS,
                                  	SUM(J11_006_N) AS VALOR
                                  FROM
                                  	J10
                                  	INNER JOIN J11 ON J11.J10_UKEY = J10.UKEY
                                  	INNER JOIN T04 ON T04.UKEY = J10.T04_UKEY
                                  	INNER JOIN D04 ON D04.UKEY = J11.D04_UKEY
                                  	INNER JOIN A33 ON A33.UKEY = J10.A33_UKEY
                                  WHERE
                                  	J10.J10_002_N = 0 AND
                                  	T04.T04_004_N = 1  AND
                                  	A33.UKEY = '".auth()->user()->ukey."'  AND
                                  	J10_003_D >= '".date('Y')."0101'
                                  GROUP BY
                                  	D04_002_C
                                  ORDER BY
                                  	SUM(J11_006_N) DESC");
      return $valor;
    }
}
