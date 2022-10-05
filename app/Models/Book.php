<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $fillable = [
        'name',
        'slug',
        'author',
        'description',
        'condition',
        'availability',
        'is_approved',
        'status',
        'price',
        'book_type',
    ];

    public function bookimages(){
        return $this->hasMany(BookImages::class);
    }
}
