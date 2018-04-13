<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Billed extends Model
{
    protected $table = 'T04';

    public function getBilledAll()
    {
      return $this->select('t04_001_c','t04_002_c','t04.ukey')
                  ->where('t04_018_n',1)
                  ->where('t04_041_n',0)
                  ->get();
    }
}
