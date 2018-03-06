<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    protected $table = 'A03';

    public function getClientAll()
    {
      return $this->select('A03_002_C','A03_003_C','A03_017_C','A03_012_C','A03_009_C')->limit(5)->get();
    }
}
