<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relación con el modelo Band
    public function bands()
    {
        return $this->hasMany(Band::class);
    }
}
