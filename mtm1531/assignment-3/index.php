<?php

$possible_subjects = array(
	'name'
		,'email'
		, 'username'
		, 'password' 
		, 'preferredlang'	
		, 'notes'
		, 'acceptterms'	
);

require_once 'includes/form-processor.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Validation</title>

<link href="css/general.css" rel="stylesheet">

</head>
<body>

	<form method="post" action="index.php">
    
    	<div>
			<label for="name">Name<?php if (isset($errors['name'])) : ?> <strong>is required</strong><?php endif; ?></label>
			<input id="name" name="name" value="<?php echo $name; ?>" required>
		</div>
    
    <p>
    
        <div>
    	<label for ="email">E-mail Address</label>
        <input type ="email" id="email" name="email" value="<?php echo $name; ?>">
    </div>
    
    <p>
    
    <div>
    
    	<label for="username"> Username </label>
        <input type="text" id="username" name="username">
        
      <p>
			<label for="password">Password</label>
			<input type="password" id="password" name="password">
        
        
        </div>
    
    <p>
    
    <fieldset>
    	
        <legend>Preferred Language</legend>
        
        <input type="radio" id="french" name="spanish" value="english">
        <label for="english">English</label>
        
        <input type="radio" id="spanish" name="english" value="french">
        <label for ="narhal">French </label>
        
        <input type="radio" id="french" name="english" value="spanish">
        <label for ="yeti">Spanish</label>
        
        <P>

    <div>
    	<label for="message">Notes</label>
        <textarea id="message" name="message" ><?php echo $mesagge; ?> </textarea>
    </div>
    
    <div>
    
    <p>
    
    <input type="checkbox" id="terms" name="terms" value="1">
    <label for="terms">Accept terms? </label>
    <?php if (isset($errors['terms'])) : ?>
    		<strong class="error"> You must comply! </strong> 
            <?php endif; ?>  

    <button type="submit"> Send </button>
    
    </div>
   
    
    </form> 