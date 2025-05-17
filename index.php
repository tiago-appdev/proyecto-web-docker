<?php
$host = 'mysql-db';
$db = 'miappdb';
$user = 'root';
$pass = 'rootpass';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM personas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Personas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Personas registradas</h1>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Email</th></tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["nombre"] ?></td>
            <td><?= $row["email"] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
