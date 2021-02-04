<?php

class Noticias {

    public $imagen;
    public $titulo;
    public $id_autor;
    public $fecha;
    public $contenido;
    public $tipo;
    
    
    function __construct($imagen="", $titulo="", $id_autor="", $fecha="", $contenido="", $tipo="") {
        $this->imagen = $imagen;
        $this->titulo = $titulo;
        $this->id_autor = $id_autor;
        $this->fecha = $fecha;
        $this->contenido = $contenido;
        $this->tipo = $tipo;
    }
    
       function nuevaNoticia($imagen, $titulo, $id_autor, $fecha, $contenido, $tipo) {
        $this->imagen = $imagen;
        $this->titulo = $titulo;
        $this->id_autor = $id_autor;
        $this->fecha = $fecha;
        $this->contenido = $contenido;
        $this->tipo = $tipo;
    }
}

    ?>