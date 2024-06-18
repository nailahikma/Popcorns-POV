<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;

    protected $table = 'casts';

    protected $fillable = ['id_film', 'img_cast', 'cast', 'role_name'];
    public function film1()
    {
        return $this->belongsTo(Film::class, 'id_film', 'id');
    }
}
