<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Calculate</title>
</head>

<link href="css/general.css" rel="stylesheet">

<body>
	
	<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
    
	<form method="post" actions="index.php">
    	
        <label for="int1"> Number 1 </label>
        <input type="number" name="int1">
       
        	
            <form method="post" actions="index.php">
    	<label for="int2"> Number 2 </label>
        <input type="number" id="int2" name="int2">
        <label for="function">Function </label>
       	<select id="rating" name "function">
            
            <option value="+">+</option>
            <option value="-">- </option>
            <option value="*">*</option>
            <option value="/">/</option>
           
         </select>
      <button type="submit">Calculate</button>
      
    </form>


<?php

$int1 = 0;
$int2 = 0;
$function = '+';
$answer = 0;

if (isset($_POST['int1'])) {
  $int1 = $_POST['int1'];
}

if (isset($_POST['int2'])) {
  $int2 = $_POST['int2'];
}

if (isset($_POST['function'])) {
  $func = $_POST['function'];
}

switch ($function) {
  case '-':
    $answer = $int1 - $int2;
    break;
  case '*':
    $answer = $int1 * $int2;
    break;
  case '/':
    $answer = $int1 / $int2;
    break;
  case '+':
  default:
    $answer = $int1 + $int2;
    break;
}

$total = $answer * 1.13;

?>

<p>

<h3>                 

FINAL ANSWER <p>

 <?php endif; ?>
    
$<?php echo number_format($total, 2); ?>
    
</h3>

	</body>
</html>