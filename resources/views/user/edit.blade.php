@extends('adminlayout')
@section('links')
@endsection
@section('nav')



<br>

<div class="container">
  <h1 class="text-center"> Order</h1>
</div>
<div class="container" >
  <div class="row"  >
   <div class="col-md-2 "  >
   </div>
  <div class="col-md-8 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >

<form method="POST" action="/user/{{ $data->id }}"  >
                        @csrf
                        @method('PATCH')

   

       Approval:
      <br>
     
      <select class="form-control" name="confirmation">
        <option  value="on process">on process</option>
             <option   value="Cancel">Cancel</option>
             <option  value="Approved" >Approved</option>
      </select>
      <br>
 Order status:
      <br>
     
      <select class="form-control" name="status" ">
             
             <option  value="on process" >on process</option>
             <option   value="Delivered">Delivered</option>
             <option   value="Cancel">Cancel</option>
            
      
      </select>  
     
			
			
<br>
<div>
	<button type="submit" class="btn btn-success w-100" style="width: 515px;">Update</button>
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
