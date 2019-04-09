@extends('adminlayout')
@section('links')
@endsection
@section('nav')

<div class="container">
  <h1 class="text-center">Edit Product</h1>
</div>
<div class="container  " >
	<div class="row" >
	<div class="col-md-2 ">
</div>
	<div class="col-md-8 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >

<form method="POST" action="/product/{{ $data->id }}" enctype="multipart/form-data" >
                        @csrf
                        @method('PATCH')

           <div class="field">
		Product Name:<br>
		<div class="control">
		<input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Catatory name" required><br>
	</div>
</div>
             <div class="field">
		Product Price:<br>
		<div class="control">
		<input type="text" class="form-control" name="price" value="{{$data->price}}" placeholder="Price" required><br>
	</div>
</div> 

			 <div class="field">
		Product quantity:<br>
		<div class="control">
		<input type="text" class="form-control" name="quantity" value="{{$data->quantity}}" placeholder="quantity" required><br>
	</div>
</div> 

 <div class="field">
		Product code:<br>
		<div class="control">
		<input type="text" class="form-control" name="code" value="{{$data->code}}" placeholder="code" required><br>
	</div>
</div>	
	 <div class="field"> 
		Product image:<br>
		<div class="control">
<!-- 			<img src="storage/image/{{$data->img}}" height="40" width="40" />

 -->
<input type="file" name="img" id="profile-img" value="{{$data->img}}" >
<br>
<img src="{{'/storage/image/'.$data->img}}" id="profile-img-tag" width="40px" height="40px"value="{{$data->img}}"  />

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>



 		
	</div>
</div>		
			

@include('errors')			

<div>

	<button type="submit" class="btn btn-success w-100" style="width: 515px;">Update</button>
</div>

</form>
</div>
</div>
</div>
<br>
<br>
<br>
 @endsection  
@section('footer')
@endsection
