<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'avg_rating',
    ];

    public function bookAuthors()
    {
    	return $this->hasMany(BookAuthor::class);
    }

    public function bookGenres()
    {
    	return $this->hasMany(BookGenre::class);
    }

    public function ratings()
    {
    	return $this->hasMany(Rating::class);
    }
}
