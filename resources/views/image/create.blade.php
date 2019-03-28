@extends('adminlayout')
@section('links')
@endsection
@section('nav')
<div class="container">
  <h1 class="text-center">Insert</h1>
</div>
<div class="container  " >
	<div class="row">
	<div class="col-md-2 "  >
</div>
	<div class="col-md-8 card" style=" margin-top: 30px;" >
<div class ="card-body "  >
<form method="POST" action="/image" enctype="multipart/form-data" >
                        @csrf
			
			<div class="field"> 
		Product img:<br>
		<div class="control">
<input type="file" name="img" id="profile-img" required>
<br>
<img src="{{'/storage/image/'}}" id="profile-img-tag" width="40px" height="40px" />

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
<br>
			<div class="row">
				<div class="col-sm-8" ><input type="submit" class="btn btn-success " style="width: 680px;" value="submit"><br></div>
				
		</div>
</form>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
 @endsection  
@section('footer')
@endsection
 