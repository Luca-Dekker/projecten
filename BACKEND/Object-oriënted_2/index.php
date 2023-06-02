<?php
include("Auto.php");
include("AutoOverzicht.php");

$ao = new AutoOverzicht();
$ao->add(new Auto("Audi", "A3", "rood", 28999));
$ao->add(new Auto("BMW", "318i", "blauw", 45677));
$ao->add(new Auto("Mercedes", "C180", "zilver", 39850));
$ao->add(new Auto("Volkswagen", "Golf", "zwart", 18900));
$ao->add(new Auto("Ford", "Fiesta", "wit", 12500));
$ao->add(new Auto("Toyota", "Corolla", "grijs", 21500));
$ao->add(new Auto("Volvo", "XC60", "bruin", 32500));
$ao->add(new Auto("BMW", "X5", "zwart", 45000));
$ao->add(new Auto("Ford", "Mustang", "rood", 40000));
$ao->add(new Auto("Audi", "A4", "blauw", 35000));
$ao->add(new Auto("Tesla", "Model 3", "rood", 50000));
$ao->add(new Auto("Honda", "Civic", "zwart", 22000));
$ao->add(new Auto("Chevrolet", "Camaro", "geel", 35000));
$ao->add(new Auto("Nissan", "Altima", "grijs", 28000));
$ao->add(new Auto("Subaru", "Impreza", "blauw", 25000));
$ao->add(new Auto("Mazda", "CX-5", "wit", 32000));
$ao->add(new Auto("Hyundai", "Tucson", "zilver", 27000));
$ao->add(new Auto("Kia", "Sportage", "oranje", 23000));
$ao->add(new Auto("Jeep", "Wrangler", "groen", 40000));
$ao->add(new Auto("Lexus", "RX 350", "goud", 48000));
$ao->add(new Auto("Audi", "Q5", "wit", 42000));
$ao->add(new Auto("BMW", "M3", "blauw", 58000));
$ao->add(new Auto("Mercedes", "E-Class", "zilver", 52000));
$ao->add(new Auto("Volkswagen", "Passat", "grijs", 32000));
$ao->add(new Auto("Ford", "Explorer", "zwart", 45000));
$ao->add(new Auto("Toyota", "Camry", "rood", 28000));
$ao->add(new Auto("Volvo", "S60", "bruin", 37000));
$ao->add(new Auto("Honda", "Accord", "wit", 31000));
$ao->add(new Auto("Chevrolet", "Equinox", "zilver", 34000));
$ao->add(new Auto("Nissan", "Rogue", "grijs", 29000));
$ao->add(new Auto("Subaru", "Forester", "blauw", 33000));
$ao->add(new Auto("Mazda", "Mazda3", "rood", 26000));
$ao->add(new Auto("Hyundai", "Elantra", "zwart", 23000));
$ao->add(new Auto("Kia", "Optima", "wit", 27000));
$ao->add(new Auto("Jeep", "Grand Cherokee", "groen", 48000));
$ao->add(new Auto("Lexus", "NX 300", "zilver", 42000));
$ao->add(new Auto("Audi", "A5", "blauw", 45000));
$ao->add(new Auto("BMW", "X3", "bruin", 51000));
$ao->add(new Auto("Mercedes", "GLC", "grijs", 48000));
$ao->add(new Auto("Volkswagen", "Tiguan", "zwart", 37000));
$ao->add(new Auto("Ford", "Edge", "rood", 42000));
$ao->add(new Auto("Toyota", "Highlander", "wit", 39000));
$ao->add(new Auto("Volvo", "V60", "zilver", 36000));
$ao->add(new Auto("Honda", "Pilot", "zwart", 44000));
$ao->add(new Auto("Chevrolet", "Silverado", "rood", 47000));
$ao->add(new Auto("Nissan", "Sentra", "grijs", 24000));
$ao->add(new Auto("Subaru", "Outback", "blauw", 32000));
$ao->add(new Auto("Mazda", "CX-9", "wit", 37000));
$ao->add(new Auto("Hyundai", "Santa Fe", "bruin", 32000));
$ao->add(new Auto("Kia", "Sorento", "zilver", 35000));

if (isset($_POST['submit'])) {
    $autos = $ao->filterByMerk($_POST['merk']);
} else {
    $autos = $ao->autos;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object-oriënted_2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <h1 style="text-align: center; padding: 40px"><b>MRWheely</b></h1>
    <form action="index.php" method="post">
        <input type="submit" class="btn btn-primary" name="submit">
        <select name="merk" class="form-select">
            <option value="alle">Alle</option>
            <?php foreach ($ao->getMerken() as $merk) { ?>
                <option><?= $merk ?></option>
            <?php } ?>
        </select>
    </form>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Merk</th>
                <th scope="col">Type</th>
                <th scope="col">Kleur</th>
                <th scope="col">Prijs</th>
            </tr>
        </thead>
        <tbody id="table_body">
            <?php foreach ($autos as $auto) { ?>
                <tr>
                    <td><?= $auto->merk ?></td>
                    <td><?= $auto->type ?></td>
                    <td><?= $auto->kleur ?></td>
                    <td><?= $auto->prijs ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>