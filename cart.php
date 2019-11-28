<?php
setcookie('Skateboard', 1);
setcookie('Basketbal',2);
setcookie('Skeelers', 3);
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Bit Academy</title>
</head>

<body>

    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>

    <!-- maak hier de opdracht -->


    <form action="cart.php" method="post" class="form-example">
        <div class="form-example">
            <label for="text">keuze : </label>
            <input type="text" name="text" id="text" placeholder="Voer hier je keuze">
            <input type="submit" name="submit" value="Verstuur!">
        </div>
    </form>
    <br><br>

<?php

if (!filter_var($_POST["text"], FILTER_VALIDATE_INT)) {
exit("Niet geldig keuze.");
}
if ($_POST['text'] < 1 OR $_POST['text'] > 3) {
exit("Geen geldige keuze.");
}
echo("Gekozen item : ") . $_POST['text'];
          
?>

</body>

</html>


