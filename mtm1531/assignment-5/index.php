<?php

require_once 'includes/db.php'; 

$sql = $db-> query ('
SELECT id, title, director, release_date
	FROM movies
    ORDER BY title ASC;

');

$results = $sql-> fetchAll();

?> 

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Movies</title>
</head>
<body>
	<?php foreach ($results as $movies): ?>
    <h2><a href="single.php?id=<?php echo $movies['id']; ?>"> 
    <h2><?php echo $movies ['title'] ?>  </a> </h2></dd> <p>
   	 <dt>Director </dt>
    <dd><?php echo $movies ['director']; ?> <p>
    <dt>Release Date </dt>
    <dd><?php echo $movies ['release_date']; ?> </dd>
</dl>
<?php endforeach; ?>
	
    <h2>

</body>
</html>