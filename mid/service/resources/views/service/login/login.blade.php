@extends('layouts.app2')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-5">
				<div class="login-wrap p-4 p-md-5">
			<div class="icon d-flex align-items-center justify-content-center">
				<span class="fa fa-user-o"></span>
			</div>
			<h3 class="text-center mb-4">Have an account?</h3>
					<form action="{{route('logine')}}" method="post" class="login-form">
						{{@csrf_field()}}
					<div class="form-group">
					<input type="text" class="form-control rounded-left" name="username" <?php if(isset($_COOKIE['remember'])) {echo $_COOKIE['remember'];} ?> value = "<?php if(isset($_COOKIE['remember'])) {echo $_COOKIE['remember'];} ?>" placeholder="username" required>
				</div>
				<span><br>
						{{Cookie::get('name')}}
				</span>
			<div class="form-group d-flex">
				<input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
			</div>
			<div class="form-group d-md-flex">
				<div class="w-50">
					<label class="checkbox-wrap checkbox-primary">Remember Me
									<input type="checkbox" name="remember">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="w-50 text-md-right">
								
							</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
			</div>
			</form>
		</div>
			</div>
		</div>
	</div>
</section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

@endsection