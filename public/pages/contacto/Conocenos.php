<?php
  $title = "Inicio | DISAN SRL";
  $description = "Fabricamos soluciones en empaques plásticos de alta calidad.";
  include __DIR__ . '/../../../app/includes/header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - DISAN</title>
    <style>
        /* Variables de colores y estilos base */
        :root {
            --primary-color: #e6f7ff;
            --secondary-color: #b3e0ff;
            --accent-color: #4da6ff;
            --text-color: #333;
            --light-text: #666;
            --white: #ffffff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--primary-color);
            color: var(--text-color);
            line-height: 1.6;
            position: relative;
            overflow-x: hidden;
        }

        /* Fondo con marca de agua */
        .watermark-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://drive.google.com/uc?id=1kzLYUzKj6rOX6ibPhozU7GFn5YKCADCY');
            background-size: cover;
            background-position: center;
            opacity: 0.08;
            z-index: -1;
        }

        /* Header y logos */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5%;
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: relative;
            z-index: 100;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo {
            height: 60px;
            width: auto;
        }

        /* Menú flotante */
        .floating-menu {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background-color: var(--white);
            border-radius: 10px;
            padding: 15px 10px;
            box-shadow: var(--shadow);
            z-index: 1000;
            transition: var(--transition);
        }

        .floating-menu ul {
            list-style: none;
        }

        .floating-menu li {
            margin: 10px 0;
            position: relative;
        }

        .floating-menu a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            font-size: 14px;
            display: block;
            padding: 8px 15px;
            border-radius: 5px;
            transition: var(--transition);
        }

        .floating-menu a:hover {
            background-color: var(--secondary-color);
            color: var(--accent-color);
        }

        .floating-menu a.active {
            background-color: var(--accent-color);
            color: var(--white);
        }

        /* Secciones principales */
        section {
            padding: 80px 10%;
            position: relative;
        }

        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 70vh;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://drive.google.com/uc?id=1kzLYUzKj6rOX6ibPhozU7GFn5YKCADCY');
            background-size: cover;
            background-position: center;
            opacity: 0.15;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
        }

        h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--accent-color);
            animation: fadeInDown 1s ease;
        }

        .subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: var(--light-text);
            animation: fadeInUp 1s ease;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--accent-color);
            color: var(--white);
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            animation: fadeIn 1.5s ease;
        }

        .btn:hover {
            background-color: #3a8ce6;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-align: center;
            color: var(--accent-color);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent-color);
        }

        /* Historia */
        .history-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
        }

        .history-text {
            flex: 1;
            min-width: 300px;
        }

        .history-image {
            flex: 1;
            min-width: 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .history-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transition);
        }

        .history-image:hover img {
            transform: scale(1.05);
        }

        /* Clientes */
        .clients-section {
            background-color: var(--white);
            border-radius: 15px;
            padding: 60px 40px;
            box-shadow: var(--shadow);
            margin-top: 40px;
        }

        .client-categories {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .category {
            background-color: var(--primary-color);
            padding: 20px;
            border-radius: 10px;
            transition: var(--transition);
        }

        .category:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .category h3 {
            color: var(--accent-color);
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .category ul {
            list-style: none;
        }

        .category li {
            padding: 5px 0;
            position: relative;
            padding-left: 15px;
        }

        .category li::before {
            content: '•';
            color: var(--accent-color);
            position: absolute;
            left: 0;
        }

        /* Footer */
        footer {
            background-color: var(--text-color);
            color: var(--white);
            padding: 40px 10%;
            text-align: center;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            color: var(--secondary-color);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
        }

        /* Animaciones */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 15px;
            }

            .logo-container {
                justify-content: center;
            }

            .floating-menu {
                position: static;
                transform: none;
                width: 100%;
                margin-top: 20px;
                border-radius: 0;
            }

            .floating-menu ul {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .floating-menu li {
                margin: 5px;
            }

            h1 {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }

            section {
                padding: 60px 5%;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 2rem;
            }

            .subtitle {
                font-size: 1.2rem;
            }

            .client-categories {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Fondo con marca de agua -->
    <div class="watermark-bg"></div>

    <!-- Menú flotante -->
    <nav class="floating-menu">
        <ul>
            <li><a href="#conocenos" class="active">Conócenos</a></li>
            <li><a href="#vision-mision">Visión y Misión</a></li>
            <li><a href="#politicas-calidad">Políticas de Calidad</a></li>
            <li><a href="#certificaciones">Certificaciones</a></li>
            <li><a href="#contactenos">Contáctenos</a></li>
        </ul>
    </nav>

    <!-- Sección Hero / Conócenos -->
    <section id="conocenos" class="hero">
        <div class="hero-content">
            <h1>Quiénes Somos</h1>
            <p class="subtitle">Más de cuatro décadas de excelencia en la industria plástica</p>
            <a href="#historia" class="btn">Conoce Nuestra Historia</a>
        </div>
    </section>

    <!-- Sección Historia -->
    <section id="historia" class="fade-in">
        <h2 class="section-title">Nuestra Historia</h2>
        <div class="history-content">
            <div class="history-text">
                <p>Fundada en 1977, DISAN ha crecido para convertirse en un referente en la industria plástica, con una trayectoria marcada por la innovación, calidad y compromiso con nuestros clientes.</p>
                <p>Desde nuestros inicios, nos hemos especializado en la línea plástica, desarrollando soluciones que satisfacen las necesidades tanto del mercado nacional como internacional. Nuestra experiencia de más de 40 años nos ha permitido consolidarnos como socios estratégicos de empresas líderes en diversos sectores industriales.</p>
                <p>En DISAN, combinamos tecnología de vanguardia con el talento humano más capacitado para ofrecer productos que superan las expectativas de calidad, durabilidad y funcionalidad. Nuestra filosofía se basa en la mejora continua y la adaptación a las cambiantes demandas del mercado global.</p>
            </div>
            <div class="history-image">
                <img src="https://drive.google.com/uc?id=1kzLYUzKj6rOX6ibPhozU7GFn5YKCADCY" alt="Instalaciones de DISAN">
            </div>
        </div>
    </section>

    <!-- Sección Clientes -->
    <section id="clientes" class="fade-in">
        <h2 class="section-title">Nuestros Clientes</h2>
        <p style="text-align: center; margin-bottom: 30px;">Servimos a una amplia gama de industrias, adaptando nuestras soluciones plásticas a las necesidades específicas de cada sector.</p>
        
        <div class="clients-section">
            <div class="client-categories">
                <div class="category">
                    <h3>Industrial</h3>
                    <ul>
                        <li>Componentes para maquinaria</li>
                        <li>Equipos de procesamiento</li>
                        <li>Herramientas especializadas</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Alimentos</h3>
                    <ul>
                        <li>Envases y embalajes</li>
                        <li>Utensilios de cocina</li>
                        <li>Equipos de procesamiento</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Agroindustria</h3>
                    <ul>
                        <li>Sistemas de riego</li>
                        <li>Envases para productos agrícolas</li>
                        <li>Componentes para maquinaria agrícola</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Papelería</h3>
                    <ul>
                        <li>Organizadores de oficina</li>
                        <li>Materiales de presentación</li>
                        <li>Productos promocionales</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Químicos</h3>
                    <ul>
                        <li>Envases especializados</li>
                        <li>Componentes resistentes</li>
                        <li>Sistemas de almacenamiento</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Textiles</h3>
                    <ul>
                        <li>Componentes para maquinaria textil</li>
                        <li>Organizadores y almacenamiento</li>
                        <li>Presentación de productos</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Minería</h3>
                    <ul>
                        <li>Componentes resistentes</li>
                        <li>Equipos de seguridad</li>
                        <li>Sistemas de transporte</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Pesca</h3>
                    <ul>
                        <li>Envases para productos del mar</li>
                        <li>Componentes para embarcaciones</li>
                        <li>Equipos de procesamiento</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Construcción</h3>
                    <ul>
                        <li>Materiales de construcción</li>
                        <li>Herramientas y equipos</li>
                        <li>Componentes estructurales</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Farmacéutica</h3>
                    <ul>
                        <li>Envases médicos</li>
                        <li>Componentes para equipos</li>
                        <li>Materiales de empaque especializados</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Turismo y Hotelería</h3>
                    <ul>
                        <li>Productos para habitaciones</li>
                        <li>Utensilios para restaurantes</li>
                        <li>Artículos promocionales</li>
                    </ul>
                </div>
                <div class="category">
                    <h3>Metalmecánica</h3>
                    <ul>
                        <li>Componentes para maquinaria</li>
                        <li>Herramientas especializadas</li>
                        <li>Equipos de procesamiento</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>DISAN</h3>
                <p>Líderes en soluciones plásticas desde 1977</p>
            </div>
            <div class="footer-section">
                <h3>Contacto</h3>
                <p>Email: info@disan.com</p>
                <p>Teléfono: +51 1 123 4567</p>
            </div>
            <div class="footer-section">
                <h3>Ubicación</h3>
                <p>Av. Industrial 123</p>
                <p>Lima, Perú</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 DISAN. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
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