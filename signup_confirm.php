
<html >
	<head>
		
		
		<title>Login</title>
		

	</head>


	<body>
		
								
							


		<?php
				$servername = "172.31.100.41";
				$username = "group3";
				$password = "group3";
				$dbname = "dbgroup3";
				$uid = $_POST['userid'];
				$pass = md5($_POST['password']);
				$name = $_POST['name'];
				$cont = $_POST['contact'];
				$email = $_POST['email'];
				$address = $_POST['address'];
								
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
					}

				$sql = "INSERT INTO user (username,password,mobile,email,address,name)
				VALUES ('$uid', '$pass', '$cont','$email', '$address', '$name')";

				if (mysqli_query($conn, $sql)) {
					echo "Your account has been created successfully<br>Redirecting to login page.<br>";
					header("refresh:1; url=index.html");
					} 
				else {
					echo "This username already exists. ";
					header("refresh:1,url=signup.html");
					}
									
				mysqli_close($conn)
		?>
								

		
	</body>

</html>
