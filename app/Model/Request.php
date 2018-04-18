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
      $timestamp = $this->getDate();
      echo $timestamp;
      $valor = $this->getNumeric();
      $valor++;
      $valor = trim($valor);
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
                                  '7CB0A0344D4C414E95CC',
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
                                  getdatess()
                                )");



    }

    public function getNumeric()
    {
      return $this->select('JJ20_001_C')
                   ->max('JJ20_001_C');
    }
    public function getDate()
    {
      $data_ = \DB::select('select getdate() as data');
      return $data_[0]->data;
    }

}
