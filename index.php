<?php
// definir array de pessoas
$pessoas = [
    [
    "nome" => "Elizabeth maoura",
   "idade" => 48,
   "feminino" => true,
],
[
    "nome" => "Ruth oliverira",
   "idade" => 20,
   "feminino" => true,
],
[
    "nome" => "Adamastor narciso",
   "idade" => 27,
   "feminino" => false,
]
];

//$pos=1;
//$pessoa = $pessoas[$pos];

//  echo ('<pre>');
//  print_r($pessoa);
//  echo('<pre>');
//  die();
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php foreach($pessoas as $pos=>$pessoa){ ?>
    <div class="pessoa">
    <img src="./images/face<?=$pos?>.jpeg" alt="<?= $pessoa['nome']; ?>">

    <div class="dados">
        <div class="info">
        <span>Nome:</span>
        <div><?= $pessoa['nome']; ?></div>
        </div>
    
        <div class="info">
        <span>Idade:</span>
        <div><?= $pessoa['idade']; ?></div>
        </div>
    
        <div class="info">
        <span>Sexo:</span>
        <div>
            <?php
            //  if ($pessoa1['feminino']) {
              //    echo ("feminino");
            //  } else {
              //    echo ("masculino");
            //  }

        ?>
      
       <?= $pessoa['femenino'] ? 'femenino' : 'masculino' ?> 

        </div>
        </div>

    </div>

    </div>
            <?php } ?>
</body>
</html>