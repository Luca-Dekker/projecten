<!DOCTYPE html>
<html>
<head>
    <title>Cirkel</title>
</head>

<body>
    <h1>Cirkel</h1>
    <form action="" method="post">
        Diameter: <input type="text" name="diameter"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $diameter = $_POST['diameter'];
        $radius = $diameter / 2;
        $omtrek = 2 * pi() * $radius;
        $oppervlakte = pi() * pow($radius, 2);
        echo "Omtrek " . $omtrek . "<br>";
        echo "Oppervlakte: " . $oppervlakte;
    }
    ?>
</body>

</html>