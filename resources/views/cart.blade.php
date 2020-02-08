<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

@extends('master')

@section('content')
<h1 align="center"><b>Cart</b></h1>
<div class="text-center">
 <div align="left">
  <a href="{{ route('student.index') }}" class="btn btn-primary">Back</a>
 </div>
 <br />
<table table-striped>
						<td><img src="{{URL::to('/')}}/images/{{$students->image}}" class="" width="255" height="255"></td>
						<td style="font-size:25px; padding-left:100px;">
						<b>{{ $students->pname }}</b><br><br>
						<span class="glyphicon glyphicon-star" style="font-size:18px">{{ $students->rating }}</span><br>
						<br><i class="fa fa-rupee" style="font-size:20px">{{ $students->price}}</i><br> <br>
						<b>{{ $students->warranty }}  Warranty</b><br>
						<br><i style="font-size:20px">{{$students->description}}</i></td></table><br>
						<!--<form method="post" action="{{action('OrderController@create')}}">
						    	{{csrf_field()}}
						    	<input type="hidden" />
						    	<input type="hidden" name="id" value="$students->id"/>
						    	<input type="hidden" name="price" class="form-control" value="$students->price">
						    	<input type="hidden" name="pname" class="form-control" value="$students->pname">
						    	<button class="btn btn-success">Buy</button>
						    	</form>-->
						    	<a href="{{action('OrderController@create')}}" 
						    	class="btn btn-success">
						Buy
						</a><br><br>
						
 
@endsection