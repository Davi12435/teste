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

// Obter dados do formulário
$id = $_POST['id'];
$name = $_POST['name'];
$ip_address = $_POST['ip_address'];

// Atualizar servidor
$sql = "UPDATE servers SET name = '$name', ip_address = '$ip_address' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Servidor atualizado com sucesso!";
    header("Location: index.php"); // Redireciona para a página principal
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
