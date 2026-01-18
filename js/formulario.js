//SELECCION//
const b_iduser = document.querySelector('#iduser');
const b_nomuser = document.querySelector('#nomuser');
const b_apeuser = document.querySelector('#apeuser');
const b_dniuser = document.querySelector('#dniuser');
const b_teluser = document.querySelector('#teluser');
const b_diruser = document.querySelector('#diruser');
const b_coruser = document.querySelector('#coruser');
const b_clauser = document.querySelector('#clauser');
const b_newreg = document.querySelector('#newreg');
const b_cancel = document.querySelector('#cancel');

b_cancel.onclick = () => {                                              //Para Cancelar
    b_iduser.readOnly = false;   
    b_iduser.value = "";
    b_nomuser.value = "";
    b_apeuser.value = "";
    b_dniuser.value = "";
    b_teluser.value = "";
    b_diruser.value = "";
    b_coruser.value = "";
    b_clauser.value = "";
    b_newreg.name = "newreg1";   
    b_newreg.value = "Agregar";
}

function jsedit(idu, nomu, apeu, dniu, telu, diru, corr, cla) {         //Para Editar
    b_iduser.readOnly = true;
    b_iduser.value = idu;
    b_nomuser.value = nomu;
    b_apeuser.value = apeu;
    b_dniuser.value = dniu;
    b_teluser.value = telu;
    b_diruser.value = diru;
    b_coruser.value = corr;
    b_clauser.value = cla;
    b_newreg.name = "editreg1"; 
    b_newreg.value = "Guardar Cambios";
}

function jsdel(del_id) {                                                //Para Eliminar
    if (confirm("Eliminar Registro? " + del_id)) {
        location.href = "lib/lib1.php?delreg1=" + del_id;               //CAMBIAR LA LOCATION.HREF
    }
}
