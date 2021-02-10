<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arts extends Model
{
    protected $table='arts';
    use HasFactory;
    public function desiners()
    {
        return $this->belongsToMany(Desiner::class,'arts_desiners','art_id','desiner_id');
    }
}
