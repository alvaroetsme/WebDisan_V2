<?php
    $headerVariant = 'transparent';
    $title = "Inicio | DISAN SRL";
    $description = "Fabricamos soluciones en empaques plásticos de alta calidad.";
    include __DIR__ . '/../../../app/data/productos.php';
    include __DIR__ . '/../../../app/includes/header.php';

    function esc($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
    function csv($arr){ return esc(implode(',', $arr)); }

?>

<link rel="stylesheet" href="/webdisan/public/assets/css/base.css">
<link rel="stylesheet" href="/webdisan/public/assets/css/productos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<main>
    <div>
        <h2>
            Nuestros Productos
        </h2>
    </div>

    <section class="grid">
        <div id="Rollos" class="card">
            <div class="sup">Disan S.R.L</div>
            <div class="inf">
                <span class="subtitulo">Polietileno, Polytarp</span>
                <h3>Rollos</h3>
            </div>
        </div>
        <div id="Cobertores" class="card">
            <div class="sup">Disan S.R.L</div>
            <div class="inf">
                <span class="subtitulo">Polytarp, Polietileno</span>
                <h3>Cobertores</h3>
            </div>
        </div>
        <div id="Mantas" class="card">
            <div class="sup">Disan S.R.L</div>
            <div class="inf">
                <span class="subtitulo">Polietileno, Raschel</span>
                <h3>Mantas</h3>
            </div>
        </div>
        <div id="Bolsas" class="card">
            <div class="sup">Disan S.R.L</div>
            <div class="inf">
                <span class="subtitulo">Polietileno, Polipropileno</span>
                <h3>Bolsas</h3>
            </div>
        </div>
        <div id="Mangas" class="card">
            <div class="sup">Disan S.R.L</div>
            <div class="inf">
                <span class="subtitulo">Polietileno</span>
                <h3>Mangas</h3>
            </div>
        </div>
        </section>
</main>

<?php
  include __DIR__ . '/../../../app/includes/footer.php';
?>
