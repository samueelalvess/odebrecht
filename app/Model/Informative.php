<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Informative extends Model
{
    protected $table = 'informativo';
    protected $fillable = ['titulo','texto','data_criado','data_expiracao'];
    public $timestamps = false;

    public function setInformative($data)
    {
      $info = \DB::insert("INSRT INTO [informativo] ([titulo],[texto],[data_criado],[data_expiracao])
                        VALUES ('".$data->titulo."','".$data->descricao."',getdate(),'".$data->dataexpiracao."')");
      return $info;
    }
    public function getInformativeId($id)
    {
      return $this->find($id);
    }
    public function setInformativeUpdate($data,$id)
    {
      $informative = $this->find($id);
      $data = $data->except('_token');
      $data = $data->except('data_criado');
      return $informative->update($data);
    }
    public function getInformativeAll()
    {
      return $this->all();
    }
}
