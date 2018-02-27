<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    protected $table = 'A03';

    public function getClientAll()
    {
      return $this->limit(5)->get();
    }
}
