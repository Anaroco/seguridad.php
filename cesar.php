<?php
class Cesar
{

    public $num_desplazamientos = 3;

    public function cifrar($texto)
    {
        $cadena = str_split($texto);
        $resultado = "";
        foreach ($cadena as $letra) {
            $resultado = $resultado . chr(ord($letra) + $this->num_desplazamientos);
        }

        return $resultado;
    }
    public function descifrar($texto)
    {
        $cadena = str_split($texto);
        $resultado = "";
        foreach ($cadena as $letra) {
            $resultado = $resultado . chr(ord($letra) - $this->num_desplazamientos);
        }

        return $resultado;
    }
}

$cifrado = "";
$descifrado = "";

if (isset($_POST["txtcifrar"]) || isset($_POST["txtdescifrar"])) {
    $cesar = new Cesar;
    // $cesar->num_desplazamiento = 10;

    if (isset($_POST["txtcifrar"])) {
        $cifrado = $cesar->cifrar($_POST["txtcifrar"]);
    }
    if (isset($_POST["txtdescifrar"])) {
        $descifrado = $cesar->descifrar($_POST["txtdescifrar"]);
    }
}

?>
<?php include "includes/formulario.php" ?>
