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
<?php include "includes/formulario.php" ?>
