<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="dados.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" require>

        <label>Avaliação:</label>
        <input type="number" name="avaliacao" require>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>