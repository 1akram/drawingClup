<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    protected $table = 'designer';
    protected $guarded = [];
    protected $fillable = [
        'full_name',
        'email' 
        
    ];
    use HasFactory;

    public function arts()
    {
        return $this->belongsToMany(Arts::class, 'arts_designer', 'designer_id', 'art_id');
    }
}
