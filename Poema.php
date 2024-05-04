<?php
class Poema
{
    public $Titulo;
    public $Autor;
    public $Poema;
    public function __construct($autor, $titulo, $poema)
    {
        $this->Autor = $autor;
        $this->Titulo = $titulo;
        $this->Poema = $poema;
    }
}
