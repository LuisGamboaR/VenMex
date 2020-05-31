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

  public function Nominas(){
 
    return $this->hasMany(Nomina::class, 'personal_id');
    
}
}

