<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?> &middot; Edit Dinosaur</title>
</head>
<body>
<form method="post" action="edit.php?id=<?php echo $id; ?>">
<div>
<label for="title">Dinosaur Name<?php if (isset($errors['title'])) : ?> <strong>is required</strong><?php endif; ?></label>
<input id="title" name="title" value="<?php echo $title; ?>" required>
</div>
<div>
<label for="release_date">release_date<?php if (isset($errors['release_date'])) : ?> <strong>is required</strong><?php endif; ?></label>
<input id="release_date" name="release_date" value="<?php echo $release_date; ?>" required>
</div>
<button type="submit">Save</button>
</form>
</body>
</html>

<?php

require_once 'includes/db.php';

$errors = array();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
header('Location: index.php');
exit;
}

$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (empty($title)) {
$errors['title'] = true;
}

if (empty($release_date)) {
$errors['release_date'] = true;
}

if (empty($errors)) {
$sql = $db->prepare('
UPDATE dinosaurs
SET title = :title, release_date = :release_date
WHERE id = :id
');
$sql->bindValue(':title', $title, PDO::PARAM_STR);
$sql->bindValue(':release_date', $release_date, PDO::PARAM_STR);
$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();

header('Location: index.php');
exit;
}
} else {
$sql = $db->prepare('
SELECT id, title, release_date
FROM dinosaurs
WHERE id = :id
');
$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();
$results = $sql->fetch();

$title = $results['title'];
$release_date = $results['release_date'];
}

?>