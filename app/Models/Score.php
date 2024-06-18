<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Score extends Model
{
    use HasFactory;
    protected $table = 'scores';

    protected $fillable = ['id_user', 'id_film', 'score'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function film()
    {
        return $this->belongsTo(Film::class, 'id_film', 'id');
    }
}
