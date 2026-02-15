<?php
    include ('../lib/conex.php'); // CAMBIAR CONEX1 A CONEX ♦
    $tablaBody = "";
    if ($conexdb == "si"){   // Usamos la conexión correcta
        $result = $link->query('SELECT * FROM user');
        while ($user = $result->fetch(PDO::FETCH_OBJ)){
            $a_id    = $user->iduser;
            $a_nom   = $user->nomuser;
            $a_dni   = $user->dniuser;
            $a_tel   = $user->teluser;
            $a_dir   = $user->diruser;
            $a_cor   = $user->coruser;
            $a_cla   = $user->clauser;

            $tablaBody .= "<tr>
                <td>$a_id</td>
                <td>$a_nom</td>
                <td>$a_dni</td>
                <td>$a_tel</td>
                <td>$a_dir</td>
                <td>$a_cor</td>
                <td>$a_cla</td>";

            $tablaBody .= "<td>
                <a href=\"#\" onclick=\"jsedit($a_id,'$a_nom',$a_dni,$a_tel,'$a_dir','$a_cor','$a_cla')\">Editar</a> 
                <a href=\"../lib/lib1.php?delreg1=$a_id\">Borrar</a>
                </td></tr>";
        }
    } else {
        echo "No se pudo conectar";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="model.css">
</head>
<body>
    <section>
        <h4>Registro de Usuario</h4>
        <form action="../lib/lib1.php" method="post">
            <div class="formulario">
                ID: <input type="number" name="iduser" id="iduser"><br>
                Nombre: <input type="text" name="nomuser" id="nomuser"><br>
                Apellido: <input type="text" name="apeuser" id="apeuser"><br>
                DNI: <input type="number" name="dniuser" id="dniuser"><br>
                Teléfono: <input type="text" name="teluser" id="teluser"><br>
                Dirección: <input type="text" name="diruser" id="diruser"><br>
                Correo: <input type="email" name="coruser" id="coruser"><br>
                Clave: <input type="password" name="clauser" id="clauser"><br>
                <hr>
                <input type="submit" id="newreg" name="newreg1" value="Agregar">
                <input type="button" id="cancel" value="Cancelar">
            </div>
        </form>
        <br>
        <table>
            <tr>
                <th>ID</th><th>Nombre</th><th>DNI</th><th>Teléfono</th><th>Dirección</th><th>Correo</th><th>Clave</th><th>Opciones</th>
            </tr>
            <?=$tablaBody; ?> 
        </table>
    </section>
</body>
</html>
