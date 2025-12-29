<?php
    include('conex.php');
    if ($conex1 == "si"){
        if (isset($_POST['newreg1'])){
            $c_id = $_POST['iduser'];
            $c_num = trim($_POST["nomuser"]) . ", " . trim($_POST["apeuser"]);
            $c_dni = $_POST['dniuser'];
            $c_tel = $_POST['teluser'];
            $c_dir = $_POST['diruser'];
            $c_cor = $_POST['coruser'];
            $c_cla = $_POST['clauser'];
            $c_clave_encriptada = password_hash($c_cla, PASSWORD_DEFAULT);
            $sql_in = "INSERT INTO user(iduser,nomuser,dniuser,teluser,diruser,coruser,clauser) VALUES ($c_id,'$c_num',$c_dni,$c_tel,'$c_dir','$c_cor','$c_clave_encriptada')";
            $num_reg = $link->exec($sql_in);
            $msg = ($num_reg) ? "se registró exitosamente" : "la clave ya existe";
	    } 
        if (isset($_POST['editreg1'])) {
                $c_id = $_POST['iduser'];
                $c_num = trim($_POST["nomuser"]) . ", " . trim($_POST["apeuser"]);
                $c_dni = $_POST['dniuser'];
                $c_tel = $_POST['teluser'];
                $c_dir = $_POST['diruser'];
                $c_cor = $_POST['coruser'];
                $c_cla = $_POST['clauser'];
        
                if (!empty($c_cla)) {
                    $clave_encriptada = password_hash($c_cla, PASSWORD_DEFAULT);
                    $sql_update = "UPDATE user SET nomuser='$c_num', dniuser=$c_dni, teluser=$c_tel,
                                   diruser='$c_dir', coruser='$c_cor', clauser='$clave_encriptada'
                                   WHERE iduser=$c_id";
                } else {
                    $sql_update = "UPDATE user SET nomuser='$c_num', dniuser=$c_dni, teluser=$c_tel,
                                   diruser='$c_dir', coruser='$c_cor'
                                   WHERE iduser=$c_id";
                }
        
                $num_reg = $link->exec($sql_update);
                $msg = ($num_reg) ? "Se Actualizó $num_reg registro" : "No se Realizaron Actualizaciones";
            }
                
        
            if (isset($_GET['delreg1'])) {
                $c_id = $_GET['delreg1'];
                $sql_del = "DELETE FROM user WHERE iduser=$c_id";
                $num_reg = $link->exec($sql_del);
                $msg = ($num_reg) ? "Se Eliminó $num_reg registro" : "No se pudo eliminar";
            }
        }
    header("location: ../index.php?m=$msg");
?>