@extends('adminlayout')
@section('links')
@endsection
@section('nav')

<div class="container">
  <h1 class="text-center">order</h1>
</div>
<div class="container" >
  <div class="row">
	<div class="col-md-2 ">
</div>
	<div class="col-md-8 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >
 <form method="POST" action="/order/{{ $data->id }}"  >
       @csrf
       @method('PATCH')
<div class="field">
		Order status:
    <br>
     <select class="form-control" name="status">
        <option  value="on process" >on process</option>
        <option   value="Delivered">Delivered</option>
        
      </select>

<div>
  <br>
	<button type="submit" class="btn btn-success w-100" style="width: 515px;">approval</button>
</div>
@include('errors')
</form>
</div>
</div>
</div>
</div>
@endsection  
@section('footer')
@endsection
