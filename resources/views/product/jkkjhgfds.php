@extends('adminlayout')
@section('links')
@endsection
@section('nav')


<div class="container">
  <h1 class="text-center">Product details</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
	 <div class="col-md-10 card" style=" margin-top: 30px;" >
    <div class ="div1 card-body ">
      <table class="table container">
        <thead>
          <tr>
            <th scope="col">Category Id</th>
            <th scope="col">Admin Id</th>
            <th scope="col">Product Id</th>
            <th scope="col">Product name</th>
            <th scope="col">Product Code</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Quantity</th>
            <th scope="col">Product image</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
            @foreach($datas as  $data)
          <tr>
            <td>{{ $data->category_id}}</td>
            <td>{{ $data->user_id}}</td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->code }}</td>
            <td>{{ $data->price }}</td>
            <td>{{ $data->quantity}}</td>
          
            <td><img src="{{'/storage/image/'.$data->img}}" height="40" width="40" /></td>
            <td><a href="/product/{{ $data->id}}/edit" class="btn btn-default">Update</a></td>
            <td>
              <form method="POST" action="/product/{{ $data->id }}">
              @method('DELETE')
              @csrf
                <button type="submit" class="btn btn-danger ">Delete</button>
                @include('errors')
              </form></td>

          </tr>
            @endforeach
        </thead>
      </table>
    </div>
  </div>

</div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6"> 
    </div>
    <div class="col-md-2">
       <a href="/downloadPDF/pdf"" class="btn btn-outline-primary"><i class="far fa-file-pdf"></i>Print pdf</a>
      
    </div>
  </div>
</div>
<br>
<br>
<br>
 @endsection  
@section('footer')
@endsection

