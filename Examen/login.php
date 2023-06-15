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

// Obtener los datos del formulario de autenticación
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

// Verificar las credenciales en la tabla de usuarios
$sql = "SELECT * FROM Usuarios WHERE correo_electronico = '$correo' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Autenticación exitosa";
} else {
    echo "Correo electrónico o contraseña incorrectos";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
