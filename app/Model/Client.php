<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'A03';

    public function getClienteAll()
    {
      return $this->all();
    }
}
