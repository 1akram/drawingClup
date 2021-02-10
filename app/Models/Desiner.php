<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desiner extends Model
{
    protected $table='desiners';
    use HasFactory;
       public function arts()
    {
        return $this->belongsToMany(Arts::class,'arts_desiners','desiner_id','art_id');
    }
}
