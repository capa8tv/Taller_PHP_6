<?php
require_once("Padre.php");
/**
 * Uso de Herencia Simple
 * */
class Hija extends Padre 
{
    public function __construct()
    {
        parent::__construct("Capa8tv","yo@cesarcancino.com");
    }
}
/**
 * generamos una instancia de la clase Hija
 * */
$h=new Hija();
echo $h->getNombre();
echo "<br />";
$h->setNombre("Pedro Lemebel");
echo $h->getNombre(); 
