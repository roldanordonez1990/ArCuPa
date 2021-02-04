<?php

require_once 'conexion.php';
require_once 'model/Noticias.php';

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

    public static function deleteNoticias($titulo){
        try{
            $conex = new Conexion();
            $conex->exec("DELETE from noticias WHERE titulo ='$titulo'");
        }catch(PDOException $ex){

            die('error con la base de datos');

        }
        
        unset($conex);
    }

    public static function getNoticias($tipo) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticias WHERE tipo='$tipo'");
            if ($result->rowCount()) {
                //creo un producto

                while ($row = $result->fetchObject()) {

                    $n = new Noticias($row->imagen, $row->titulo, $row->id_autor, $row->fecha, $row->contenido, $row->tipo);
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

}

?>