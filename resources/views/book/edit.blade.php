@extends('layouts.index')

@section('judulhalaman','Update Book')

@section('isihalaman')
@if (session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
@endif
<div class="row">
	<div class="col">
		<form action="{{ route('book.update', $book->bookid) }}" method="post">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Book ID :</label>
				<input class="form-control" type="text" name="bookid" value="{{$book->bookid}}" required>
			</div>
			<div class="form-group">
				<label>Title :</label>
				<input class="form-control" type="text" name="title" value="{{$book->title}}" required>
			</div>
			<div class="form-group">
				<label>Author :</label>
				<input type="text" class="form-control" name="author" value="{{$book->author}}" required>
			</div>
			<div class="form-group">
				<label>Publish Year :</label>
				<input type="text" class="form-control" name="pbyear" value="{{$book->pbyear}} " required>
			</div>
			<div class="form-group">
				<label>Genre :</label>
				<input type="text" class="form-control" name="genre" value="{{$book->genre}}" required>
			</div>
			<button type="submit" class="btn btn-success">Save</button>
		</form>
	</div>
</div>
@endsection