<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'A21';

    public function getDocumentAll()
    {
      return $this->select('a21_001_c','a21_002_c','ukey')
                  ->where('a21_003_n',0)
                  ->get();
    }
}
