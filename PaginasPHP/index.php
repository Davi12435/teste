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

// Consultar todos os servidores
$sql = "SELECT * FROM servers";
$result = $conn->query($sql);

?>
<?php $conn->close(); ?>
