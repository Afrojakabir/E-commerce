@extends('layout')
@section('links')
@endsection
@section('nav')
<br>

<div class="container">
  <h1 class="text-center">Create Order</h1>
</div>
<div class="container" >
  <div class="row"  >
   <div class="col-md-2 "  >
   </div>
	<div class="col-md-8 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >
<form method="POST" action="/user" enctype="multipart/form-data" >
                        @csrf
       Product Name:<br>
      <input type="text" class="form-control" name="name" value="{{old('name')}}" required><br>
     
      Quantity:<br>
      <input type="text" class="form-control" name="quantity" value="{{old('quantity')}}" required><br>

      Max Price:<br>
    
      <input type="text" class="form-control" name="price" placeholder="Total price" value="{{old('price')}}" required><br>
  
			
			<div class="field"> 
		Product image:<br>

<input type="file" name="img" id="profile-img" value="{{old('img')}}" required>
<br>
<img src="{{'/storage/image/'}}"id="profile-img-tag" width="40px" height="40px" />

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

            

       Address:
      <br>
     <input type="text" class="form-control" name="address" value = "{{$users->address}} "required><br>
      <br>
       Phone Number:
      <input type="text" class="form-control" name="phone_no" value = "{{$users->phone_no}}"  required><br>
     
       <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Cash" checked>
         <label class="form-check-label" for="exampleRadios1">
           Cash on delivery
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Bkash">
        <label class="form-check-label" for="exampleRadios2">
          Bkash
        </label>
      </div>
      <div class="col-sm-8" ><input type="submit" class="btn btn-success " style="width: 670px;" value="Confirm">
      </div>

  	@include('errors')
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
