<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\BookAuthor;
use App\Author;
use App\Genre;
use App\BookGenre;
use App\Rating;
use DB;

class BookController extends Controller
{
protected $books;
    
    public function __construct(\App\Repositories\BookRepository $books)
    {
        $this->middleware('auth');
        $this->books = $books;
    }

    public function index(Request $request)
    {
    	$boooks = DB::table('books')->simplePaginate(10);
    	return view('books.index', [
    		'books' => $boooks, 
    	]);
    }

    public function info(Request $request, $id)
    {	
    	return view('books.info', [
    		'books' => Book::all(),
    		'id' => $id,
    		'book_authors' => BookAuthor::all(),
    		'authors' => Author::all(),
    		'genres' => Genre::all(),
    		'book_genres' => BookGenre::all(),
    		'ratings' => Rating::all(),
    	]);
    }

    public function search(Request $request)
    {
    	return view('books.search', [
    		'books' => DB::table('books')->where('name', $request->book_name)->get(),
    		'book_authors' => BookAuthor::all(),
    		'authors' => Author::all(),
    	]);
    }
}
