<?php
class Person
{
    //atributo name si o si tengo que declarar el atributo 
    public $name;
    
    //metodo greet(saludar)
    public function greet()
    {
        return "Hola $this->name";
    }
}