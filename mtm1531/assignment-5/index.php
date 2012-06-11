<?php

require_once 'includes/db.php'; 

$sql = $db-> query ('
SELECT id, title, director, release_date
	FROM movies
    ORDER BY title ASC;

');

$results = $sql-> fetchALL();

?> 

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Movies</title>
</head>
<body>
	<?php foreach ($results as $movie): ?>
    <h2><a href="single.php?id=<?php echo $movie['id']; ?>"></h2>
    <h2><?php echo $movie ['title'] ?> </dd>
    <dt>Release Date </dt>
    <dd><?php echo $movie ['release_date']; ?> </dd>
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
