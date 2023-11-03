<?php abstract class Trabajador
{
    private $nombre;
    private $sueldo;
    function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public abstract function calcularSueldo($parametro);
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
}
class Empleado extends Trabajador
{
    private const PRECIO_HORA = 9.50;
    public function calcularSueldo($parametro)
    {
        $sueldo = $parametro * self::PRECIO_HORA;
        $this->setSueldo($sueldo);
    }
}
class Gerente extends Trabajador
{
    private $porcentaje;
    private const SUELDO_BASE = 2500;
    function __construct($nombre, $porcentaje)
    {
        $this->porcentaje = $porcentaje;
        parent::__construct($nombre);
    }
    public function calcularSueldo($parametro)
    {
        $sueldo = self::SUELDO_BASE + ($parametro * ($this->porcentaje / 100));
        $this->setSueldo($sueldo);
    }
}
$empleado = new Empleado('Ana');
$empleado->calcularSueldo(180);
echo "Sueldo de " . $empleado->getNombre() . ": " . $empleado->getSueldo() . "<br>";
$gerente = new Gerente('Pedro', 20);
$gerente->calcularSueldo(6980);
echo "Sueldo de " . $gerente->getNombre() . ": " . $gerente->getSueldo() . "<br>";
