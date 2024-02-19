<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tanah()
    {
        return $this->belongsTo(Tanah::class);
    }
}
