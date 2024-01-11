


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Formulaires PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <p><h2>résultat : <?= $resultat ?> </h2></p>
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


if(isset($_POST["submit"]) && isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["operation"])) // vérifie si la valeur existe
{
    $nb1 = $_POST["numbre1"];
    $nb2 = $_POST["numbre2"];
    $operation = $_POST["operation"];
    
    function add(int $nb1, int $nb2) : int
    {
       $resultat = $nb1 + $nb2;
        return $resultat;
    }
    function substract(int $nb1, int $nb2) : int
    {
        $resultat = $nb1 - $nb2;
        return $resultat;
    }
    function multiply(int $nb1, int $nb2) : int
    {
        $resultat = $nb1 * $nb2;
        return $resultat;
    }
    function divide(int $nb1, int $nb2) : ?int
    {
         if ($nb2 === 0) {
        return null;
        }
        
       $resultat = $nb1 / $nb2;
        return $resultat;
    }
    function modulo(int $nb1, int $nb2) : ?int
    {
        if ($nb2 === 0) {
        return null;
        }
        
       $resultat = $nb1 % $nb2;
        return $resultat;
    }
}
/* if ($resultat !== "") {
echo "<h2>résultat : $resultat</h2>";
}
*/
if ($nb1 !== null && $nb2 !== null && $operation !== null) {
    if ($operation === 'multiply') {
        $resultat = multiply($nb1, $nb2);
    } elseif ($operation === 'divide') {
        $resultat = divide($nb1, $nb2);
    } elseif ($operation === 'add') {
        $resultat = add($nb1, $nb2);
    } elseif ($operation === 'subtract') {
        $resultat = subtract($nb1, $nb2);
    } elseif ($operation === 'modulus') {
        $resultat = modulo($nb1, $nb2);
    }
}

?>

