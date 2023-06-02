<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object-oriënted</title>
</head>
<body>
<?php
class Teller {
    public function eenTotTien() {
        for ($i = 1; $i <= 10; $i++) {
            echo $i . " ";
        }
    }
}

$teller = new Teller();
$teller->eenTotTien();
?>  
</body>
</html>