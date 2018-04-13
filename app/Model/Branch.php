<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'A10';

    public function getBranchAll()
    {
      return $this->select('a10_001_c','a10_002_c','ukey')
                  ->get();
    }
}
