<?php
/**
 * declarar una clase como abstracta
 * esta clase no se puede instanciar. Sólo puede ser usar a través de herencia
 * */
abstract class Abstracta
{
    private $nombre;
    
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
}
//####################################
class Hija extends Abstracta
{
    public function __construct($nombre)
    {
        parent::__construct($nombre);
    }
}

//####################################
$a=new Hija("Pedro alla");
echo $a->getNombre();
