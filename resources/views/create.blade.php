
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
     <script type="text/javascript" src="typeahead.js"></script>
	  <title>Add Customer</title>
   </head>
   <body>
	
	@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
 
  @if($errors->any())
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  <div align="right">
    <a href="{{route('student.index')}}" class="btn btn-primary">Back</a></div>
<form action="{{route('student.store')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
	{{csrf_field()}}	

     <h3 class="glyphicon glyphicon-user">Add</h3><br><br>
        
        <div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Product Name </label>
					<input type="text" name="pname" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Rating</label>
					<input type="text" name="rating" class="form-control" value="">
				</div>
        <div class="form-group">
          <label>Price </label>
          <input type="text" name="price" class="form-control" value="">
        </div>
        <div class="form-group">
          <label>Offer</label>
          <input type="text" name="offer" class="form-control" value="">
        </div>
        <div class="form-group">
          <label>Warranty</label>
          <input type="text" name="warranty" class="form-control" value="">
        </div>
        <div class="form-group">
					<label>Image </label>
					<input type="file" name="image">
				</div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" name="description" class="form-control" value="">
        </div>
				<input type="submit" class="btn-success">
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			</div>
		</div>
</form>
@endsection