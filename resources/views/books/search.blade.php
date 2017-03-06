@extends('layouts.app')

@section('content')
<table class="table table-striped book-table">
    	<thead>
        	<th>Book Name</th>
            <th>Book Author</th>
        </thead>
		<tbody>
			@foreach ($books as $book)
        	<tr>
            	<td class="table-text"><div>{{ $book->name }}</div></td>
                @foreach($authors as $a)
                @foreach($book_authors as $ba)
                @if($ba->author_id == $a->id && $ba->book_id == $book->id)
                <td class="table-text"><div>{{ $a->name }}</div></td>
                @endif
                @endforeach
                @endforeach
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
       </tbody>
	</table>
@endsection