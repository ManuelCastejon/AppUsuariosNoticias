<?php


// métodos para manipular Noticias

function NoticiasCrear(){
    print "Creando un noticia Nuevo";
}
function NoticiasLeer($new_id=0){
    if($new_id<0)
    {
        print "noticia no encontrado";
    }
    else{    
         print "Leyendo datos del noticia con ID = $new_id";
    }    
}

function NoticiasActualizar($new_id){
    print "Actualizando datos del noticia con ID = $new_id";
}

function NoticiasBorrar($new_id){
    print "Borrando datos del noticia con ID = $new_id";
}

function NoticiasListado(){
    print "Mostrando TODOS los Noticias";
}

?>