<?php
			$dbhost = 'localhost';
			$username = 'root';
			$password = '';
			$dbname = '';

			$con = mysql_connect("$dbhost", "$username", "$password", "$dbname");

			if(!$con){
				echo "Not connected";
			}else{
				echo "connected";
			}

			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$pass = $_POST['pass'];
			$cpass = $_POST['cpass'];

			$query = "INSERT INTO customer details VALUES('$fname','$lname','$email','$phone','$pass','$cpass')";

			if(mysql_query('$query')){
				echo "You have signed in successfully <br>";
			} else{
				echo "Sign in failed <br>";
			}


		?>