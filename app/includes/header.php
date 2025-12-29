<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 🔹 Metadatos -->
  <title><?= $title ?? 'DISAN SRL' ?></title>
  <meta name="description" content="<?= $description ?? 'Fabricamos soluciones en empaques plásticos de alta calidad.' ?>">
  <meta name="author" content="DISAN SRL">
  <meta name="robots" content="index, follow">

  <!-- 🔹 Vinculo a tu hoja de estilos (agrega tu ruta real después) -->
  <link rel="stylesheet" href="/webdisan/public/assets/css/base.css">
  <link rel="stylesheet" href="/webdisan/public/assets/css/header.css">
  <!-- 🔹 Favicon -->
  <link rel="icon" type="image/png" href="assets/img/logo.png">
</head>

<body>
  <header class="encabezado <?= ($headerVariant ?? 'solid') === 'solid' ? 'encabezado--solid' : 'encabezado--transparent' ?>">

    <!-- logo -->
    <div class="logo-header">
      <a href="/webdisan/public/index.php">
        <img src="/webdisan/public/assets/img/logo.png" alt="DISAN SRL" height="70" onerror="this.onerror=null; alert('No se encontró: ' + this.src)">
        <span>DISAN SRL</span>
      </a>
    </div>

    <!-- Navegación principal -->
    <nav class="main-nav">
      <ul>
        <li><a href="/webdisan/public/index.php">Inicio</a></li>
        <li><a href="/webdisan/public/pages/productos/Productos2.php">Productos</a></li>
        <!-- <li><a href="/webdisan/public/pages/institucional/Quienes_somos.php">Certificados</a></li> -->
        <li><a href="/webdisan/public/pages/institucional/Quienes_somos.php">Nosotros</a></li>
        <!-- <li><a href="/webdisan/public/pages/Certificaciones.php">Probar</a></li> -->
      </ul>
    </nav>

    <!-- Botón -->
    <button class="btn-header" onclick="document.getElementById('form-home').scrollIntoView({behavior: 'smooth'});">
      <span>Solicitar una Cotización</span>
    </button>

    <!-- <button class="hamburguesa">Abrir</button> -->

  </header>
</body>