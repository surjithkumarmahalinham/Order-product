@extends('master')

@section('content')
<form action="{{action('OrderController@store')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<input type="hidden" name="pname" class="form-control" value="">
					<input type="hidden" name="price" class="form-control" value="">
					<input type="hidden" name="id" class="form-control" value="">
					<label>Qty </label>
					<input type="number" name="qty" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Mobile</label>
					<input type="text" name="mobile" class="form-control" value="">
				</div>
        		<div class="form-group">
          			<label>Address </label>
          			<input type="text" name="price" class="form-control" value="">
        		</div>
          			<input type="submit" value="Order" class="btn-success">
				</div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			</div>
		</div>
</form>



	@endsection