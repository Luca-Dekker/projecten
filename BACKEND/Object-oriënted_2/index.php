<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object-oriented_2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

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
$ao->add(new Auto("Audi", "Q7", "zwart", 60000));
$ao->add(new Auto("BMW", "X1", "blauw", 38000));
$ao->add(new Auto("Mercedes", "S-Class", "zilver", 90000));
$ao->add(new Auto("Volkswagen", "Jetta", "rood", 27000));
$ao->add(new Auto("Ford", "Escape", "wit", 32000));
$ao->add(new Auto("Toyota", "RAV4", "grijs", 35000));
$ao->add(new Auto("Volvo", "XC90", "bruin", 45000));
$ao->add(new Auto("Honda", "CR-V", "rood", 31000));
$ao->add(new Auto("Chevrolet", "Traverse", "zwart", 38000));
$ao->add(new Auto("Nissan", "Murano", "zilver", 34000));
$ao->add(new Auto("Subaru", "Legacy", "blauw", 27000));
$ao->add(new Auto("Mazda", "MX-5 Miata", "wit", 32000));
$ao->add(new Auto("Hyundai", "Kona", "oranje", 25000));
$ao->add(new Auto("Kia", "Rio", "grijs", 21000));
$ao->add(new Auto("Jeep", "Compass", "groen", 32000));
$ao->add(new Auto("Lexus", "IS 300", "goud", 41000));
$ao->add(new Auto("Audi", "A6", "wit", 52000));
$ao->add(new Auto("BMW", "X7", "bruin", 75000));
$ao->add(new Auto("Mercedes", "GLE", "zilver", 58000));
$ao->add(new Auto("Volkswagen", "Arteon", "grijs", 42000));
$ao->add(new Auto("Ford", "Ranger", "zwart", 38000));
$ao->add(new Auto("Toyota", "Tacoma", "rood", 35000));
$ao->add(new Auto("Volvo", "V90", "bruin", 46000));
$ao->add(new Auto("Honda", "Fit", "wit", 21000));
$ao->add(new Auto("Chevrolet", "Blazer", "zilver", 37000));
$ao->add(new Auto("Nissan", "Maxima", "zwart", 33000));
$ao->add(new Auto("Subaru", "Crosstrek", "grijs", 28000));
$ao->add(new Auto("Mazda", "CX-30", "blauw", 26000));
$ao->add(new Auto("Hyundai", "Sonata", "wit", 29000));
$ao->add(new Auto("Kia", "Forte", "zilver", 24000));
$ao->add(new Auto("Jeep", "Renegade", "groen", 27000));
$ao->add(new Auto("Lexus", "UX 250h", "goud", 42000));
$ao->add(new Auto("Audi", "Q3", "wit", 38000));
$ao->add(new Auto("BMW", "4 Serie", "blauw", 45000));
$ao->add(new Auto("Mercedes", "A-Klasse", "zilver", 36000));
$ao->add(new Auto("Volkswagen", "Atlas", "grijs", 40000));
$ao->add(new Auto("Ford", "Bronco", "zwart", 48000));
$ao->add(new Auto("Toyota", "Sienna", "rood", 32000));
$ao->add(new Auto("Volvo", "S90", "bruin", 44000));
$ao->add(new Auto("Honda", "Odyssey", "wit", 37000));
$ao->add(new Auto("Chevrolet", "Corvette", "geel", 80000));
$ao->add(new Auto("Nissan", "370Z", "grijs", 35000));
$ao->add(new Auto("Subaru", "BRZ", "blauw", 31000));
$ao->add(new Auto("Mazda", "Mazda6", "rood", 30000));
$ao->add(new Auto("Hyundai", "Veloster", "zwart", 25000));
$ao->add(new Auto("Kia", "Stinger", "wit", 39000));
$ao->add(new Auto("Jeep", "Comanche", "groen", 33000));
$ao->add(new Auto("Lexus", "LC 500", "zilver", 95000));
$ao->add(new Auto("Audi", "R8", "blauw", 150000));
$ao->add(new Auto("BMW", "M5", "zwart", 110000));
$ao->add(new Auto("Mercedes", "G-Klasse", "grijs", 150000));
$ao->add(new Auto("Volkswagen", "Golf GTI", "rood", 33000));
$ao->add(new Auto("Ford", "GT", "wit", 500000));
$ao->add(new Auto("Toyota", "Supra", "blauw", 55000));
$ao->add(new Auto("Volvo", "XC40", "zilver", 35000));
$ao->add(new Auto("Honda", "S2000", "geel", 40000));
$ao->add(new Auto("Chevrolet", "Impala", "zwart", 38000));
$ao->add(new Auto("Nissan", "Versa", "grijs", 22000));
$ao->add(new Auto("Subaru", "Ascent", "blauw", 36000));
$ao->add(new Auto("Mazda", "Miata MX-5", "rood", 28000));
$ao->add(new Auto("Hyundai", "Accent", "wit", 21000));
$ao->add(new Auto("Kia", "Cadenza", "zilver", 34000));
$ao->add(new Auto("Jeep", "Cherokee", "groen", 37000));
$ao->add(new Auto("Lexus", "ES 350", "goud", 43000));
$ao->add(new Auto("Audi", "TT", "blauw", 46000));
$ao->add(new Auto("BMW", "X6", "bruin", 65000));
$ao->add(new Auto("Mercedes", "CLA-Klasse", "grijs", 42000));
$ao->add(new Auto("Volkswagen", "Passat GT", "zwart", 32000));
$ao->add(new Auto("Ford", "F-150", "rood", 45000));
$ao->add(new Auto("Toyota", "Tundra", "wit", 42000));

if (isset($_POST['submit'])) {
    $merkFilter = $_POST['merk'];
    $kleurFilter = $_POST['kleur'];
    
    if ($merkFilter == 'alle' && $kleurFilter == 'alle') {
        $autos = $ao->autos;
    } elseif ($merkFilter != 'alle' && $kleurFilter == 'alle') {
        $autos = $ao->filterByMerk($merkFilter);
    } elseif ($merkFilter == 'alle' && $kleurFilter != 'alle') {
        $autos = $ao->filterByKleur($kleurFilter);
    } else {
        $autos = $ao->filterByMerkEnKleur($merkFilter, $kleurFilter);
    }
} else {
    $autos = $ao->autos;
}
?>

<body>
    <h1 style="text-align: center; padding: 40px"><b>MRWheely</b></h1>
    <form action="index.php" method="post">
        <input type="submit" class="btn btn-primary" name="submit">
        <h5>Merk</h5>
        <select name="merk" class="form-select">
            <option value="alle">Alle</option>
            <?php foreach ($ao->getMerken() as $merk) { ?>
                <option><?= $merk ?></option>
            <?php } ?>
        </select>
        <h5>Kleur</h5>
        <select name="kleur" class="form-select">
            <option value="alle">Alle</option>
            <?php foreach ($ao->getKleuren() as $kleur) { ?>
                <option><?= $kleur ?></option>
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
