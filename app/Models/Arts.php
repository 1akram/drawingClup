<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arts extends Model
{
    protected $table = 'arts';
    protected $guarded = [];

    use HasFactory;
    public static $ARTS_IN_FRONTEND_PAGINATION = 6;
    public static $ARTS_IN_BACKEND_PAGINATION = 6;

    public static function  randomArts($random = 3)
    {
        return Arts::count() <= $random ? Arts::all()  : Arts::all()->random($random);
    }


    public function designer()
    {
        return $this->belongsToMany(Designer::class, 'arts_designer', 'art_id', 'designer_id');
    }
}
