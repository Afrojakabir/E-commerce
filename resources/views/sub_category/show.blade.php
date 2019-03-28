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
  <h1 class="text-center">show  sub Catatory</h1>
</div>
<div class="container  " >
  <div class="col-md-3 ">
</div>
  <div class="col-md-6 panel panel-default" style=" margin-top: 30px;" >
<div class ="div1 panel-body "  >



  
   @foreach($datas as  $data)
    

 <h1>{ $data->name }}</h1>
    @endforeach




<div>
  <a href="/sub_category/{{ $data->id}}/edit">Click for editing sub category</a> 
</div>
  </div>
</div>

</div>

</body>
</html>

