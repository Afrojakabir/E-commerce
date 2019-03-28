@extends('adminlayout')
@section('links')
@endsection
@section('nav')


<div class="container">
  <h1 class="text-center">show Catatory</h1>
</div>
<div class="container  " >
  <div class="col-md-3 ">
</div>
  <div class="col-md-6 panel panel-default" style=" margin-top: 30px;" >
<div class ="div1 panel-body "  >


    
<h1>{{$data->name}}</h1>

<!--<div>
    
    <h6>show sub category</h6>

<ul>
  
    @foreach($data-> sub_categorys as  $sub_category)

 <li>{{$sub_category->name}}</li>
    @endforeach
</ul>
  </div>-->

<div>
  <a href="/category/{{ $data->id}}/edit">Click for edit category</a>
</div>

  </div>
</div>

</div>

 @endsection  
@section('footer')
@endsection

