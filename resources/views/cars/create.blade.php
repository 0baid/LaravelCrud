@extends('cars.layout')
@section('content')

<div class="container-fluid">
    <form class="form-horizontal" method="post" action="/cars" enctype="multipart/form-data">
        
        @csrf
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">Color</label>  
			  <div class="col-md-4">
			  <input id="color" name="color" type="text" placeholder="Enter color" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">Company</label>  
			  <div class="col-md-4">
			  <input id="company" name="company" type="text" placeholder="Enter company name" class="form-control input-md">
			    
			  </div>
			</div>

			<div class="form-group d-flex flex-column">
			  <label class="col-md-4 control-label" for="image">Image</label>
			  <input  class="col-md-4 py-1" type="file" name="image"/>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
				<button id="submit" name="submit" class="btn btn-primary">Save</button>
			  </div>
			</div>

			</fieldset>
		</form>
</div>

@endsection