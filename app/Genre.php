<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
    ];

    public function bookGenres()
    {
    	return $this->hasMany(BookGenre::class);
    }
}
