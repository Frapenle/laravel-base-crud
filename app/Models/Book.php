<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = array('ISBN', 'title', 'author', 'genre', 'description', 'cover', 'release_date');
}
