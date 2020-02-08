@if(count($errors)>0)
<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)
</li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif

@if(\Session::has('success'))
<div class="alert alert-success">
	<p>{{ \Session::get('success')}}</p></div>
@endif



@if($message =Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>





<script> 
					$(document).ready(function(){
						fetch_student_data();
						function fetch_student_data(query=''){
							$.ajax({
								url:"{{route('index.action')}}",
								method:'GET',
								data:{query:query},
								dataType:'json'
								success:function(data)
								{
									$('tbody').html(data.table_data);
									$('#total_records').text(data.total_data);

								}
							})
						}
						$(document).on('keyup','#search',function())
						{
							var query=$(this).val();
							fetch_student_data(query);

						});
					});
				</script>


				<script>
					$(document).ready(function(){
						$('.delete_form').on('submit',function(){
							if(confirm("Are you sure you want to delete it?"))
							{
								return true;
							}
							else{
								return false;
							}						}
						});
					});
				</script>

				<body><?php $student=DB::table('students')->get();?>
<table class = "table table-striped"><tr><td><b><label>Filter :</label></b><input type="text" name="search" onkeyup="search()" id="search" autocomplete="off" ></td>

				<tbody id="">

					public function search(Request $request)
    {
        if($request->search){
            $searchs=DB::table('students')
            ->where('fname','like','%'.$request->search.'%')
                ->orWhere('lname','like','%'.$request->search.'%')
                ->orWhere('email','like','%'.$request->search.'%')
                ->orWhere('country','like','%'.$request->search.'%')
                ->orWhere('state','like','%'.$request->search.'%')
                ->orWhere('city','like','%'.$request->search.'%')
                ->get();
                if($searchs){
                    foreach($searchs as $key =>$search){
                        echo'<tr><td>'.$search->fname.'</td><td>'.$search->lname.'</td></tr>';
                    }
                }
        }
        
    }
}
