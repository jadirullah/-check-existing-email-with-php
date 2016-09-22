<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
	<input type="text" name="email"><br><br><br>
	<input type="submit" name="send" value="check">
</form>


</body>
</html>

<?php
require('smtp-validate-email.php');

// $from = 'jadirullah@drife.co.id'; // for SMTP FROM:<> command
// $emails = array(
//     'jadirullah@gmail.com',
//     'jadirullah123@gmail.com',
//     'jadirullah1233@gmail.com',
//     'jadirullah1234@gmail.com',
//     'jadirullah@drifesolution.com',
// );

if(isset($_POST['send'])){


	$from = 'jadirullah@gmail.com'; // for SMTP FROM:<> command
	$email = $_POST['email'];

	$validator = new SMTP_Validate_Email($email, $from);
	$smtp_results = $validator->validate();


	// echo "<pre>";
	// print_r($smtp_results);
	// echo "</pre>";


	$checks= $smtp_results[$email];

	if($checks ==1){
		echo "Email Valid";
	}else{
		echo "Email Not Valid";
	}

}