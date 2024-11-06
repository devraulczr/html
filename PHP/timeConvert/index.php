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
        $range = $_POST["range"] ?? 0;
        $val = intval($_POST['val']);

        $intrange = intval($range);
        $calc = ($val * $intrange) /100;
        $final = $val + $calc;
    ?>
    <div class="global">
        <div class="form">
                <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <label for="label1" class="label">Preço do produto</label> <br>
                <input type="number" name="val" id="val" value="<?=$val?>" class="number"> <br>
                <label for="label2" id="rangeLabel" class="label">Porcentagem - <?=$range?>%</label> <br>
                <input type="range" name="range" id="range" value="<?=$range?>"         oninput="updateRangeValue(this.value)"> <br> <br>
                <input type="submit" value="Calcular" class="send">
            </form>
        </div>
        <div class="result">
            <section>
                <h1>O Resultado é</h1>
                <p>O Preço Final Do Produto Com O Valor Inicial De <strong><?=$val?></strong></p>
                <p>Com a Taxa de <strong><?=$range?>%</strong> Foi Para <strong><?=$final?></strong></p>
            </section>
        </div>
        <script>
                function updateRangeValue(value) {
                    document.getElementById("rangeLabel").textContent = "Porcentagem - "+value+"%";
                }
        </script>
    </div>
</body>
</html>