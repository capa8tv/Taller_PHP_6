<?php
/**
 * Declarar una interface
 * declarando sus métodos de forma abstracta
 * */
interface Interface1
{
    public function getTexto();
    public function getTexto2();
    
}
interface Interface2 extends Interface1
{
    public function getTexto3();
    public function getTexto4();
}
