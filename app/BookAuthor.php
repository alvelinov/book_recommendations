<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_id', 'author_id',
    ];

    public function authors()
    {
    	return $this->belongsTo(Author::class);
    }

 	public function books()
    {
    	return $this->belongsTo(Book::class);
    }    
}
