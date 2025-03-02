<!DOCTYPE html>
<html>

<head>
	<title>login form</title>
	<link rel="stylesheet"
		href="css/login.css">
</head>
<body>
	<div class="main">
		<h1>ITACHI</h1>
		<h3>Enter your login credentials</h3>
		<form name="j1" action="postsite.php" method="post">
			<label for="first">
				Username:
			</label>
			<input type="text"
				id="first"
				name="first"
				placeholder="Enter your Username" required>

			<label for="password">
				Password:
			</label>
			<input type="password"
				id="password"
				name="password"
				placeholder="Enter your Password" required>

			<div class="wrap">
				<button type="submit"
						onclick="solve()">
					Submit
				</button>
			</div>
		</form>
	</div>
</body>




</html>
