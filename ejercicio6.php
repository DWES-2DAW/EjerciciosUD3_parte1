<?php
class Mamifero
{
    private $especie;
    private $sonido;
    private $familia;
    protected function __construct($especie, $sonido)
    {
        $this->especie = $especie;
        $this->sonido = $sonido;
    }
    public function sonido()
    {
        echo "Sonido del " . $this->especie . ", de la familia " . $this->familia . ": " . $this->sonido . "<br>";
    }
    public function setFamilia($familia)
    {
        $this->familia = $familia;
    }
}
class Perro extends Mamifero
{
    function __construct()
    {
        $this->setFamilia("cánidos");
        parent::__construct("perro", "guau");
    }
}
class Gato extends Mamifero
{
    function __construct()
    {
        $this->setFamilia("felinos");
        parent::__construct("gato", "miau");
    }
}
$perro = new Perro();
$perro->sonido();
$gato = new Gato();
$gato->sonido();
