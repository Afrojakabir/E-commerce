@extends('adminlayout')
@section('links')
@endsection
@section('nav')

<div class="container">
  <h1 class="text-center">Modifying  sub Catatory</h1>
</div>
<div class="container  " >
	<div class="row" >
	<div class="col-md-2 ">
</div>
	<div class="col-md-8 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >

<form method="POST" action="/homepage/{{ $data->id }}" enctype="multipart/form-data" >
                        @csrf
                        @method('PATCH')

			
	 <div class="field"> 
		Product img:<br>
		<div class="control">
<!-- 			<img src="storage/image/{{$data->img}}" height="40" width="40" />

 -->
<input type="file" name="img" id="profile-img">
<br>
<img src="{{'/storage/image/'.$data->img}}" id="profile-img-tag" width="40px" height="40px" />

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
			
			

<div>
	<button type="submit" class="btn btn-success w-100" style="width: 515px;">Update</button>
</div>
@include('errors')
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
