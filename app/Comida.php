<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Comida extends Model
{
    use HasRoles;

    protected $fillable = [
        'nombre', 'medida', 'cantidad', 'stock_min', 'stock_max', 'precio'
     ];

     public function Proveedors(){

        return $this->belongsToMany(Proveedor::class);
        
    }
}
