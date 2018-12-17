<?php


// métodos para manipular Usuarios

function UsuariosCrear(){
    print "Creando un usuario Nuevo";
}
function UsuariosLeer($user_id=0){
    if($user_id<0)
    {
        print "Usuario no encontrado";
    }
    else{    
         print "Leyendo datos del usuario con ID = $user_id";
    }    
}

function UsuariosActualizar($user_id){
    print "Actualizando datos del usuario con ID = $user_id";
}

function UsuariosBorrar($user_id){
    print "Borrando datos del usuario con ID = $user_id";
}

function UsuariosListado(){
    print "Mostrando TODOS los usuarios";
}


?>