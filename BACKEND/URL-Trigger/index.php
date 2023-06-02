<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';

$filename = 'content/' . $controller . '.php';
if (file_exists($filename)) {
    include($filename);
    if (function_exists($controller)) {
        $render = $controller();
    } else {
        $render = '<h1>Function not found!</h1>';
    }
} else {
    $render = '<h1>Page not found!</h1>';
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
  <a href="index.php?controller=home">Home</a> | 
  <a href="index.php?controller=bla">Bla</a>
  <article>
      <?php echo $render; ?>
  </article>
</body>
</html>
