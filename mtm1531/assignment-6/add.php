<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Add a Movie</title>
</head>
<body>
<form method="post" action="add.php">
<div>
<label for="title">Movie Name<?php if (isset($errors['title'])) : ?> <strong>is required</strong><?php endif; ?></label>
<input id="title" name="title" value="<?php echo $title; ?>" required>
</div>
<div>
<label for="release_date">Release Date <?php if (isset($errors['release_date'])) : ?> <strong>is required</strong><?php endif; ?></label>
<input id="release_date" name="release_date" value="<?php echo $release_date; ?>" required>
</div>
<button type="submit">Add</button>
</form>

<?php

$errors = array();

$dino_name = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (empty($dino_name)) {
$errors['title'] = true;
}

if (empty($release_date)) {
$errors['release_date'] = true;
}

if (empty($errors)) {
require_once 'includes/db.php';

$sql = $db->prepare('
INSERT INTO movies (title, release_date)
VALUES (:title, :release_date)
');
$sql->bindValue(':title', $title, PDO::PARAM_STR);
$sql->bindValue(':release_date', $release_date, PDO::PARAM_STR);
$sql->execute();

header('Location: index.php');
exit;
}
}

?>

</body>
</html>