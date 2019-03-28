<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Sub-Catatory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>
<body>

<div class="container">
  <h1 class="text-center">Insert Sub-Catatory</h1>
</div>
<div class="container  " >
	<div class="col-md-2 "  >
	</div>
	<div class="col-md-8 panel panel-default" style=" margin-top: 30px;" >
		<div class ="div1 panel-body "  >
			<form method="POST" action="/sub_category">
               @csrf
                Catatory:<br>
				<select class="form-control form-control-sm inputval"name="category_id" >

	
				@foreach($datas as  $data)
					<option value="{{ $data->id }}">{{ $data->name}}</option>
		     	 @endforeach

				</select>
				Catatory Name:<br>
				<input type="text" class="form-control" name="name" value="{{ old('title') }}" required><br>
			
				<div class="row">
					<div class="col-sm-8" ><input type="submit" class="btn btn-info" value="Save"><br></div>
							
				</div>
			</form>
</div>
</div>
</div>

</body>
</html>