<?php
require_once("Interfaces.php");
class Persona implements Interface2
{
    public function getTexto()
    {
        return "texto 1";
    }
    public function getTexto2()
    {
        return "texto 2";
    }
}
//#############################################
$p=new Persona();
echo $p->getTexto();
