<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    use HasFactory;
    protected  $fillable = ['unit_name', 'objective'];
    
    //establecer  la relacion de uno a muchos con la tabla
    public function units():HasMany
    {
        return $this->hasMany(Unit::class);
    }
}
