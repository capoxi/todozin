<?php
$pdo = new PDO('sqlite:tasks.db');
$stmt = $pdo->query("SELECT * FROM tasks");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($tasks as $task) {
    echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
    echo htmlspecialchars($task['task']);
    echo '<button class="btn btn-danger btn-sm delete-task" data-id="' . $task['id'] . '">Deletar</button>';
    echo '</li>';
}
?>
