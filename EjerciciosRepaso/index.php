<?php
if(isset($_POST['juego'])){
    $juego = $_POST['juego'];
    switch ($juego) {
        case 'PPT':
            header("Location:PPT.php");
            break;
        case 'Banderas':
            header("Location:Banderas.php");
            break;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <h1>SALA DE JUEGOS</h1>
    </header>
    <fieldset>
        <legend>Piedra,Papel,Tijera | Banderas</legend>
        <form method="post">
            <label>
                <input type="radio" id="juego1" name="juego" value="PPT" checked>Jugar: Piedra,Papel,Tijera<br/>
            </label
            <label>
                <input type="radio" id="juego2" name="juego" value="Banderas">Jugar: Adivina la Bandera <br/>
            </label>
            <button>Jugar</button>
        </form>
    </fieldset>
    <img id="imagen1" src="salaJuego.avif">
</body>
</html>
