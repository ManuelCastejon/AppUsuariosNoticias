<?php
// Inicia de la App

// carga de ficheros (Controladores)
require ('Modulos/usuarios.php');
require ('Modulos/noticias.php');
require ('include/funciones.php');

if(isset($_GET['seccion'])){
    $seccion = $_GET['seccion'];
    if($seccion == 'usuarios'){
        // mostrar información del módulo Usuarios
        print "Seccion Usuarios";

    }elseif ($seccion == 'noticias'){
        // mostrar información del módulo noticias
        print "Seccion Noticias";
    }
    else {
        // mostrar ERROR
        print "ERROR.. SECCION NO RECONOCIDA";
    }
} // if de sección
else {
    // Mostrar el Index (homepage) de la App
    print "Página de Inicio";

}







?>