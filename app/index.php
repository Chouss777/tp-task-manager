  <?php
require 'db.php';

$pdo->exec("CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255)
)");

$tasks = $pdo->query("SELECT * FROM tasks")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
    >
</head>
<body>

<h1>Task Manager</h1>

<form action="add_task.php" method="POST">
    <input name="title" placeholder="Nouvelle tâche">
    <button>Ajouter</button>
</form>

<ul>
    <?php foreach ($tasks as $task): ?>
        >
            <?= $task['title'] ?>
            <a href="delete_task.php?id=<?= $task['id'] ?>">Supprimer</a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
