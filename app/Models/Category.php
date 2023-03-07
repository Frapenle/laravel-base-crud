<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = array('name', 'bg_color');

    //relation one to many
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
