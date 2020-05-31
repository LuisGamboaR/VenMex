<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    protected $fillable = [
        'total', 'horas', 'personal_id', 'cantidad', 'cantidad2','razon'
      ];
 
      public function Personal(){
 
       return $this->belongsTo(Personal::class);
       
   }

   public function Deduccions(){
 
    return $this->hasMany(Deduccion::class, 'nomina_id');
    
}


}
