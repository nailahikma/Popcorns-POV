<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';

    protected $fillable = ['trailer', 'cover', 'bg', 'title_img', 'title', 'year', 'id_platform', 'desc', 'rating', 'id_genre', 
                            'duration', 'director', 'producer', 'id_cast', 'slug'];

    public function platform1()
    {
        return $this->belongsTo(Platform::class, 'id_platform', 'id');
    }
    public function genre1()
    {
        return $this->belongsTo(Genre::class, 'id_genre', 'id');
    }
    public function cast1()
    {
        return $this->belongsTo(Cast::class, 'id_cast', 'id');
    }
}
