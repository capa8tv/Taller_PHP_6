<?php
require_once("Padre.php");
/**
 * Uso de Colaboración de Objetos
 * */
class Hija 
{
   private $padre;
   
   public function __construct()
   {
     $this->padre=new Padre("Capa8tv","yo@cesarcancino.com");
   }
   public function retornaNombre()
   {
        return $this->padre->getNombre();
   }
}
/**
 * generamos una instancia de la clase Hija
 * */
$h=new Hija(); 
echo $h->retornaNombre();
