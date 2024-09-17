<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copie extends Model
{
    use HasFactory;

    protected $fillable = [
        'copy_id',
        'book_id',
        'user_id'
    ];
}
