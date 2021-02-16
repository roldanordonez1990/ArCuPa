<?php

require_once 'conexion.php';
require_once 'model/Noticias.php';
require_once 'model/Usuarios.php';
Class ControladorNoticias {

    public static function insertNoticia(Noticias $n){

        try{
            $conex = new Conexion();
           
            $conex->exec("INSERT INTO noticias (imagen, titulo, id_autor, fecha, contenido, tipo) VALUES('$n->imagen', '$n->titulo', '$n->id_autor', '$n->fecha', '$n->contenido', '$n->tipo')");
            
        }catch(PDOException $ex){
            
            die('error con la base de datos');

        }
       
        unset($conex);
    }

    public static function deleteNoticias($id){
        try{
            $conex = new Conexion();
            $conex->exec("DELETE from noticias WHERE id ='$id'");
        }catch(PDOException $ex){

            die('error con la base de datos');

        }
        
        unset($conex);
    }

    public static function getNoticias($tipo) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticias WHERE tipo='$tipo' ORDER BY fecha desc");
            if ($result->rowCount()) {
                //creo un producto

                while ($row = $result->fetchObject()) {

                    $n = new Noticias($row->id, $row->imagen, $row->titulo, $row->id_autor, $row->fecha, $row->contenido, $row->tipo);
                    $noticias[] = clone($n);
                }
                return $noticias;
            } else
                return false;
        } catch (PDOException $ex) {
           
            die('error con la base de datos' . $ex->getMessage());
        }
        unset($result);
        unset($conex);
    }

    public static function modificarNoticia(Noticias $n, $id) {
        try {
            $conex = new Conexion();
            $conex->exec("UPDATE noticias SET imagen='$n->imagen', titulo='$n->titulo', id_autor='$n->id_autor', contenido='$n->contenido' , tipo='$n->tipo' WHERE id=$id");
            
        } catch (PDOException $ex) {
           
            die('error con la base de datos');
            //mata el programa
        }
        unset($conex);
    }

    public static function buscarNoticia($id) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticias WHERE id='$id'");
            if ($result->rowCount()) {
                $row = $result->fetchObject();
                $n = new Noticias($row->id, $row->imagen, $row->titulo, $row->id_autor, $row->fecha, $row->contenido, $row->tipo);
                // como es un objeto de la misma clase se puede hacer así
                return $n;
            } else
                return false;
        } catch (PDOException $ex) {
          
            die('error con la base de datos' . $ex->getMessage());
        }
        unset($result);
        unset($conex);
    }

    public static function getAutorNoLogueado($id_autor, $id_noticia) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT u.nombre, u.apellido FROM usuarios as u, noticias as n where n.id_autor=u.id and n.id_autor='$id_autor' and n.id='$id_noticia'");
         
            return $result;
          
        } catch (PDOException $ex) {
          
            die('error con la base de datos' . $ex->getMessage());
        }
        unset($result);
        unset($conex);
    }
}

?>