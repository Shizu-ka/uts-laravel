<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			padding: 0;
		}

		form {
			margin-top: 1em;
			padding: 1em;
			border: 1px solid #CCC;
			border-radius: 1em;
		}

		h1 {
			text-align: center;
			display: flex;
			align-items: center;
			margin: 0;
		}

		h1 span {
			margin-left: 0.5em;
		}

		.logo {
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 0.2em;
            max-width: 100px;
            max-height: 100px;
            object-fit: contain;
		}

		.logo img {
			max-width: 100%;
			max-height: 100%;
			object-fit: contain;
		}

		label {
			display: block;
			margin-bottom: 0.5em;
		}

		input[type="text"],
		input[type="password"] {
            margin-right: 7em;
			padding: 0.5em;
			border-radius: 0.5em;
			border: 1px solid #CCC;
			width: 100%;
			margin-bottom: 1em;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 0.5em;
			border: none;
			border-radius: 0.5em;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

	</style>
</head>
<body>
	<h1>
		<div class="logo">
			<img src="https://i.ibb.co/51bTs1s/favpng-login-user-system-administrator-image.png">
		</div>
		<span>Silahkan Login</span>
	</h1>

	<form action="{{ route('login') }}" method="post">
		@csrf
		<label for="username">Username:</label>
		<input type="text" id="username" name="username">

		<label for="password">Password:</label>
		<input type="password" id="password" name="password">

		<input type="submit" value="Login">
	</form>
</body>
</html>
