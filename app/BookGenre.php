<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookGenre extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_id', 'genre_id',
    ];

    public function books()
    {
    	return $this->belongsTo(Book::class);
    }

    public function genres()
    {
    	return $this->belongsTo(Genre::class);
    }
}
