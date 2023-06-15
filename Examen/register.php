<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "Onepiece1234";
$dbname = "evento";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario de registro
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

// Insertar los datos en la tabla de usuarios
$sql = "INSERT INTO Usuarios (nombre, correo_electronico, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
