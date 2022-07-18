<?php


  class ROT47
  {
    private function operacion($texto)
    {
        return strtr($texto, 
        '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~', 
        'PQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNO');       
    }
    function cifrar($texto)
    {
        $cifrado = $this->operacion($texto);
        return $cifrado;
    }

    function descifrar($texto)
    {
        $descifrado = $this->operacion($texto);
        return $descifrado;
    }
  }

  $cifrado = "";
  $descifrado = "";
  
  if (isset($_POST["txtcifrar"]) || isset($_POST["txtdescifrar"]))
  {
    $rot = new ROT47;

    if(isset($_POST["txtcifrar"]))
    {
      $cifrado = $rot->cifrar($_POST["txtcifrar"]);
    }
    if(isset($_POST["txtdescifrar"]))
    {
      $descifrado = $rot->descifrar($_POST["txtdescifrar"]);  
    }
  }
  
?>
<!Doctype html>
<html lang="es">
  <head>
      <title>Ejemplo de cifrado ROT 47</title>
  </head>
  <body>
    <section>
      <header>
        <h1>Ejemplo de cifrado/descifrado ROT 47</h1>
      </header>
      <fieldset>
        <legend>
          Cifrado
        </legend>
        <form name="cifrar" id="cifrar" method="post" action="#">
          <p>
              <input type="text" name="txtcifrar" id="txtcifrar"/>
          </p>
          <p>
            <input type="submit" value="Cifrar"/>
          </p>
          <p style="color:red">
            <?=$cifrado?>
          </p>
        </form>
      </fieldset>
      <fieldset>
        <legend>
          Desifrado
        </legend>
        <form name="descifrar" id="descifrar" method="post" action="#">
          <p>
              <input type="text" name="txtdescifrar" id="txtdescifrar"/>
          </p>
          <p>
            <input type="submit" value="Descifrar"/>
          </p>
          <p style="color:red">
            <?=$descifrado?>
          </p>
        </form>
      </fieldset>
    </section>
  </body>
</html>