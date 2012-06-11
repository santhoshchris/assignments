<?php 

$dino_name = filter_input(INPUT_POST, 'dino_name',FILTER_SANITIZE_STRING);
$loves_meat = filter_input(INPUT_POST, 'loves_meat', FILTER_SANITIZE_INT);
$in_jurassic_park = (isset($_POST ['in_jurassic_park'])) ? 1 : 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(strlen($dino_name) < 0 || strlen($dino_name) > 256) {
		$errors ['dino_name'] = true;
		
	}
	
	if (in_array($loves_meat, array(0.1))) {
		$errors ['loves_meat'] = true;
	}
}
	
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New Dinosaur</title>
</head>
<body>

	<form method= "post" action="add.php">
    
    	
        
        <div>
        	<label for="dino_name"> Dinosaur Name </label>
            
            <?php if (isset($errors['dino_name'])) : ?>
            <strong class="error"> is required</strong>
            <?php endif; ?>
           
            
            <input id="dino_name" name="dino_name" required>
        
            
        </div>
        
        </form>
        
        <div> 
        
        <input type="radio" id="love" name="loves_meat">
        <label for="love">Loves Meat</label>
        <input type="radio" id="hate" name="loves meat">
        <label for="hate">Hates Meat</label>
        
        </fieldset>
        
        <legend>
        
        	Relationshop with meat 
            <?php if (isset($errors['love_meat'])) :?>
            <strong class="error"> is required </strong>
            <?php endif; ?>
            </legend>
            
            <input type="radio" id="love" name="loves_meat" value="1"
            <?php if ($loves_meat == 1) :?>Checked <?php endif; ?>
            
            </legend>
        
        <div>
        	<input type="checkbox" id="in_jurassic_park" name="in_jurrassic_park">
            <label for="in_jurrassic_park"> In Jurassic Park? </label>

		</div>
        
        <button type="submit"> Add</button>
        
      <form>
</body>
</html>