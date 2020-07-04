<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    protected $fillable = [
        'total', 'comida_id', 'proveedor_id', 'cantidad', 'precio'
    
    ];
 
     
   public function Deduccions(){
 
    return $this->hasMany(Deduccion::class, 'nomina_id');
    
}
}
