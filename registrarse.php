<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "127.0.0.1", "formulario");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

$sql = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $email, $password);

if ($stmt->execute()) {
    echo "Registro exitoso. <a href='login.html'>Iniciar sesión</a>";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>