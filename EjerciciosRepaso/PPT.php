<?php

$contador_IA = $_POST['contador_IA'] ?? 0;
$contador_Jugador = $_POST['contador_Jugador'] ?? 0;

if(isset($_POST['eleccion'])){
    $eleccion = $_POST['eleccion'];
    $resultado_IA = aleatorio();
    switch ($eleccion) {
        case 'piedra':
            if($resultado_IA == 'piedra'){
                $msj = "Piedra.Parece que quedamos empatados en esta ronda.";
            } else if($resultado_IA == 'papel'){
                $msj = "Papel.Esta ronda la gano yo, easy.";
                $contador_IA++;
            } else{
                $msj = "Tijera.Ganaste esta ronda felicidades";
                $contador_Jugador++;
            }
            break;
        case 'papel':
            if($resultado_IA == 'papel'){
                $msj = "Papel.Parece que quedamos empatados en esta ronda.";
            } else if($resultado_IA == 'tijera'){
                $msj = "Tijera.Esta ronda la gano yo, easy.";
                $contador_IA++;
            } else{
                $msj = "Piedra.Ganaste esta ronda felicidades";
                $contador_Jugador++;
            }
            break;
        default:
            if(aleatorio() == 'tijera'){
                $msj = "Tijera.Parece que quedamos empatados en esta ronda.";
            } else if($resultado_IA == 'piedra'){
                $msj = "Piedra.Esta ronda la gano yo, easy.";
                $contador_IA++;
            } else{
                $msj = "Papel.Ganaste esta ronda felicidades";
                $contador_Jugador++;
            }
            break;
    }
    if($contador_Jugador == 3 || $contador_IA == 3){
        header("Location: final.php?contador_Jugador=$contador_Jugador&contador_IA=$contador_IA");
    }
}
function aleatorio(){
    $arrayPPT = array("piedra", "papel", "tijera");
    $resultado_array = array_rand($arrayPPT);
    $resultadoPPT = $arrayPPT[$resultado_array];
    return $resultadoPPT;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="PPT.css">
    <title>Piedra,Papel,Tijera</title>
</head>
<?php if($contador_IA == 2 && $contador_Jugador == 2):?>
    <body style="background: red">
    <header>
        <h1 style="color:red">
            RONDA FINAL ACABEMOS ESTO
        </h1>
    </header>

    <fieldset>
        <legend>Piedra,Papel,Tijera</legend>
        <h3>Peparate para perder pringado.<br/>Elige:</h3>
        <form method="post">
            <button style="background: orangered" name="eleccion" value="piedra">👊</button>
            <button style="background: orangered" name="eleccion" value="papel">📃</button>
            <button style="background: orangered" name="eleccion" value="tijera">✂️</button>
            <input type="hidden" name="contador_IA" value="<?php echo $contador_IA; ?>">
            <input type="hidden" name="contador_Jugador" value="<?php echo $contador_Jugador; ?>">
        </form>
    </fieldset>
    <img src="termina.jpg" width="400px" height="100px" style="display: block;margin: 0 auto">
    <fieldset>
        <legend>CONTADOR PARTIDA</legend>
        <h1>Contador IA: <?php echo $contador_IA ?></h1>
        <h1>Contador Jugador: <?php echo $contador_Jugador ?></h1>
    </fieldset>
    <h1 style="color:orangered"><?php echo $msj?></h1>
    </body>
<?php else:?>
    <body>
    <header>
        <h1>
            Piedra,Papel,Tijera 👊✂️📃
        </h1>
    </header>

    <fieldset>
        <legend>Piedra,Papel,Tijera</legend>
        <h3>Peparate para perder pringado.<br/>Elige:</h3>
        <form method="post">
            <button name="eleccion" value="piedra">👊</button>
            <button name="eleccion" value="papel">📃</button>
            <button name="eleccion" value="tijera">✂️</button>
            <input type="hidden" name="contador_IA" value="<?php echo $contador_IA; ?>">
            <input type="hidden" name="contador_Jugador" value="<?php echo $contador_Jugador; ?>">
        </form>
    </fieldset>
    <fieldset>
        <legend>CONTADOR PARTIDA</legend>
        <h1>Contador IA: <?php echo $contador_IA ?></h1>
        <h1>Contador Jugador: <?php echo $contador_Jugador ?></h1>
    </fieldset>
    <?php if(isset($_POST['eleccion'])): ?>
        <h1><?php echo $msj ?></h1>
    <?php endif; ?>
    </body>
</html>
<?php endif;?>