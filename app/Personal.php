<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
     protected $fillable = [
       'user_id', 'oficio'
     ];

     public function User(){

      return $this->belongsTo(User::class);
      
  }

  public function Nomina(){
 
    return $this->belongsTo(Nomina::class);
    
}
}

