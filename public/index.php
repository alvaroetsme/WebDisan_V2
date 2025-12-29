<?php
$headerVariant = 'transparent';
$title = "Inicio | DISAN SRL";
$description = "Fabricamos soluciones en empaques plásticos de alta calidad.";
include __DIR__ . '/../app/includes/header.php';
?>

<link rel="stylesheet" href="/WebDisan/public/assets/css/index.css">
<link rel="stylesheet" href="/WebDisan/public/assets/css/base.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<main>
  <section id="carrusel-principal" class="carousel" aria-label="Imágenes de DISAN SRL">
    <div class="carousel-slides">
      <figure class="carousel-slide is-active">
        <img src="assets/img/Index/w-Polytar01.jpg" alt="Extrusión y soplado en DISAN SRL" loading="eager">
        <figcaption class="caption">
          <h2>MANTAS POLYTARP</h2>
          <p>Para los desafíos más exigentes, la cobertura más resistente. Mantas Polytarp: No solo protegemos, sino que permanecemos.</p>
        </figcaption>
        <div class="overlay"></div>
      </figure>

      <figure class="carousel-slide">
        <img src="assets/img/Index/w-Rollos01.png" alt="Línea de producción PEBD/PEAD" loading="lazy">
        <figcaption class="caption">
          <h2>ROLLOS PEBD / PEAD</h2>
          <p>Calidad y fuerza en rollos PEBD y PEAD, soluciones a tu medida.</p>
        </figcaption>
        <div class="overlay"></div>
      </figure>

      <figure class="carousel-slide">
        <img src="assets/img/Index/w-Cobertor01.webp" alt="Mantas Polytarp de alta resistencia" loading="lazy">
        <figcaption class="caption">
          <h2>COBERTORES DE POLIPROPILENO</h2>
          <p>Nuestros cobertores rectangulares y cuadrados de polipropileno se adaptan a la forma de tu carga. Porque la protección perfecta no es una talla única, es un ajuste exacto.</p>
        </figcaption>
        <div class="overlay"></div>
      </figure>

      <figure class="carousel-slide">
        <img src="assets/img/Index/w-Ductos.jpg" alt="Mantas Polytarp de alta resistencia" loading="lazy">
        <figcaption class="caption">
          <h2>MALLA ANTIÁFIDOS</h2>
          <p>Expertos en cobertura y protección. Lo sólido, cubierto. La amenaza, filtrada.</p>
        </figcaption>
        <div class="overlay"></div>
      </figure>

      <figure class="carousel-slide">
        <img src="assets/img/Index/w-Rollos02.jpeg" alt="Mantas Polytarp de alta resistencia" loading="lazy">
        <figcaption class="caption">
          <h2>FÁBRICA DE BOLSAS PLÁSTICAS</h2>
          <p>Somos una fábrica de bolsas plásticas en Perú, llevamos años en la industria brindando soluciones con bolsas prácticas, resistentes y hechas a medida. Disponemos de una infraestructura sólida, personal competente y una dedicación incesante a la calidad.</p>
        </figcaption>
        <div class="overlay"></div>
      </figure>

    </div>

    <!-- Flechas -->
    <button class="carousel-nav prev" aria-label="Anterior">‹</button>
    <button class="carousel-nav next" aria-label="Siguiente">›</button>

    <!-- Dots -->
    <div class="carousel-dots" aria-label="Indicadores"></div>
  </section>

  <section class="info">

    <div class="info_block">
      <div>
        <span>Soluciones industriales en empaques y coberturas plásticas.Fabricamos bolsas y rollos de PEBD y PEAD, además de mantas y cobertores Polytarp, cumpliendo altos estándares de calidad para garantizar protección, eficiencia y desempeño.</span>

        <H3>Expertos en Polietileno de baja y alta densidad.</H3>
      </div>
      <p>Más de 40 años produciendo bolsas, mangas y mantas plásticas con materiales de alta resistencia, cumpliendo los estándares de calidad más exigentes del mercado.</p>
      <div class="info_buttons">
        <button class="btn">Solicitar Cotización</button>
        <button class="btn">Ver nuestros productos</button>
      </div>
    </div>

    <div class="info_block info-img">
      <img id="img_info1" src="assets/img/Index_Manta.png">
      <img id="img_info2" src="assets/img/Index_Bolsa01.jpeg">
    </div>

  </section>

  <section class="certificados">
    <span>Contamos con:</span>
    <div class="bloque">
      <div class="certification-block">
        <img src="assets/img/Index_Iso.png" height="180px">
        <div class="caption">
          <h3>Certificación ISO 9001</h3>
          <p>Certifica nuestro sistema de gestión de calidad basado en la mejora continua y en el cumplimiento de requisitos normativos, asegurando consistencia en cada lote producido.</p>
        </div>
      </div>
      <div class="certification-block">
        <img src="assets/img/Index_Brc.png" height="180px">
        <div class="caption">
          <h3>Certificación BRCGS PACKAGING</h3>
          <p>Respalda nuestro compromiso con la producción segura y controlada de empaques plásticos, cumpliendo exigentes normas internacionales de higiene y trazabilidad.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="galeria">
    <div class="producto-card e1">
      <img src="assets/img/Index/Index_Footer00.jpg" alt="">
    </div>
    <div class="producto-card">
      <img class="galeria-img" src="assets/img/Index/Index_Footer01.png" alt="">
    </div>
    <div class="producto-card">
      <img src="assets/img/Index/Index_Footer02.jpeg" alt="">
    </div>
    <div class="producto-card">
      <img class="galeria-img" src="assets/img/Index/Index_Footer03.png" alt="">
    </div>
    <div class="producto-card">
      <img src="assets/img/Index/Index_Footer04.jpg" alt="">
    </div>
  </div>

  <section id="form-home" class="formulario">
    <div class="contacto_wrap">
      <!-- Columna izquierda: info -->
      <div class="contacto_info">
        <p class="eyebrow">Contáctanos</p>
        <h2 class="title">Realiza una cotización</h2>

        <ul class="contacto_datos">
          <li>
            <strong>Dirección:</strong><br>
            Av. Universitaria 560 – Lima 01 – Perú
          </li>
          <li>
            <strong>Teléfono:</strong><br>
            (511) 452-2300<br>
            (511) 464-1651<br>
            (511) 561-2557
          </li>
          <li>
            <strong>E-mail:</strong><br>
            <a id="correo" href="mailto:ventas@disansrl.com">ventas@disansrl.com</a>
          </li>
        </ul>

        <!-- <a class="contacto__whatsapp" href="https://wa.me/944958214" target="_blank" rel="noopener">
          <span class="contacto__wa-ico" aria-hidden="true">📞</span>
          <span class="contacto__wa-texto">
            <strong>Contáctanos por WhatsApp</strong><br>
            <span class="contacto__wa-num">+51 944 958 214</span>
          </span>
        </a> -->
      </div>

      <!-- Columna derecha: formulario -->
      <div class="contacto__form">
        <form action="pages\contacto\SendByMail.php" method="POST" novalidate>

          <div class="formgrid">
            <div class="field">
              <label for="name">Nombre<br></label>
              <input id="name" name="nombre" type="text" autocomplete="name" placeholder="">
            </div>

            <div class="field">
              <label for="email">Email<span aria-hidden="true">*<br></span></label>
              <input id="email" name="email" type="email" autocomplete="email" required placeholder="" aria-required="true">
            </div>

            <div class="field">
              <label for="empresa">Empresa<br></label>
              <input id="empresa" name="empresa" type="text" autocomplete="empresa">
            </div>

            <div class="field field--full">
              <label for="message">Mensaje<span aria-hidden="true">*<br></span></label>
              <textarea id="message" name="message" rows="4" required aria-required="true" placeholder="Cuéntanos qué necesitas…"></textarea>
            </div>
            <div class="consentimiento">
              <span>Al enviar este formulario acepto la Política de Privacidad y autorizo el uso de mis datos conforme a la Ley 29733.</span>
            </div>
            <div class="actions field--full">
              <button type="submit" class="btn btn--primary">Enviar</button>
            </div>
          </div>

          <!-- zona para mensajes de validación/éxito (manéjalo con JS) -->
          <p class="formmsg" role="status" aria-live="polite"></p>
        </form>
      </div>
    </div>
  </section>
  <div class="btn-wspp">
    <a href="https://wa.me/944958214" target="_blank" rel="noopener">
      <img src="../public/assets/img/icons8-whatsapp-96.png" alt="DISAN SRL" height="60" onerror="this.onerror=null;alert('No se encontró el logo')">
    </a>
  </div>
  <script src="../public/assets/js/main.js"></script>
</main>
<?php
include __DIR__ . '/../app/includes/footer.php';
?>