<?php

class Noticias {
    public $id;
    public $imagen;
    public $titulo;
    public $id_autor;
    public $fecha;
    public $contenido;
    public $tipo;
    
    
    function __construct($id="", $imagen="", $titulo="", $id_autor="", $fecha="", $contenido="", $tipo="") {
        $this->id = $id;
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