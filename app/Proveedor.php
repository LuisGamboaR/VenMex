<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Proveedor extends Model
{
    use HasRoles;

    protected $fillable = [
        'user_id', 'rif'
     ];

     public function User(){

        return $this->belongsTo(User::class);
        
    }

    public function Comidas(){
 
        return $this->hasMany(Comida::class);
        
    }
}
