<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Potatoe</title>
  </head>
  <body>
    <?php
    echo "<h1> Calculo de idade do cao</h1>";

    $dono =$_GET["txtDono"];
    $cao =$_GET["txtCao"];
    $idade =$_GET["txtIdade"];
    $peso =$_GET["txtPeso"];

switch ($peso) {
  case 9:
$idadeEqv = $idade * 12.5;
    break;
  case 23:
$idadeEqv = $idade * 10.5;
    break;

  default:
  $idadeEqv = $idade * 9;
    break;
}

$faixaEtaria = ($idadeEqv <= 65)?"Jovem":"Idoso";

echo "<p> Ola $dono </p>";
echo "<p> Seu cao de Nome $cao de idade $idade tem equivalencia a $idadeEqv Anos humanos!</p>";
echo "<p> Seu Cao esta $faixaEtaria </p>";
     ?>

     <br /> <a href="formhtml5.html">Voltar</a>

  </body>
</html>
