<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	 <link href="{{ asset('css/loginForm.css') }}" rel="stylesheet">
</head>
<body>
	<div class="logreg">
		<h1>Register</h1>
	    <form method="post" action="{{route('registerPost')}}">
	    	@csrf
	    	<input type="text" name="name" placeholder="Username" required="required" />
	    	<input type="text" name="email" placeholder="Email" required="required" />
	        <input type="password" name="password" placeholder="Password" required="required" />
	        <button type="submit" class="btn btn-primary btn-block btn-large">Register</button>
	    </form>
	</div>
</body>
</html>

