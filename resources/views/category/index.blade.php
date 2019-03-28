@extends('adminlayout')
@section('links')
@section('links')
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
  
$(document).ready(function() {
  $('#example').DataTable();
} );

  </script>
@endsection
@section('nav')

<div class="container">
  <h1 class="text-center">View Catetory</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3">
    </div>
   <div class="col-md-6 card" style=" margin-top: 30px;" >
    <div class ="div1 card-body ">
    <table class="table container"cellspacing="0" id="example">
        <thead>
          <tr>
            <th scope="col">Category ID</th>
            <th scope="col">Category Name</th>
            
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($datas as  $data)
          <tr>
            <td>{{ $data->id}}</td>
            <td>{{ $data->name}}</td>
            
            <td><a href="/category/{{ $data->id}}/edit" class="btn btn-default">Update</a></td>
            <td>
              <form method="POST" action="/category/{{ $data->id }}" >
              @method('DELETE')
              @csrf
              <div>
                <button type="submit" class="btn btn-danger " >Delete</button>
              </div>
              @include('errors')
              </form>
            </td>
          </tr>
               @endforeach
      </tbody>
      </table>
    </div>
  </div>
</div>

 @endsection  
@section('footer')
@endsection

