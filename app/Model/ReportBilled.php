<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ReportBilled extends Model
{
    protected $table = 'J07';

    public function getReportBilled()
    {
      $data = $this->select(
                              'J07.J07_001_C AS PEDIDO',
                              'J10.J10_001_C AS NOTA',
                              'A03.A03_003_C AS NOME_CLIENTE',
                              'A03A.A03_003_C AS NOME_TRANSP',
                              'J07.J07_003_D AS EMISSAO_PEDIDO',
                              'J10.J10_003_D AS EMISSAO_NOTA'
                            )
                    ->Join('A03','J07.A03_UKEY','=','A03.UKEY')
                    ->leftJoin('J08','J07.A03_UKEY','=','A03.UKEY')
                    ->leftJoin('J10','J07.A03_UKEY','=','A03.UKEY')
                    ->leftJoin('A03 as A03A','J10.A03_UKEY1','=','A03A.UKEY')
                    ->join('A33','J07.A33_UKEY','=','A33.UKEY')
                    ->where('J07.J07_027_N',1)
                    ->where('J07.J07_043_N',1)
                    ->where('A33.UKEY',auth()->user()->ukey)
                    //->where('J07.J07_003_D','>','2018-04-17')
                    ->limit(10)
                    ->get();
      return $data;
    }
    public function getReportNotBilled($status)
    {
      $data = $this->select(
                              'J07.J07_001_C AS PEDIDO',
                              'J10.J10_001_C AS NOTA',
                              'A03.A03_003_C AS NOME_CLIENTE',
                              'A03A.A03_003_C AS NOME_TRANSP',
                              'J07.J07_003_D AS EMISSAO_PEDIDO',
                              'J10.J10_003_D AS EMISSAO_NOTA'
                            )
                    ->Join('A03','J07.A03_UKEY','=','A03.UKEY')
                    ->leftJoin('J08','J07.A03_UKEY','=','A03.UKEY')
                    ->leftJoin('J10','J07.A03_UKEY','=','A03.UKEY')
                    ->leftJoin('A03 as A03A','J10.A03_UKEY1','=','A03A.UKEY')
                    ->leftJoin('JJ20','j07.j07_ukeyp','=','jj20.ukey')
                    ->join('A33','J07.A33_UKEY','=','A33.UKEY')
                    ->where('J07.J07_027_N',1)
                    ->where('J07.J07_043_N',0)
                    ->where('JJ20_013_N',$status)
                    ->where('A33.UKEY',auth()->user()->ukey)
                    //->where('J07.J07_003_D','>','2018-04-17')
                    ->limit(10)
                    ->get();
      return $data;
    }
    public function getReportBilledDashboard()
    {
      $valor = \DB::select("SELECT  { fn MONTHNAME(J07_003_D) } AS MonthName, YEAR(J07_003_D) AS Year, COUNT(J07.UKEY) AS TOTAL
                             FROM [J07]
                             WHERE  (YEAR(J07_003_D) = Year(getdate())) and J07_027_N = 1 and J07_043_N = 1 and J07.A33_UKEY = '".auth()->user()->ukey."'
                             GROUP BY { fn MONTHNAME(J07_003_D) }, MONTH(J07_003_D), YEAR(J07_003_D)
                             order by Year(J07_003_D),month(J07_003_D)");
      return $valor;
    }

    public function getReportNotBilledDashboard()
    {
      $valor = \DB::select("SELECT  { fn MONTHNAME(J07_003_D) } AS MonthName, YEAR(J07_003_D) AS Year, COUNT(J07.UKEY) AS TOTAL
                             FROM [J07]
                             WHERE  (YEAR(J07_003_D) = Year(getdate())) and J07_027_N = 1 and J07_043_N = 0 and J07.A33_UKEY = '".auth()->user()->ukey."'
                             GROUP BY { fn MONTHNAME(J07_003_D) }, MONTH(J07_003_D), YEAR(J07_003_D)
                             order by Year(J07_003_D),month(J07_003_D)");
      return $valor;
    }

}
