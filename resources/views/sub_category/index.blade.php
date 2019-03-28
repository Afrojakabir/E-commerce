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
  <h1 class="text-center">view sub Catatory</h1>
</div>
<div class="container  " >
	<div class="col-md-2 "  >
</div>
	<div class="col-md-8 panel panel-default" style=" margin-top: 30px;" >
<div class ="div1 panel-body "  >

                      
  @csrf

	<div>


<table class="table container">
  <thead>
    <tr>
     
      
      <th scope="col">Category Id</th>
       <th scope="col">Category Id</th>
      <th scope="col">Sub category name</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
   @foreach($datas as  $data)
<tr>
  <td>{{ $data->category_id}}</td>
<td>{{ $data->id }}</td>
<td>{{ $data->name }}</td>
<td><a href="/sub_category/{{ $data->id}}/edit" class="btn btn-default">Update</a></td>
<td><form method="POST" action="/sub_category/{{ $data->id }}" >
  @method('DELETE')
  @csrf
  <div>
    <button type="submit" class="btn btn-danger " >Delete</button>
  
</div>
@include('errors')
</form></td>

</tr>
@endforeach
</thead>
</table>
</div>

 



</body>
</html>

