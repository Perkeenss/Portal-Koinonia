<?php
// Configuración de la base de datos
$host = "localhost";       // Servidor de la base de datos
$dbname = "iglesia_db";    // Nombre de la base de datos
$username = "root";        // Usuario de la base de datos
$password = "";            // Contraseña del usuario

try {
    // Crear una nueva instancia de PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Configurar el modo de errores de PDO para lanzar excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Puedes descomentar la línea siguiente para comprobar si la conexión es exitosa:
    // echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    // En caso de error, mostrar mensaje y detener la ejecución
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
