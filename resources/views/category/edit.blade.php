@extends('adminlayout')
@section('links')
@endsection
@section('nav')

<div class="container">
  <h1 class="text-center">Modifying Catatory</h1>
</div>
<div class="container  " >
	<div class="row">
	<div class="col-md-2">
		</div>
	<div class="col-md-8 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >
<form method="POST" action="/category/{{ $data->id }}" >

	@method('PATCH')
	@csrf

	<div class="field">
	
		Catatory Name:<br>
		<div class="control">
		<input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Catatory name" required><br>
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
</div>
@endsection  
@section('footer')
@endsection
	