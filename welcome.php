<!DOCTYPE html>

<?php 
	if (isset($_POST['register']))
	{
		$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pw'];
		$birthdate = $_POST['bday'];

		echo "Welcome Mr. " . $firstName . " " . $lastName . "!<br/>" . 
			'You ID number is ' . $studentNo . ". <br/> 
			Your email addess is " . $emailAddress . '. <br/>
			Your password is ' . $password . ". <br/> 
			Your birthady is " . $birthdate . '. <br/><br/> 
			The time is ';

	}
	else
	{
		header('location: register.php');
	}

?>

<html> 





</htm