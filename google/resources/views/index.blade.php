
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toan Nguyen Login's Page</title>
</head>
<body>

	<div class='box'>
	<form action="{{ url('check') }}" method="POST">
		{{ csrf_field() }}
		<div class="google">
			<img src="css/google.png" class="img-responsive">
		</div>
		<div class='form-group'>
	            <input type="text" class="form-control" id="nam" name="data" >
	    </div>
	    <div class='align'>
	    	<button type="submit" class="btn btn-primary">Search for it</button>
	    </div>
	  </form>
	</div>
</body>
</html>
