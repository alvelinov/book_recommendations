@extends('layouts.app')

@section('content')

<div class="panel-body">
	<form action="/books/search" method="GET">
	{{ csrf_field() }}
    {{ method_field('GET') }}
    <div class="form-group">
        <label for="book-name" class="col-sm-3 control-label">Book Name</label>
        <div class="col-sm-6">
            <input type="text" name="book_name" id="book-name" class="form-control">
        </div>
    </div>
    <button type="submit" id="search" class="btn btn-default">
    	<i class="fa fa-btn fa-search"></i>Search
    </button>
	<table class="table table-striped book-table">
    	<thead>
        	<th>Book Name</th>
        </thead>
		<tbody>
			@foreach ($books as $book)
        	<tr>
            	<td class="table-text"><div>{{ $book->name }}</div></td>
                <td>
                	<form action="{{url('book/' . $book->id)}}" method="GET">
                    	{{ csrf_field() }}
                        {{ method_field('GET') }}
                        <button type="submit" id="info-book-{{ $book->id }}" class="btn btn-default">
                        	<i class="fa fa-btn fa-pencil"></i>Info
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            {{ $books->links() }}
       </tbody>
	</table>
</div>

@endsection