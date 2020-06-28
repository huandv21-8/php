<!DOCTYPE html>
<html>
<head>
	<title>Giai pt bac 2</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
      
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Registation Form - Input User's Detail Information</h2>
			{{-- <h4 style="color:red;" class="ketqua">ket qua: {{$ketqua }}</h4> --}}
			</div>
			<div class="panel-body">
				<form method="get" action="{{route('insertData')}}">
                {{-- {{ csrf_field() }} --}}
					<div class="form-group">
					  <label for="a">Enter a:</label>
					  <input required="true" type="number" class="form-control" id="a" name="a">
					</div>
					<div class="form-group">
					  <label for="b">Enter b:</label>
					  <input required="true" type="number" class="form-control" id="b" name="b">
					</div>
					<div class="form-group">
					  <label for="c">Enter c:</label>
					  <input required="true" type="number" class="form-control" id="c" name="c">
					</div>
					<button class="btn btn-success">Giai phuong trinh</button>
				</form>		
			</div>
		</div>
	</div>
</body>
</html>