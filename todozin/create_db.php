<?php
$pdo = new PDO('sqlite:tasks.db');
$pdo->exec("CREATE TABLE IF NOT EXISTS tasks (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    task TEXT NOT NULL
)");
?>
