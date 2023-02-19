	<!doctype html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Laravel 10 Image Upload Tutorial - Webappfix</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	  </head>
	  <body>
	    <div class="container">
	    	<div class="panel panel-primary">
	    		<div class="panel-heading">
	    			<h2>Laravel 10 Image Upload Example -  Webappfix</h2>
	    		</div>
	    		<div class="panel-body">
	    			@if($message = Session::get('success'))
	    				<div class="alert alert-success alert-block">
	    					<button type="button" class="close" data-dismiss="alert">x</button>
	    					<strong>{{ $message }}</strong>
	    				</div>
	    				<img src="images/{{ \Session::get('image') }}">
	    			@endif
	    			<form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
	    				@csrf
	    				<div class="mb-3">
	    					<label class="form-label">Image:</label>
	    					<input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

	    					@error('image')
	    					<span class="text-danger">{{ $message }}</span>
	    					@enderror
	    				</div>
	    				<div class="mb-3">
	    					<button type="submit" class="btn btn-success">Upload</button>
	    				</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
	  </body>
	</html>
