@extends('master')

@section('content')
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="typeahead.js"></script>
	<title>Add Customer</title>
   <body>
	<h2><i class="fa fa-shopping-cart" style="font-size:55px; font-color:green;">
	<b>Online Shopping</b></i></h2><br><br>
	<table class = "table table-striped"><tr><td>
		<td><a href="{{route('student.create')}}" class="btn btn-primary">Add</a> 
	  </td></span>
	  </tr></table>

<div class="container">
<div class="row">
 <div class="col-md-12">
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  
 
					@foreach($students as $row)
				
					<table><br><br>
						<td><img src="{{URL::to('/')}}/images/{{$row['image']}}" class="" width="155" height="115"></td>
						<td style="font-size:15px; padding-left:100px;">
						<b><a href="{{route('student.show',$row['id'])}}">{{ $row['pname'] }}</b></a><br>
						<span class="glyphicon glyphicon-star" style="font-size:18px">{{ $row['rating'] }}</span>
						<br><i class="fa fa-rupee" style="font-size:20px">{{ $row['price'] }}</i><br> 
						<b>{{ $row['warranty'] }}  Warranty</b><br><br>
						<a href="{{route('student.show',$row['id'])}}" class="btn btn-info">
						<span class="glyphicon glyphicon-shopping-cart"></span>Add Cart
						</a><br><br>
						---------------------------------------------------------------------------------------------------------------------------------------------------------------------<br></td>
@endforeach
@endsection
</body>
</html>