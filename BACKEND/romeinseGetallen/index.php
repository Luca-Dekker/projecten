<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="decimal">Geef een decimaal getal:</label>
        <input type="number" name="decimal">
        <button type="submit">Verander</button>
    </form>
    <?php
    function toRoman($num)
    {
        $map = array(
            'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
            'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
            'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
        );
        $roman = '';
        foreach ($map as $key => $value) {
            while ($num >= $value) {
                $roman .= $key;
                $num -= $value;
            }
        }
        return $roman;
    }

    function fromRoman($roman)
    {
        $map = array(
            'M' => 1000, 'D' => 500, 'C' => 100, 'L' => 50,
            'X' => 10, 'V' => 5, 'I' => 1
        );
        $num = 0;
        for ($i = 0; $i < strlen($roman); $i++) {
            if ($i > 0 && $map[$roman[$i]] > $map[$roman[$i - 1]]) {
                $num += $map[$roman[$i]] - 2 * $map[$roman[$i - 1]];
            } else {
                $num += $map[$roman[$i]];
            }
        }
        return $num;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $decimal = $_POST['decimal'];
        $roman = toRoman($decimal);
        echo "Decimaal $decimal in romeinse cijfers is: $roman\n";
    }
    ?>
</body>

</html>