<?php

// Datos de conexión a la base de datos
function conexión(){}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";
$table = "administrador";

// Crear conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$Id = $_POST['Id'];
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = "(y-m-a";

// Insertar datos en la base de datos
$sql = "INSERT INTO administrador (nombre, contraseña, email, telefono, fecha) 
VALUES ('$nombre', '$contraseña', '$email', '$telefono', '$fecha)";

if ($conn->query($sql) === TRUE) {
  echo "Datos insertados correctamente";
} else {
  echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
