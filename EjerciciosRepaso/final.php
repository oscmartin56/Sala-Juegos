<?php
$contador_Jugador = $_GET["contador_Jugador"] ?? 0;
$contador_IA = $_GET["contador_IA"] ?? 0;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="final.css">
    <title>Final</title>
</head>
<?php if($contador_Jugador == 3):?>
    <body id="body1">
        <header>
            <h1>Felicidades, has ganado a la IA</h1>
        </header>
    <img src="ganador.png">
    </body>
<?php elseif($contador_IA == 3): ?>
    <body id="body2">
    <header>
        <h1>Mala suerte, la IA ha acabado ganandote</h1>
    </header>
    <img src="perdedor.png">
    </body>
<?php else: ?>
    <body id="body3">
    <header>
        <h1>NO TENDRIAS QUE ESTAR AQUI</h1>
    </header>
    </body>
<?php endif; ?>
</html>
