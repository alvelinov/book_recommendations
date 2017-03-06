<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'book_id', 'user_id', 'rating_value',
    ];

    public function books()
    {
    	return $this->belongsTo(Book::class);
    }

    public function users()
    {
    	return $this->belongsTo(User::class);
    }
}
