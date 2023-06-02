<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        Hoeveel producten wil je op je boodschappenlijst plaatsen?
        <input type="text" name="aantalBoodschappen" id="aantalBoodschappen">
        <br>
        <button id="print">
            Printen
        </button>
    </form>

    <?php
    if(!empty("aantalBoodschappen"))    {
        echo "Niet ingevuld";   
    }
    ?>
</body>

</html>