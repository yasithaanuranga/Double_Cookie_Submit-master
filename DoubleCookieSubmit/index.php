<?php


require_once 'Token.php';


if(isset($_POST['user']) && isset($_POST['password'])){
	if($_POST['user'] == 'admin' && $_POST['password'] == 'password'){


		 $_SESSION['user'] = $_POST['user']; 
	    Token::generate_token();
	    header('Location: ./details.php'); 


	}
	else{
		echo 'User Name Or Password Invalid';
	}
}
else{

	echo 'Please Insert User Name and Password';
}

?>

<body>

	<center>
		<h3>Double Cookie Submit for prevent CSRF</h3>
	</center>

<form method="post" action="">
User Name : <input type="text" name="user" id="user"><br/><br/>
Password  : <input type="password" name="password" id="password"><br/><br/>
<input type="submit" name="submit" value="login">
</form>
	


</body>

