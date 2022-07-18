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

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

       <title>Cifrados</title>
    </head>

    <body>
        <div class="container text-center">
            <h1>Cifrados</h1>

            <form name="formulario">
              <select name ="desplegable" onChange='location.replace(document.formulario.desplegable.value);'>
                  <option value="cesar.php">Cesar
                  <option value="rot47.php">Rot 47
                   ...
                </select>


            <hr>
            <form name="cifrar" id="cifrar" method="post" action="#">
                <div class="form-row">
                    <div class="col">
                        <textarea name="txtcifrar" id="txtcifrar" class="form-control" rows="8" cols="80" placeholder="Introduce el texto a codificar"></textarea>
                    </div>
                    <div class="col">
                        <textarea name="txtdescifrar" id="txtdescifrar" class="form-control" rows="8" cols="80" placeholder="Introduce aqui el texto a descodificar"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-row">

                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <button type="submit" value="Cifrar" class="btn btn-primary">Codificar</button>
                                <div class="col">
                                    <h1><?=$cifrado?></h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="input-group">
                              <div class="input-group-addon">
                                <button type="submit" value="Descifrar" class="btn btn-success">Decodificar</button>
                                <div class="col">
                                     <h1><?=$descifrado?></h1>
                                </div>
                          </div>
                        </div>
                    </div>

                </div>
            </form>
            <hr>
              <h2>Resultado</h2>





        </div>
    </body>
</html>