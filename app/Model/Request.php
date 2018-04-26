<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Request extends Model
{
    protected $table = 'JJ20';
    protected $fillable = [
                            'JJ20_001_C',// codigo do produto
                            'A03_UKEY',//ukey do cliente
                            'A06_UKEY',//ukey do endereco de entrega
                            'A13_UKEY',//condicao pagamento
                            'A21_UKEY',//tipo documento
                            'A33_UKEY',//vendedor
                            'CIA_UKEY', //FILIAL
                            'JJ20_003_C',//tipo de frete CIF ou FOB
                            //'JJ20_004_C',//tipo de cobranca
                            'JJ20_005_B',//Valor do pedido
                            'JJ20_007_M',//observacoes
                            'JJ20_009_C',//msg romaneio
                            'JJ20_012_N',//sistema 0,1- PC,2 - Tablet, 3 - WEB
                            'JJ20_013_N',//status pedido 1 -lib auto,2 - bloq, 3 - lib manu,4 - rejeitad, 5 tes nao encontrado, 6 pedido ja esta no saerp
                            'JJ20_015_M',//obs liberacao
                            'T04_UKEY', // tipo faturamento
                            'UKEY',
                            'TIMESTAMP',
                          ];
    public $timestamps = false;

    public function setRequest($data)
    {
      $ukey = auth()->user()->ukey;
      $valor = $this->getNumeric();
      $valor = trim($valor);
      $valor++;
      $valor = $valor;
      $valor = str_pad( $valor, 9, '0', STR_PAD_LEFT );
      $ukey = 'W8-WEB-'.$valor;

      $pe = \DB::insert("insert into [JJ20] (
                                              [JJ20_001_C],
                                              [A03_UKEY],
                                              [A13_UKEY],
                                              [A21_UKEY],
                                              [A33_UKEY],
                                              [CIA_UKEY],
                                              [JJ20_003_C],
                                              [JJ20_005_B],
                                              [JJ20_007_M],
                                              [JJ20_009_C],
                                              [JJ20_012_N],
                                              [JJ20_013_N],
                                              [JJ20_015_M],
                                              [T04_UKEY],
                                              [UKEY],
                                              [JJ20_UKEY],
                                              [TIMESTAMP],
                                              [SQLCMD],
                                              [JJ20_002_D],
                                              [JJ20_004_C],
                                              [JJ20_006_B],
                                              [JJ20_010_N],
                                              [JJ20_011_N],
                                              [JJ20_016_D],
                                              [JJ20_017_D],
                                              [JJ20_018_C],
                                              [JJ20_019_D]
                                            )
                        values (
                                  '".$valor."' ,
                                  '09D3F95B5D654924A143',
                                  '".$data->prazopagamento."',
                                  '".$data->tipodocumento."',
                                  '".$ukey."',
                                  '".$data->filial."',
                                  '".$data->tipofrete."',
                                  1.00,
                                  '".$data->observacoes."',
                                  '".$data->msgromaneio."',
                                  3,
                                  1,
                                  '".$data->msgliberacao."',
                                  '".$data->tipofaturamento."',
                                  '".$ukey."',
                                  '".$ukey."',
                                  getdate(),
                                  '',
                                  getdate(),
                                  '',
                                  0,
                                  0,
                                  0,
                                  getdate(),
                                  getdate(),
                                  0,
                                  getdate()
                                )");

        if ( $pe )
          {
            foreach ($data->codigo as $key => $codigo)
            {
              $ukey_i = bcrypt(now());
              $ukey_i = substr($ukey_i,0,20);

              $pei = \DB::insert("INSERT INTO [jj21] (
                                                      [CIA_UKEY],
                                                      [D04_UKEY],
                                                      [JJ20_UKEY],
                                                      [JJ21_001_B],
                                                      [JJ21_002_B],
                                                      [JJ21_003_B],
                                                      [JJ21_004_B],
                                                      [JJ21_005_N],
                                                      [JJ21_006_B],
                                                      [JJ21_007_B],
                                                      [JJ21_008_B],
                                                      [JJ21_UKEY],
                                                      [SQLCMD],
                                                      [TIMESTAMP],
                                                      [UKEY]
                                                    )
                                 VALUES(
                                          '".$data->filial."',
                                          '".$codigo."',
                                          '".$ukey."',
                                          ".$data->quantidade[$key].",
                                          ".$this->getmoeda($data->valor_unitario[$key]).",
                                          ".$this->getmoeda($data->valor_total[$key]).",
                                          0,
                                          0,
                                          ".$this->getmoeda($data->valor_unitario[$key]).",
                                          0,
                                          '0',
                                          '".$ukey_i."',
                                          '',
                                          getdate(),
                                          '".$ukey_i."'
                                        )
                                 ");
              }
          }


      return true;

    }

    public function getNumeric()
    {
      return $this->select('JJ20_001_C')
                   ->max('JJ20_001_C');
    }
    public function getmoeda($valor)
    {
      $valor = str_replace('.','',$valor);
      $valor = str_replace(',','.',$valor);
      return $valor;
    }
    public function seleciona()
    {
       //\DB::select("SELECT * FROM JJ20 WHERE A33_UKEY = '".auth()->user()->ukey."'");
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


       /*$valor = $this->select()
                   ->Join('jj21', 'jj20.UKEY', '=', 'jj21.JJ20_UKEY')
                   ->join('D04','JJ21.D04_UKEY','=','D04.UKEY')
                   ->where('A33_UKEY',auth()->user()->ukey)
                   ->groupBy('JJ20.UKEY')
                   ->get(); */
       dd($valor);
    }

}
