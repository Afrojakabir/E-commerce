@extends('layout')
@section('links')
@endsection
@section('nav')
<br>

<div class="container">
  <h1 class="text-center">Modifying  sub Catatory</h1>
</div>
<div class="container  " >
	<div class="col-md-3 ">
</div>
	<div class="col-md-6 panel panel-default" style=" margin-top: 30px;" >
<div class ="div1 panel-body "  >
<form method="POST" action="homepage/{{$data['id']}}" >

	@method('PATCH')
	@csrf

	<div class="field">
	
		Catatory Name:<br>
		<div class="control">
		<input type="text" class="form-control" name="name" value="{{$data['qty']}}" placeholder="number" required><br>
	</div>
</div>

<div>
	<button type="submit" class="btn btn-success w-100" style="width: 515px;">Update</button>
</div>
@include('errors')
</form>



</div>

 @endsection  
@section('footer')
@endsection