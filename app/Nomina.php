<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    protected $fillable = [
        'total', 'horas', 'personal_id'
      ];
 
      public function Personal(){
 
       return $this->hasMany(Personal::class, 'personal_id');
       
   }
}
