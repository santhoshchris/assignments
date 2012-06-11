<?php

$errors = array();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_USERNAME);
$message = filter_input(INPUT_POST,'message', FILTER_SANITIZE_STRING);
$radio = filter_input(INPUT_POST, 'radio' , FILTER_SANITIZE_STRING);
$subject = filter_input(INPUT_POST, 'terms', FILTER_SANITIZE_STRING);


if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Check to see if the form has been submitted before validating
	if (empty($name)) {
		$errors['name'] = true;
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = true;
	}
	
	if (mb_strlen($username) < 25) { // mb_strlen = multi-byte string length
		$errors['username'] = true;
	}
	
	if (!in_array($radio, $possible_subjects)) {
		$errors['radio'] = true;
	}
	
	if (!array_key_exists($priority, $possible_priorities)) {
		$errors['priority'] = true;
	}
 

if(!isset($_POST['terms'])){
		$errors['terms']=true;
	}

if (empty($errors)){
		$headers ='From:=' .$name. '<' .$email. '>';
		mail('chri0163@algonquinlive.com',$possible_subjects[$subject],$message,$headers);
	}
}

if($language!='English' ||$language !='French' ||$language!='Spanish'){
		$errors['language']=true;

}

?>