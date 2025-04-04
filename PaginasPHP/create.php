<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Servidor</title>
</head>
<body>
    <h1>Criar Novo Servidor</h1>
    <form action="store.php" method="POST">
        <label for="name">Nome do Servidor:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="ip_address">IP do Servidor:</label>
        <input type="text" id="ip_address" name="ip_address" required><br><br>
        <button type="submit">Criar Servidor</button>
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>
