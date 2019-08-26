@extends('layouts.index')

@section('judulhalaman','Book List')

@section('isihalaman')
<a href="{{ route('book.create') }}" class="btn btn-secondary">
	Create Data
</a>
<div class="row">
	<div class="col">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">BOOK ID</th>
		      <th scope="col">Title</th>
		      <th scope="col">Author</th>
		      <th scope="col">Publishing Year</th>
		      <th scope="col">Genre</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
			  @foreach($books as $key => $book)
			  	@php
			  	$panjang = strlen ($book->bookid);
			  	@endphp
				  	@if($panjang == 1)
				  		@php $idnya = "KD - 0000000000" . $book->bookid; @endphp
				  	@elseif($panjang == 2)
				  		@php $idnya = "KD - 000000000" . $book->bookid; @endphp
				  	@elseif($panjang == 3)
				  		@php $idnya = "KD - 00000000" . $book->bookid; @endphp
				  	@elseif($panjang == 4)
				  		@php $idnya = "KD - 0000000" . $book->bookid; @endphp
				  	@elseif($panjang == 5)
				  		@php $idnya = "KD - 000000" . $book->bookid; @endphp
				  	@elseif($panjang == 6)
				  		@php $idnya = "KD - 00000" . $book->bookid; @endphp
				  	@elseif($panjang == 7)
				  		@php $idnya = "KD - 0000" . $book->bookid; @endphp
				  	@elseif($panjang == 8)
				  		@php $idnya = "KD - 000" . $book->bookid; @endphp
				  	@elseif($panjang == 9)
				  		@php $idnya = "KD - 00" . $book->bookid; @endphp
				  	@elseif($panjang == 10)
				  		@php $idnya = "KD - 0" . $book->bookid; @endphp
				  	@elseif($panjang == 11)
				  		@php $idnya = "KD - " . $book->bookid; @endphp
				  	@endif
			    <tr>
			      <td>{{$idnya}}</td>
			      <td>{{$book->title}}</td>
			      <td>{{$book->author}}</td>
			      <td>{{$book->pbyear}}</td>
			      <td>{{$book->genre}}</td>
			      <td>
			      	<form action="{{ route('book.destroy', $book) }}" method="post" class="form-inline">
			      		@csrf
			      		@method('DELETE')
			      		<a href="{{ route('book.edit',$book->bookid) }}" class="btn btn-secondary">
				      		Edit
				      	</a>
			      		<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</button>
			      	</form>
			      </td>
			    </tr>
			   @endforeach
		  </tbody>
		</table>
	</div>
</div>
@endsection