<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';

    protected $fillable = ['id_user', 'id_film', 'review'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function film()
    {
        return $this->belongsTo(Film::class, 'id_film', 'id');
    }
}
