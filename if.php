<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <?php
    $a = isset ($_GET["ano"]) ?$_GET["ano"]: 1900;
    $i = date("Y") - $a;
    echo "Voce nasceu em $a e tem $i anos . <br/>";
    if($i >= 18){
      $v = "é obrigado a votar";
      $d = "ja pode dirigir";
    }
    else{
      $v = "não é obrigado a votar";
      $d = "não pode dirigir";
    }
    echo "Com essa idade voce $v e também $d";

    if($i < 16){
      $tipoVoto = "não vota";
    }
    else{
      if(($i>=16 && $i<18) || ($i>65)) {
        $tipoVoto = " voto opcional";
      }
     
    else{
      $tipoVoto = "voto obrigatório";
    }
    echo "<br/> Para essa idade,  $tipoVoto";
    }
    ?>


  </div>
</body>
</html>