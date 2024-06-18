<?php
$pdo = new PDO('sqlite:tasks.db');
$task = $_POST['task'];
$stmt = $pdo->prepare("INSERT INTO tasks (task) VALUES (:task)");
$stmt->execute(['task' => $task]);
?>
