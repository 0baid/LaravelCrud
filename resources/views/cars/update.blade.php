@extends('cars.layout')
@section('content')

<div class="container-fluid">
    <form class="form-horizontal" method="post" action="/cars/{{$car->id}}">
        
		@csrf
		@method('put')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="{{$car->name}}" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">Color</label>  
			  <div class="col-md-4">
			  <input id="color" name="color" type="text" placeholder="{{$car->color}}" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">Company</label>  
			  <div class="col-md-4">
			  <input id="company" name="company" type="text" placeholder="{{$car->company}}" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Update</button>
			  </div>
			</div>

			</fieldset>
		</form>
		
</div>

@endsection