<?php
function old_tiger($data = "", $width = 192, $rounds = 3)
{
    return substr(
        implode(
            array_map(
                function ($h) {
                    return str_pad(bin2hex(strrev($h)), 16, "0");
                },
                str_split(hash("tiger192,$rounds", $data, true), 8)
            )
        ),
        0, 48 - (192 - $width) / 4
    );
}
//echo hash('tiger192,3', 'a-string'), PHP_EOL;
//echo old_tiger('a-string'), PHP_EOL;
$data = "";
?>

<!Doctype html>
<html lang="es">
  <head>
      <title>Hash</title>
  </head>
    <body>
    <h2>Rot 47</h2></br>
        <form name="hash" id="hash" method="post" action="#">
        <p>
            <input type="submit" value="hash"/>
          </p>
          <h3><?=old_tiger('a-string'), PHP_EOL;?></h3>
        </form>

        
    </body>
</html>