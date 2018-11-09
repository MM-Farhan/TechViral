<?php

$username = filter_input(INPUT_POST, username);
$email = filter_input(INPUT_POST, email);
$password = filter_input(INPUT_POST, password);
if (!empty($username))
{
	if (!empty($password)) 
	{
		$host = "localhost";
		$dbusername = "phpmyadmin";
		$dbpassword = "123456";
		$dbname = "phpmyadmin";

		$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
		if (mysqli_connect_error()) 
		{
			die('Connect Error ('.mysqli_connect_errno() .')'
				. mysqli_connect_error());

		}
		else
		{
			$sql = "INSET INTO registration(username,email,password) values ('$username','$email','$password')";
			if ($conn->query($sql))
			{
				echo "New record inserted";
			}
			else
			{
				echo "Error:". $sql . "<br>" . $conn->error;
			}
			$conn -> close();sssssss
		}
	}
	else
	{
		echo "Password should not be empty";
		die();
	}
}
else
{
	echo "username should not be empty";
	die();
}	

}


?>