<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deelbaar</title>
</head>

<body>
    <form action="" method="post">
        deeltal: <input type="text" name="deeltal"><br>
        deler: <input type="text" name="deler"><br>
        <input type="submit" value="Bereken">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $deeltal = (int) $_POST["deeltal"];
        $deler = (int) $_POST["deler"];

        if ($deler == 0) {
            echo "Deling door" . "<b> 0 </b>" . "is niet mogelijk.";
        } elseif ($deeltal % $deler == 0) {
            echo "$deler past in $deeltal";
        } else {
            echo "$deler past niet in $deeltal.";
        }
    }
    ?>
</body>
</html>