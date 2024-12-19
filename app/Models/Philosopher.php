<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Philosopher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'birth_year',
        'country',
        'went_crazy',
    ];
}
