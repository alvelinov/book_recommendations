@extends('layouts.app')

@section('content')
@foreach ($books as $book)
@if ($book->id == $id)
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                {{$book->name}}
                </div>
                <div class="panel-body">
                	<div class="form-group">
                	<label for="author" class="col-sm-3 control-label">Author: </label>
                	@foreach ($authors as $a)
                	@foreach ($book_authors as $ba)
                	@if ($ba->author_id == $a->id && $ba->book_id == $id)
                	{{ $a->name }}
                	@endif
                	@endforeach
                	@endforeach
                	</div>
                	<div class="form-group">
                	<label for="genre" class="col-sm-3 control-label">Genre: </label>
                	@foreach ($genres as $g)
                	@foreach ($book_genres as $bg)
                	@if($bg->book_id == $id)
               		@if($g->id == $bg->genre_id)
                	{{ $g->name }}
                	@endif
                	@endif
                	@endforeach
                	@endforeach
                	</div>
                </div>
            </div>
        </div>
    </div>
@endif
@endforeach
@endsection