<?php
    $servername = "localhost";
    $database = "tienda_terror";
    $username= "root";
    $password= "";

    // Create connection
    $conexion = new mysqli($servername, $username, $password, $database, 3307);


    // Check connection
    if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

    $sql = 'SELECT nombre_producto, descripcion, precio, stock, imagen FROM productos WHERE id_categoria = 1';
    $result = $conexion->query($sql);
?>