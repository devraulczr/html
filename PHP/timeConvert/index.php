<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $seg = $_POST["seg"] ?? 0;
        function converterSegundos($seg) {
            $s = floor($seg / (7*24*60*60));
            $seg %= 7*24*60*60;

            $d = floor($seg / (24 * 60 * 60));
            $seg %= 24*60*60;

            $h = floor($seg / (60 * 60));
            $seg %= 60*60;

            $m = floor($seg / 60);
            $seg %= 60;

            return "$s Semanas, $d Dias, $h Horas, $m Minutos e $seg Segundos";
        }
    ?>
    <div class="global">
        <div class="form">
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <label for="label1" class="label">Insira A Quantidade De Segundos</label> <br> <br>
                <input type="number" name="seg" id="seg" class="number" value="<?=$seg?>"> <br> <br>
                <input type="submit" value="Calcular" class="send">
            </form>
        </div>
        <div class="result">
            <h1>Resultado</h1>
            <p><?=converterSegundos($seg)?></p>
        </div>
    </div>
</body>
</html>