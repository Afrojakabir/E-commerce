@extends('adminlayout')
@section('links')
@endsection
@section('nav')


<div class="container">
  <h1 class="text-center">Image</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
	 <div class="col-md-6 card" style=" margin-top: 30px;" >
    <div class ="div1 card-body ">
      <table class="table container">
        <thead>
          <tr>
            
           
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
            @foreach($datas as  $data)
          <tr>
            
          
            <td><img src="{{'/storage/image/'.$data->img}}" height="40" width="40" /></td>
            <td>
              <form method="POST" action="/image/{{ $data->id }}">
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

<br>
<br>
<br>
 @endsection  
@section('footer')
@endsection

