<?php

/* Crea una clase Mamifero con las propiedades especie, sonido y familia, y un constructor donde se le
pasarán la especie y el sonido (pero no la familia) para rellenarlos. Además, tendrá un método sonido()
donde se mostrará la frase “Sonido de especie, de la familia familia: sonido”.
Crea otras dos clases que hereden de Mamifero llamadas Perro y Gato. Ambas clases tendrán sólo un
constructor donde se rellenará la familia a la que pertenece cada una (cánidos o felinos).
Comprueba que la aplicación funciona de forma correcta creando un perro y un gato y ejecutando sus
métodos sonido(). */

class Mamifero {
 private $especie;
 private $sonido;
 private $familia;


public function __construct($especie, $sonido) {
    $this->especie = $especie;
    $this->sonido = $sonido;
}


public function sonido(){
 echo    "Sonido de " . $this->especie. " de la familia " .$this->familia." sonido:  ".$this->sonido."<br>";

}

public function setFamilia($familia)
{
    $this->familia = $familia;
}


}

class Perro extends Mamifero {

    public function __construct() {
        $this->setFamilia("cánidos");
        parent::__construct("perro","guau");
    }
}

class Gato extends Mamifero {

    public function __construct() {
    $this->setfamilia("gatos");
    parent::__construct("gato","miau");
        
    }
}

$perro = new Perro();
$perro->sonido();
$gato = new Gato();
$gato->sonido();
