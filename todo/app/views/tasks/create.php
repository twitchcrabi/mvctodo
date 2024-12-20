<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une tâche</title>
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
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            text-align: center;
            color: #4a90e2;
            font-size: 2em;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 1.1em;
            color: #555;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 1em;
            width: 100%;
            border: 2px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #4a90e2;
            outline: none;
        }

        button {
            padding: 12px 20px;
            font-size: 1.1em;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #357ab7;
        }

        .message {
            text-align: center;
            color: green;
            margin-top: 10px;
        }

        .message.error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Ajouter une tâche</h1>
    <form method="POST">
        <label for="title">Titre :</label>
        <input type="text" name="title" required>
        <button type="submit">Ajouter</button>
    </form>

    <div class="message"></div>
</div>

</body>
</html>