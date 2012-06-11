<?php 

require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);

$sql = $db->prepare('SELECT id, title, director, release_date,
					FROM movies
					WHERE id = :id
					');
					
					$sql->bindvalue(':id', $id, PDO::PARAM_INT);
					$sql->execute();
					$results = $sql->fetch();
		
?> 

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Movies</title>
</head>

<body>

<h1><?php echo $results['title']; ?> </h1>

<dl>
	<dt>Movie Title</dt>
    <dd><?php echo $results['title']; ?></dd>
    
    <dt>Director</dt>
     <dd><?php echo $results['director']; ?></dd>
    <dt>Release Date</dt>
    <dd><?php echo $results ['release_date']; ?></dd>
    </dl>
    
     <a href="delete.php?id=<?php echo $id;?>">Delete</a>
  

</body>
</html>