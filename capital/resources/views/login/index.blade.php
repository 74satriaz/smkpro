<!doctype html>
<html lang="id">
    <head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/login.css')}}"/>
    <title>Admin Login</title>
    </head>
    <body>
	<div class="login">
		<h1>Login</h1>
	    <form method="post">
	    	<input type="text" name="u" placeholder="Username" required="required" />
	        <input type="password" name="p" placeholder="Password" required="required" />
	        <button type="submit" class="btn btn-primary btn-block btn-large">Masuk</button>
	    </form>
	</div>
</body>
</html>