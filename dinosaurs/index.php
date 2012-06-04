<?php

require_once 'includes/db.php'; 

$sql = $db-> query ('
SELECT id, dino_name, loves_meat, in_jurassic_park
	FROM dinosaurs
    ORDER BY dino_name ASC;

');

$results = $sql-> fetchALL();

?> 

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Dinosaurs</title>
</head>
<body>
	<?php foreach ($results as $dino): ?>
    <h2><?php echo $dino ['loves_meat'] ?> </dd>
    <dt>In Jurassic Park </dt>
    <dd><?php echo $dino ['in_jurassic_park']; ?> </dd>
</dl>
<?php endforeach; ?>
	
    <h2>
	<dl>
    	<dt>Loves Meat</dt>
        <dt>1</dt>
        <dt>In Jurassic Park</dt>
        <dd>1</dd>
    </dl>

</body>
</html>
