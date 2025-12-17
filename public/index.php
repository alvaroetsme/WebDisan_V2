<?php
// __DIR__ es una constante mágica que devuelve el directorio del archivo actual.
// Al usarlo en public/index.php, obtienes: C:\xampp\htdocs\WebDisan_V2\public
// Usando dirname() una vez, obtienes la carpeta padre (la raíz del proyecto):
define('ROOT_PATH', dirname(__DIR__));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISAN SRL</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/header.css">
</head>
<body>

<?php include ROOT_PATH . "/app/includes/header.php"; ?>

<main>
    
    <div class="carrusel">
        <img src="assets/img/index/Portal_01.jpg" alt="imagen de ejemplo">
    </div>
</main>

<?php include ROOT_PATH . "/app/includes/footer.php"; ?>

</body>
</html>
