<?php
    $title = "Inicio | DISAN SRL";
    $description = "Fabricamos soluciones en empaques plásticos de alta calidad.";
    include __DIR__ . '/../../../app/data/productos.php';
    include __DIR__ . '/../../../app/includes/header.php';

    function esc($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
    function csv($arr){ return esc(implode(',', $arr)); }

?>

<link rel="stylesheet" href="/webdisan/public/assets/css/productos.css">
<link rel="stylesheet" href="/webdisan/public/assets/css/base.css">


<main class="grid">
    <aside class="filtros categorias">
        <section>
            <h3>Rollos</h3>
            <label><input type="checkbox" name="uso" value="Polietileno"> Polietileno</label>
            <label><input type="checkbox" name="uso" value="Polytarp"> Polytarp</label>
        </section>
        <section>
            <h3>Cobertores</h3>
            <label><input type="checkbox" name="uso" value="Polytarp">Polytarp</label>
            <label><input type="checkbox" name="uso" value="PEAD">PEAD</label>
            <label><input type="checkbox" name="uso" value="PEBD">PEBD</label>
        </section>
        <section>
            <h3>Mantas</h3>
            <label><input type="checkbox" name="tipo" value="Polietileno">Polietileno</label>
            <label><input type="checkbox" name="tipo" value="Raschel">Raschel</label>
        </section>
        <section>
            <h3>Bolsas</h3>
            <label><input type="checkbox" name="material" value="PEBD"> PEBD</label>
            <label><input type="checkbox" name="material" value="PEAD"> PEAD</label>
            <label><input type="checkbox" name="material" value="Polipropileno"> Polipropileno</label>
        </section>
        <section>
            <h3>Mangas</h3>
            <label><input type="checkbox" name="uso" value="Polietileno"> Polietileno</label>
        </section>
    </aside>

    <section class="galeria">
        <?php foreach($PRODUCTOS as $p): ?>
            <article class="card"
                data-nombre="<?=esc($p['nombre'])?>"
                data-tipo="<?=esc($p['tipo'])?>"
                data-uso="<?=csv($p['uso'])?>"
                data-material="<?=csv($p['material'])?>">
                <div class="thumb">
                    <img loading="lazy" src="<?=esc($IMG_BASE.$p['img'])?>" alt="<?=esc($p['nombre'])?>">
                    <?php if(!empty($p['etiqueta'])): ?><span class="badge"><?=esc($p['etiqueta'])?></span><?php endif; ?>
                </div>
                <!-- <div class="body">
                    <div class="title"><?=esc($p['nombre'])?></div>
                    <div class="meta">
                        Tipo: <?=esc($p['tipo'])?> · Material: <?=esc(implode(', ', $p['material']))?> · Uso: <?=esc(implode(', ', $p['uso']))?>
                    </div>
                </div> -->
            </article>
        <?php endforeach; ?>
    </section>

</main>

<script src="/webdisan/public/assets/js/catalogo.js"></script>
