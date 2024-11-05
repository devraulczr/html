<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEXTA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "Funcionou!";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal Request</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal Cookie</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal Session</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);

                echo "<h1>Superglobal Server</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>