<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maboneng extends Model
{    
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function school()
    {
      return $this->belongsTo('App\School');
    }

}
