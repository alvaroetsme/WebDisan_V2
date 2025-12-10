// =====================
// Filtros por (Tipo, Material) según sección
// =====================

// Contenedores
const grid = document.querySelector('.galeria');
const filtros = document.querySelector('.filtros');

// Mensaje “sin resultados”
const empty = document.createElement('div');
empty.className = 'empty';
empty.textContent = 'No hay resultados con los filtros actuales.';
empty.hidden = true;
grid.parentElement.appendChild(empty);

// Helpers
function parseCSV(v) {
  return v.split(',').map(s => s.trim()).filter(Boolean);
}
function norm(s) {
  return s.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase();
}

// Lee todos los pares (tipo, material) seleccionados
function getSelectedPairs() {
  const pairs = [];
  if (!filtros) return pairs;

  // Todos los checkboxes marcados dentro de .filtros
  const checked = filtros.querySelectorAll('input[type="checkbox"]:checked');

  checked.forEach(cb => {
    // Busca el h3 de la sección a la que pertenece este checkbox
    const section = cb.closest('section');
    const h3 = section ? section.querySelector('h3') : null;
    const tipo = h3 ? h3.textContent.trim() : '';

    const material = cb.value.trim();
    if (tipo && material) {
      pairs.push({ tipo, material });
    }
  });
  return pairs;
}

// ¿La card coincide con alguna combinación seleccionada?
function matches(card, selectedPairs) {
  if (!selectedPairs.length) return true; // sin filtros => todo

  const tipoCard = card.dataset.tipo || '';
  const mats = new Set(parseCSV(card.dataset.material || '').map(norm));

  return selectedPairs.some(p =>
    norm(tipoCard) === norm(p.tipo) && mats.has(norm(p.material))
  );
}

// Aplica filtros
function applyFilters() {
  const selectedPairs = getSelectedPairs();
  let visible = 0;

  grid.querySelectorAll('.card').forEach(card => {
    const ok = matches(card, selectedPairs);
    card.style.display = ok ? '' : 'none';
    if (ok) visible++;
  });

  empty.hidden = visible !== 0;
}

// Eventos
if (filtros) {
  filtros.addEventListener('change', e => {
    const t = e.target;
    if (t.type !== 'checkbox') return;
    applyFilters();
  });
}

// Primera pasada
applyFilters();
