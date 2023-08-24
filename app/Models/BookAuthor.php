<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    use HasFactory;

    protected $table = 'book_author';

    public function author()
    {
        return $this->hasManyThrough(
            'App\Models\Author',
            'App\Models\BookAuthor',
            'book_id',
            'id',
            'id',
            'author_id'
        );
    }
}