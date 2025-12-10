<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Catálogo DISAN – Galería</title>
<style>
  :root{--brand:#0a7cff;--muted:#6b7280}
  *{box-sizing:border-box} body{margin:0;font-family:Inter,system-ui,Roboto}
  .wrap{max-width:1200px;margin:auto;padding:16px}
  .panel{display:grid;gap:12px;margin-bottom:12px}
  @media(min-width:960px){.panel{grid-template-columns:260px 1fr;gap:20px}}
  .filters{border:1px solid #e5e7eb;border-radius:12px;padding:14px;background:#f8fafc}
  .filters h3{margin:.2rem 0 .6rem}
  .filters label{display:flex;gap:.5rem;align-items:center;margin:.25rem 0}
  .bar{display:flex;gap:8px;align-items:center;margin:8px 0 12px}
  .bar input[type=search]{flex:1;padding:10px 12px;border:1px solid #e5e7eb;border-radius:999px}
  .btn{border:1px solid #e5e7eb;background:#fff;padding:8px 12px;border-radius:999px;cursor:pointer}
  .grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:10px}
  @media(min-width:760px){.grid{grid-template-columns:repeat(3,minmax(0,1fr));gap:14px}}
  @media(min-width:1200px){.grid{grid-template-columns:repeat(4,minmax(0,1fr))}}
  .card{border:1px solid #e5e7eb;border-radius:14px;overflow:hidden;background:#fff}
  .thumb{aspect-ratio:4/3;background:#eef2f7}
  .thumb img{width:100%;height:100%;object-fit:cover;display:block}
  .body{padding:10px 12px}
  .title{font-weight:600;line-height:1.2;margin-bottom:4px}
  .meta{color:var(--muted);font-size:.9rem}
  .empty{padding:20px;border:1px dashed #e5e7eb;border-radius:12px;color:var(--muted);text-align:center;margin-top:10px}
</style>
</head>
<body>
<div class="wrap">
  <header class="bar">
    <input id="q" type="search" placeholder="Buscar por nombre, material, uso…">
    <button id="clear" class="btn">Limpiar</button>
  </header>

  <div class="panel">
    <!-- FILTROS -->
    <aside class="filters" id="filters">
      <section>
        <h3>Tipo</h3>
        <label><input type="checkbox" name="tipo" value="Bolsas"> Bolsas</label>
        <label><input type="checkbox" name="tipo" value="Láminas"> Láminas</label>
        <label><input type="checkbox" name="tipo" value="Mantas"> Mantas</label>
      </section>
      <section>
        <h3>Uso</h3>
        <label><input type="checkbox" name="uso" value="Industrial"> Industrial</label>
        <label><input type="checkbox" name="uso" value="Alimentario"> Alimentario</label>
        <label><input type="checkbox" name="uso" value="Retail"> Retail</label>
        <label><input type="checkbox" name="uso" value="Construcción"> Construcción</label>
        <label><input type="checkbox" name="uso" value="Agrícola"> Agrícola</label>
      </section>
      <section>
        <h3>Material</h3>
        <label><input type="checkbox" name="material" value="PEBD"> PEBD</label>
        <label><input type="checkbox" name="material" value="PEAD"> PEAD</label>
        <label><input type="checkbox" name="material" value="Polietileno"> Polietileno</label>
        <label><input type="checkbox" name="material" value="Polipropileno"> Polipropileno</label>
      </section>
    </aside>

    <!-- GRID -->
    <main>
      <section id="grid" class="grid">
        <!-- Ejemplos (duplica y cambia data-*) -->
        <article class="card"
          data-nombre="Bolsas PEBD impresas"
          data-tipo="Bolsas"
          data-uso="Alimentario,Retail"
          data-material="PEBD">
          <div class="thumb"><img loading="lazy" src="/assets/catalogo/bolsa-pebd-impresa.jpg" alt="Bolsas PEBD impresas"></div>
          <div class="body">
            <div class="title">Bolsas PEBD impresas</div>
            <div class="meta">Tipo: Bolsas · Material: PEBD · Uso: Alimentario, Retail</div>
          </div>
        </article>

        <article class="card"
          data-nombre="Bolsas PEAD industriales"
          data-tipo="Bolsas"
          data-uso="Industrial"
          data-material="PEAD">
          <div class="thumb"><img loading="lazy" src="/assets/catalogo/bolsa-pead-industrial.jpg" alt="Bolsas PEAD industriales"></div>
          <div class="body">
            <div class="title">Bolsas PEAD industriales</div>
            <div class="meta">Tipo: Bolsas · Material: PEAD · Uso: Industrial</div>
          </div>
        </article>

        <article class="card"
          data-nombre="Polytarp en rollo"
          data-tipo="Láminas"
          data-uso="Industrial,Construcción"
          data-material="Polietileno">
          <div class="thumb"><img loading="lazy" src="/assets/catalogo/polytarp-rollo.jpg" alt="Polytarp en rollo"></div>
          <div class="body">
            <div class="title">Polytarp en rollo</div>
            <div class="meta">Tipo: Láminas · Material: Polietileno · Uso: Industrial, Construcción</div>
          </div>
        </article>
      </section>

      <div id="empty" class="empty" hidden>No hay resultados con los filtros actuales.</div>
    </main>
  </div>
</div>

<script>
  const q = document.getElementById('q');
  const grid = document.getElementById('grid');
  const empty = document.getElementById('empty');
  const clearBtn = document.getElementById('clear');
  const filters = {
    tipo: new Set(),
    uso: new Set(),
    material: new Set(),
    q: ''
  };

  function parseCSV(v){ return v.split(',').map(s => s.trim()) }

  function matches(card){
    // texto
    const name = card.dataset.nombre.toLowerCase();
    if (filters.q && !name.includes(filters.q)) return false;

    // tipo (AND entre tipos seleccionados? aquí usamos OR)
    if (filters.tipo.size){
      if (!filters.tipo.has(card.dataset.tipo)) return false;
    }

    // uso (OR contra la lista de la card)
    if (filters.uso.size){
      const usos = new Set(parseCSV(card.dataset.uso));
      const ok = [...filters.uso].some(u => usos.has(u));
      if (!ok) return false;
    }

    // material (OR)
    if (filters.material.size){
      const mats = new Set(parseCSV(card.dataset.material));
      const ok = [...filters.material].some(m => mats.has(m));
      if (!ok) return false;
    }
    return true;
  }

  function applyFilters(){
    let visible = 0;
    [...grid.children].forEach(card => {
      const ok = matches(card);
      card.style.display = ok ? '' : 'none';
      if (ok) visible++;
    });
    empty.hidden = visible !== 0;
  }

  // eventos
  q.addEventListener('input', () => {
    filters.q = q.value.trim().toLowerCase();
    applyFilters();
  });

  document.getElementById('filters').addEventListener('change', (e) => {
    const t = e.target;
    if (t.type !== 'checkbox') return;
    const set = filters[t.name];
    if (t.checked) set.add(t.value);
    else set.delete(t.value);
    applyFilters();
  });

  clearBtn.addEventListener('click', () => {
    q.value = '';
    filters.q = '';
    ['tipo','uso','material'].forEach(k => filters[k].clear());
    document.querySelectorAll('#filters input[type=checkbox]').forEach(cb => cb.checked = false);
    applyFilters();
  });

  // primera pasada
  applyFilters();
</script>
</body>
</html>
