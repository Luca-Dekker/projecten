<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Array</h1>
    <?php
    $codeertalen = array(
        "PHP",
        "C#",
        "HTML",
        "JavaScript",
        "Java",
        "C++",
        "C"
    );
    
    sort($codeertalen);

    foreach ($codeertalen as $codelanguage) {
        echo "$codelanguage <br>";
    }

    echo "Aantal talen: " . count($codeertalen)."<br>";

    ?>
</body>
</html>