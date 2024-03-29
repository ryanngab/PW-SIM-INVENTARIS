<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanah extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gedung()
    {
        return $this->hasMany(Gedung::class);
    }
    
}
