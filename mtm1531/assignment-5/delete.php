<?php 

require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
	header('location: index.php');
	exit; 
}


$sql-> prepare('DELETE FROM movies
				WHERE id = :id'
				);
				
				$sql->bindValue(':id', $id, PDO::PARAM_INT);
				$sql->execute(); 
				
				header('Location: index.php');
exit;