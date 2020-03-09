<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Cliente extends Model
{
    use HasRoles;
}
