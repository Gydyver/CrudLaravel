@extends('layouts.index')

@section('judulhalaman','Create Book')

@section('isihalaman')
@if (session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
@endif
<div class="row">
	<div class="col">
		<form action="{{ route('book.store') }}" method="post">
			@csrf
			<div class="form-group">
				<label>Book ID :</label>
				<input class="form-control" type="text" name="bookid" required>
			</div>
			<div class="form-group">
				<label>Title :</label>
				<input class="form-control" type="text" name="title" required>
			</div>
			<div class="form-group">
				<label>Author :</label>
				<textarea type="text" class="form-control" name="author"></textarea>
			</div>
			<div class="form-group">
				<label>Publish Year :</label>
				<textarea type="text" class="form-control" name="pbyear"></textarea>
			</div>
			<div class="form-group">
				<label>Genre :</label>
				<textarea type="text" class="form-control" name="genre"></textarea>
			</div>
			<button type="submit" class="btn btn-success">Save</button>
		</form>
	</div>
</div>
@endsection

 <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>