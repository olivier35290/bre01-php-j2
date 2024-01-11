



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Formulaires PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="index.php" method="post">
            <fieldset>
                <label for="number1">nombre1 : </label>
                <input type="number" id="number1" name="number1">
                
                <label for="number2">nombre2 : </label>
                <input type="number" id="number2" name="number2">
                
                <select name"operation">
                    <option value="multiplication">Multiplication</option>
                    <option value="division">Division</option>
                    <option value="addition">Addition</option>
                    <option value="soustraction">Soustraction</option>
                    <option value="modulo">Modulo</option>
            </select>
            </fieldset>
            <button type="submit">Calculer</button>
        </form>
    </body>
</html>

<?php

$resultat = "";

if(isset($_POST["submit"])) // vérifie si la valeur existe
{
    $nombre1 = $_POST["numbre1"];
    $nombre2 = $_POST["numbre2"];
    $operation = $_POST["operation"];
    
    switch ($operation){
        case "multiplication":
            $resultat = $nombre1 * $nombre2;
            break;
        case "addition":
            $resultat = $nombre1 + $nombre2;
            break;
        case "soustraction":
            $resultat = $nombre1 - $nombre2;
            break;
        case "division":
            $resultat = $nombre1 / $nombre2;
            break;
        case "modulo":
            $resultat = $nombre1 % $nombre2;
            break;
    }
}
if ($resultat !== "") {
echo "<h2>résultat : $resultat</h2>";
}
?>

