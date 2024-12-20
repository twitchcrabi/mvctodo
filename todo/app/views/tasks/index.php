<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Tâches</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f8fc;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .title-container {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            margin-top: 20px;
        }

        h1 {
            color: #4a90e2;
            font-size: 2em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        .task-actions {
            display: flex;
            gap: 10px;
        }

        .task-actions button {
            padding: 5px 10px;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
        }

        .complete-button {
            background-color: #28a745;
        }

        .complete-button:hover {
            background-color: #218838;
        }

        .delete-button {
            background-color: #dc3545;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

        .task-completed {
            text-decoration: line-through;
            color: #888;
        }
    </style>
</head>
<body>

<h1>Liste des tâches</h1>
<a href="/create">Ajouter une tâche</a>
<a href="/create">Créer un Projet</a>
<table>
 <thead>
 <tr>
 <th>ID</th>
 <th>Titre</th>
 <th>Project</th>
 <th>Statut</th>
 </tr>
 </thead>
 <tbody>
 <?php foreach ($tasks as $task): ?>
 <tr>
 <td><?= $task['id'] ?></td>
 <td><?= $task['title'] ?></td>
 <td><?= $task['is_completed'] ? 'Terminée' :'En cours' ?></td>
 <td>
 <?php if (!$task['is_completed']): ?>
    <form method="POST" action="/complete">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
 <button type="submit">Marquer comme terminée</button>
 </form>
 <?php endif; ?>
 <form method="POST" action="/delete">
    <input type="hidden" name="id" value="<?=$task['id'] ?>">
 <button type="submit">Supprimer</button>
 </form>
 </td>
 </tr>
 <?php endforeach; ?>
 </tbody>
</table>