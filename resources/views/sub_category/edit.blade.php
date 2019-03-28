<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>
<body>

<div class="container">
  <h1 class="text-center">Modifying  sub Catatory</h1>
</div>
<div class="container  " >
	<div class="col-md-3 ">
</div>
	<div class="col-md-6 panel panel-default" style=" margin-top: 30px;" >
<div class ="div1 panel-body "  >
<form method="POST" action="/sub_category/{{ $data->id }}" >

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

</body>
</html>

