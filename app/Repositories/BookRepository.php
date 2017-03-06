<?php

namespace App\Repositories;

use App\Book;

class BookRepository
{
    public function all(Book $book)
    {
        return $book->books()->orderBy('created_at', 'asc')->get();
    }
}
