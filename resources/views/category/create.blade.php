@extends('adminlayout')
@section('links')
@endsection
@section('nav')

<div class="container">
  <h1 class="text-center">Insert Catatory</h1>
</div>
<div class="container" >
	<div class="row">
	 <div class="col-md-2 "  >
        </div>
			<div class="col-md-8 card" style=" margin-top: 30px;" >
				<div class ="div1 card-body "  >
                    <form method="POST" action="/category">
                        @csrf
						Catatory Name:<br>
						<input type="text" class="form-control" name="name" value="{{ old('title') }}" required><br>
						<div class="row">
						<div class="col-sm-8" ><input type="submit" class="btn btn-info" value="Save"><br></div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>

 @endsection  
@section('footer')
@endsection