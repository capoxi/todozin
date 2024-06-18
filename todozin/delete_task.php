<?php
$pdo = new PDO('sqlite:tasks.db');
$id = $_POST['id'];
$stmt = $pdo->prepare("DELETE FROM tasks WHERE id = :id");
$stmt->execute(['id' => $id]);
?>
