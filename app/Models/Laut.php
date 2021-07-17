<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laut extends Model
{
    // use HasFactory;
    protected $table = 'laut';
    protected $fillable = [
    'surat',
    'active',
    ];
}
