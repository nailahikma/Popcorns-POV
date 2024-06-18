<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korea extends Model
{
    use HasFactory;
    protected $table = 'koreas';

    protected $fillable = ['id_film'];

    public function film1()
    {
        return $this->belongsTo(Film::class, 'id_film', 'id');
    }
}
