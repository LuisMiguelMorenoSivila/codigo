<?php
include('conex.php'); // AGREGAR DATOS A LA BASE DE DATOS

if ($conex === "si") {
    $usuario = trim($_POST['usuario']);
    $clave   = trim($_POST['contraseña']);

    $sql = "SELECT clauser FROM user WHERE nomuser = :usuario";
    $stmt = $link->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $clave_encriptada = $row['clauser'];

        if (password_verify($clave, $clave_encriptada)) {
            header("Location: ../sesion.html"); //CAMBIAR LA LOCATION.HREF
            exit;
        } else {
            echo "<script>alert('Contraseña incorrecta'); window.location.href='sesion.html';</script>"; //CAMBIAR LA LOCATION.HREF
            exit;
        }
    } else {
        echo "<script>alert('Usuario no encontrado'); window.location.href='sesion.html';</script>"; //CAMBIAR LA LOCATION.HREF
        exit;
    }
} else {
    echo "<script>alert('Error de conexión con la base de datos');</script>"; //CAMBIAR LA LOCATION.HREF
}
?>
