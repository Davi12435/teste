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

// Verificar se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $ip_address = $_POST['ip_address'];

    // Inserir novo servidor
    $sql = "INSERT INTO servers (name, ip_address) VALUES ('$name', '$ip_address')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo servidor criado com sucesso!";
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
