<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database"; // Substitua pelo nome do seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obter ID do servidor
$id = $_GET['id'];

// Excluir servidor
$sql = "DELETE FROM servers WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Servidor excluído com sucesso!";
    header("Location: index.php"); // Redireciona para a página principal
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
