(function(){
  const root = document.querySelector('#carrusel-principal');
  if(!root) return;

  const slides = Array.from(root.querySelectorAll('.carousel-slide'));
  const prev   = root.querySelector('.carousel-nav.prev');
  const next   = root.querySelector('.carousel-nav.next');
  const dotsBox= root.querySelector('.carousel-dots');

  // Crear dots
  slides.forEach((_, i) => {
    const b = document.createElement('button');
    b.setAttribute('aria-label', 'Ir al slide ' + (i+1));
    b.addEventListener('click', () => { go(i); restart(); });
    dotsBox.appendChild(b);
  });

  let i = 0, timer = null;
  function setActive(idx){
    slides.forEach(s => s.classList.remove('is-active'));
    dotsBox.querySelectorAll('button').forEach(d => d.classList.remove('is-active'));
    slides[idx].classList.add('is-active');
    dotsBox.children[idx]?.classList.add('is-active');
  }
  function go(n){
    i = (n + slides.length) % slides.length;
    setActive(i);
  }
  function autoplay(){
    timer = setInterval(() => go(i+1), 5000); // ⏱️ cambia cada 5s
  }
  function restart(){ clearInterval(timer); autoplay(); }

  // Eventos
  prev.addEventListener('click', ()=>{ go(i-1); restart(); });
  next.addEventListener('click', ()=>{ go(i+1); restart(); });

  // Pausa con hover (opcional)
  root.addEventListener('mouseenter', ()=>clearInterval(timer));
  root.addEventListener('mouseleave', ()=>autoplay());

  // Navegación con teclado (opcional)
  root.setAttribute('tabindex','0');
  root.addEventListener('keydown', (e)=>{
    if(e.key === 'ArrowLeft'){ go(i-1); restart(); }
    if(e.key === 'ArrowRight'){ go(i+1); restart(); }
  });

  // Swipe en móviles (opcional básico)
  let x0=null;
  root.addEventListener('touchstart', e=> x0 = e.touches[0].clientX, {passive:true});
  root.addEventListener('touchend',   e=>{
    if(x0===null) return;
    const x1 = e.changedTouches[0].clientX;
    if(Math.abs(x1-x0) > 40){ (x1<x0) ? go(i+1) : go(i-1); restart(); }
    x0=null;
  }, {passive:true});

  // Init
  setActive(0);
  autoplay();
})();