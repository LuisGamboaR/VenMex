<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deduccion extends Model
{
    protected $fillable = [
        'nomina_id', 'cantidad', 'razon'
      ];

      public function Nomina(){
 
        return $this->belongsTo(Nomina::class);
        
    }
}
