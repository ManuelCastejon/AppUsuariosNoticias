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
        print "Seccion Usuarios<br>";
        // evaluamos OPERACION      

        if(isset($_GET['operacion'])){
            // CRUD
            $operacion = $_GET['operacion'];
            //index.php?seccion=usuarios&operacion=crear
            switch($operacion){
                // Crear Usuario --> UsuarioCrear()
                case 'crear':
                    UsuariosCrear();  
                    break;               
                case 'leer':
                     UsuariosLeer($_GET['id']);
                    break;
                case 'actualizar':
                    UsuariosActualizar($_GET['id']);
                   break;
                case 'borrar':
                   UsuariosBorrar($_GET['id']);
                  break;
                  // index.php?seccion=usuarios&operacion=listado
                case 'listado'
                    // imprimo todos los usuarios
                   UsuariosListado();
                   break;
            }

        } // end operacion
        else {
            // imprimo todos los usuarios
            UsuariosListado();
        }



    }elseif ($seccion == 'noticias'){
        // mostrar información del módulo noticias
        print "Seccion Noticias";

        // evaluamos OPERACION      

        if(isset($_GET['operacion'])){
            // CRUD
            $operacion = $_GET['operacion'];
            //index.php?seccion=Noticias&operacion=crear
            switch($operacion){
                // Crear Usuario --> UsuarioCrear()
                case 'crear':
                    NoticiasCrear();  
                    break;               
                case 'leer':
                     NoticiasLeer($_GET['id']);
                    break;
                case 'actualizar':
                    NoticiasActualizar($_GET['id']);
                   break;
                case 'borrar':
                   NoticiasBorrar($_GET['id']);
                  break;
                  // index.php?seccion=Noticias&operacion=listado
                case 'listado'
                    // imprimo todos los Noticias
                   NoticiasListado();
                   break;
            }

        } // end operacion
        else {
            // imprimo todos los Noticias
            NoticiasListado();
        }


























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