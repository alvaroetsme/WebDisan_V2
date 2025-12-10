<?php
  $title = "Inicio | DISAN SRL";
  $description = "Fabricamos soluciones en empaques plásticos de alta calidad.";
  include __DIR__ . '/../../../app/includes/header.php';
?>

<link rel="stylesheet" href="/webdisan/public/assets/css/Quienes_somos.css">
<link rel="stylesheet" href="/webdisan/public/assets/css/base.css">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiénes Somos - DISAN | Líderes en Soluciones Plásticas y Mantas POLYTARP</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
	<!-- Header -->

	<!-- Menú flotante -->
	<nav class="floating-menu">
		<ul>
			<li><a href="#conocenos" class="active"><i class="fas fa-home"></i> Conócenos</a></li>
			<li><a href="#historia"><i class="fas fa-history"></i> Historia</a></li>
			<li><a href="#sectores"><i class="fas fa-industry"></i> Sectores</a></li>
			<li><a href="#certificaciones"><i class="fas fa-award"></i> Certificaciones</a></li>
			<li><a href="#contactenos"><i class="fas fa-envelope"></i> Contacto</a></li>
		</ul>
	</nav>

	<!-- Hero Section -->
	<section id="conocenos" class="hero">
		<div class="hero-bg"></div>
		<div class="hero-content">
			<h1>QUIÉNES SOMOS</h1>
			<p><strong>DISAN, desde 1977, líder en soluciones plásticas, fabricando bolsas de polietileno (PEAD y PEBD) y Mantas POLYTARP para los mercados nacional e internacional</strong></p>

			<div class="hero-stats">
				<div class="stat">
					<span class="stat-number">47+</span>
					<span class="stat-text">Años de experiencia</span>
				</div>
				<div class="stat">
					<span class="stat-number">7+</span>
					<span class="stat-text">Sectores industriales</span>
				</div>
				<div class="stat">
					<span class="stat-number">ISO</span>
					<span class="stat-text">Certificaciones de calidad</span>
				</div>
			</div>

			<div class="scroll-indicator">
				<i class="fas fa-chevron-down"></i>
			</div>
		</div>
	</section>

	<!-- Sección Historia - CON FONDO DEGRADADO PROFESIONAL -->
	<section id="historia" class="history fade-in">
		<div class="history-bg" style="background-image: url('D:/WebDisan/public/pages/Imagen/Wallpapers/Walp_Contacto');"></div>
		<div class="section-header">
			<h2 class="section-title">Nuestra Historia</h2>
			<p class="section-subtitle">Más de cuatro décadas liderando la industria plástica, fabricando bolsas PEAD y PEBD, y mantas Polytarp con calidad, innovación y resistencia que trascienden fronteras.</p>
		</div>

		<div class="history-content">
			<!-- Texto a la izquierda -->
			<div class="history-text">
				<p>Fundada en 1977, DISAN ha crecido para convertirse en un referente en la industria plástica, con una trayectoria marcada por la innovación, calidad y compromiso con nuestros clientes.</p>
				<p>Desde nuestros inicios, nos hemos especializado en la línea plástica, desarrollando soluciones que satisfacen las necesidades tanto del mercado nacional como internacional. Nuestra experiencia de más de 40 años nos ha permitido consolidarnos como socios estratégicos de empresas líderes en diversos sectores industriales.</p>
				<p>En DISAN, combinamos tecnología de vanguardia con el talento humano más capacitado para ofrecer productos que superan las expectativas de calidad, durabilidad y funcionalidad.</p>
			</div>

			<!-- Imagen a la derecha -->
			<div class="history-image">
				<img src="../../assets/img/Quienes_somos/Empresa2.png" alt="Instalaciones de DISAN">
			</div>
		</div>
	</section>

	<!-- Sección Sectores - ACTUALIZADA -->
	<section id="sectores" class="sectors fade-in">
		<div class="section-header">
			<h2 class="section-title">Sectores Industriales</h2>
			<p class="section-subtitle">Nuestros principales clientes son empresas industriales en diversos sectores</p>
		</div>

		<div class="sectors-grid">
			<div class="sector-card">
				<div class="sector-icon" style="background: #3b82f6;">
					<i data-feather="package"></i>
				</div>
				<h3 class="sector-name">Empaque de Alimentos</h3>
			</div>
			<div class="sector-card">
				<div class="sector-icon" style="background: #10b981;">
					<i data-feather="leaf"></i>
				</div>
				<h3 class="sector-name">Agroindustriales</h3>
			</div>
			<div class="sector-card">
				<div class="sector-icon" style="background: #ef4444;">
					<i data-feather="droplet"></i>
				</div>
				<h3 class="sector-name">Químicos</h3>
			</div>
			<div class="sector-card">
				<div class="sector-icon" style="background: #8b5cf6;">
					<i data-feather="layers"></i>
				</div>
				<h3 class="sector-name">Textiles</h3>
			</div>
			<div class="sector-card">
				<div class="sector-icon" style="background: #64748b;">
					<i data-feather="minimize-2"></i>
				</div>
				<h3 class="sector-name">Mineras</h3>
			</div>
			<div class="sector-card">
				<div class="sector-icon" style="background: #06b6d4;">
					<i data-feather="anchor"></i>
				</div>
				<h3 class="sector-name">Pesqueras</h3>
			</div>
			<div class="sector-card">
				<div class="sector-icon" style="background: #f97316;">
					<i data-feather="tool"></i>
				</div>
				<h3 class="sector-name">Construcción</h3>
			</div>
			<div class="sector-card">
				<div class="sector-icon" style="background: #6366f1;">
					<i data-feather="settings"></i>
				</div>
				<h3 class="sector-name">Metalmecánica</h3>
			</div>
		</div>
	</section>

	<div class="btn-wspp">
      <a href="https://wa.me/944958214" target="_blank" rel="noopener">
        <img src="../../../public/assets/img/icons8-whatsapp-96.png" alt="DISAN SRL" height="60" onerror="this.onerror=null;alert('No se encontró el logo')">
      </a>
    </div>  

	<!-- Footer -->
	<footer>
		<div class="footer-content">
			<div class="footer-section">
				<h3>DISAN</h3>
				<p>Líderes en soluciones plásticas y Polytarp desde 1977, comprometidos con la calidad, innovación y satisfacción del cliente.</p>
				<div class="social-links">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="footer-section">
				<h3>Contacto</h3>
				<p><i class="fas fa-envelope"></i> ventas@disansrl.com</p>
				<p><i class="fas fa-phone"></i> +51 452-2300</p>
				<p><i class="fas fa-map-marker-alt"></i> Av. Universitaria 560 – Lima 01 - Peru</p>
			</div>
			<div class="footer-section">
				<h3>Enlaces Rápidos</h3>
				<p><a href="#conocenos" style="color: white; text-decoration: none;">Conócenos</a></p>
				<p><a href="#historia" style="color: white; text-decoration: none;">Nuestra Historia</a></p>
				<p><a href="#sectores" style="color: white; text-decoration: none;">Sectores Industriales</a></p>
			</div>
		</div>
		<div class="footer-bottom">
			<p>&copy; 2023 DISAN. Todos los derechos reservados. | Soluciones Plásticas de Calidad</p>
		</div>
	</footer>

	<script>
		// Inicializar Feather Icons
				        feather.replace();
				        
				        // Animación de aparición al hacer scroll
				        document.addEventListener('DOMContentLoaded', function() {
				            const fadeElements = document.querySelectorAll('.fade-in');
				            
				            const fadeInOnScroll = function() {
				                fadeElements.forEach(element => {
				                    const elementTop = element.getBoundingClientRect().top;
				                    const elementVisible = 150;
				                    
				                    if (elementTop < window.innerHeight - elementVisible) {
				                        element.classList.add('visible');
				                    }
				                });
				            };
				            
				            // Ejecutar al cargar y al hacer scroll
				            fadeInOnScroll();
				            window.addEventListener('scroll', fadeInOnScroll);
				            
				            // Navegación suave para el menú flotante
				            document.querySelectorAll('.floating-menu a').forEach(anchor => {
				                anchor.addEventListener('click', function(e) {
				                    e.preventDefault();
				                    
				                    const targetId = this.getAttribute('href');
				                    const targetElement = document.querySelector(targetId);
				                    
				                    window.scrollTo({
				                        top: targetElement.offsetTop - 80,
				                        behavior: 'smooth'
				                    });
				                    
				                    // Actualizar elemento activo en el menú
				                    document.querySelectorAll('.floating-menu a').forEach(a => {
				                        a.classList.remove('active');
				                    });
				                    this.classList.add('active');
				                });
				            });
				            
				            // Actualizar elemento activo al hacer scroll
				            window.addEventListener('scroll', function() {
				                let current = '';
				                const sections = document.querySelectorAll('section');
				                
				                sections.forEach(section => {
				                    const sectionTop = section.offsetTop;
				                    const sectionHeight = section.clientHeight;
				                    if (pageYOffset >= (sectionTop - 150)) {
				                        current = section.getAttribute('id');
				                    }
				                });
				                
				                document.querySelectorAll('.floating-menu a').forEach(a => {
				                    a.classList.remove('active');
				                    if (a.getAttribute('href') === '#' + current) {
				                        a.classList.add('active');
				                    }
				                });
				            });
				        });
				
		
	</script>
</body>