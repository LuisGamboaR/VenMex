<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Utileria extends Model
{
    use HasRoles;

    protected $fillable = [
        'nombre', 'cantidad', 'cantidad_en_uso', 'precio'
     ];
}
