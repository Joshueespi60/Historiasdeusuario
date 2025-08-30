<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Comercio Universitario Transacción Interna</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/tarjetas.css">
    <link rel="stylesheet" href="../css/labels.css">
    <link rel="stylesheet" href="../css/historias.css">
</head>

<!-- Aplica estilo solo en páginas de labels -->
<body class="labels-page">

    <header>
        <h1>Sistema de Comercio Universitario Transacción Interna</h1>
        <nav>
            <a href="../index.php">Historias de usuario</a>
            <a href="#interfaces">Diseño de interfaces</a>
        </nav>
    </header>

    <main class="content-section">
        <!-- Historias de usuario -->
        <section id="user-stories" class="tab-section active">
            <h2>Historia de Usuario Antonio</h2>

            <!-- Historias (5 tarjetas) -->
                <div class="stories-grid">

                <!-- 1 -->
                <article class="story-card is-highlight">
                    <header class="story-header">Recuperación de acceso</header>
                    <div class="story-body">
                    <p><span class="kw">Como</span> usuario registrado,</p>
                    <p><span class="kw">Quiero</span> recuperar mi cuenta fácilmente mediante un enlace enviado a mi correo institucional,</p>
                    <p><span class="kw">Para</span> no perder mis datos ni publicaciones en caso de olvidar mi contraseña.</p>
                    </div>
                </article>

                <!-- 2 -->
                <article class="story-card">
                    <header class="story-header">Gestión de inventario personal</header>
                    <div class="story-body">
                    <p><span class="kw">Como</span> vendedor universitario,</p>
                    <p><span class="kw">Quiero</span> tener un panel donde pueda ver mis productos activos, pausados o vendidos,</p>
                    <p><span class="kw">Para</span> administrar fácilmente mi inventario y evitar confusiones con los compradores.</p>
                    </div>
                </article>

                <!-- 3 -->
                <article class="story-card">
                    <header class="story-header">Notificaciones en tiempo real</header>
                    <div class="story-body">
                    <p><span class="kw">Como</span> usuario,</p>
                    <p><span class="kw">Quiero</span>  recibir notificaciones instantáneas en mi celular o correo cuando alguien me escriba, compre o califique,</p>
                    <p><span class="kw">Para</span>  estar al tanto de mis interacciones sin necesidad de revisar constantemente la aplicación.</p>
                    </div>
                </article>

                <!-- 4 -->
                <article class="story-card">
                    <header class="story-header">Reporte de publicaciones sospechosas</header>
                    <div class="story-body">
                    <p><span class="kw">Como</span>  miembro de la comunidad universitaria,</p>
                    <p><span class="kw">Quiero</span> poder reportar publicaciones o vendedores que incumplan las normas,</p>
                    <p><span class="kw">Para</span>   mantener un entorno seguro y confiable dentro del mercado universitario.</p>
                    </div>
                </article>

                <!-- 5 -->
                <article class="story-card">
                    <header class="story-header">Modo trueque o intercambio</header>
                    <div class="story-body">
                    <p><span class="kw">Como</span>  estudiante,</p>
                    <p><span class="kw">Quiero</span>  tener la opción de ofrecer un intercambio en lugar de pago directo,</p>
                    <p><span class="kw">Para</span>poder conseguir productos útiles sin necesidad de dinero, fomentando el apoyo entre compañeros</p>
                    </div>
                </article>

            </div>
        </section>

        <!-- Diseño de interfaces (opcional en esta página) -->
        <section id="interfaces" class="tab-section">
            <h2>Diseño de interfaces</h2>
            <div class="cards-grid">
                <div class="card card-design-interface" style="background-color: lightblue;">
                    <img src="../imagenes/login.png" alt="Diseño de interfaz de login">
                    <div class="card-description">Un diseño de interfaz simple y moderno para la página de inicio de sesión.</div>
                    <div class="card-author">Autor: Juan Pérez</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de la página principal">
                    <div class="card-description">Página principal con un enfoque minimalista para mejorar la navegación.</div>
                    <div class="card-author">Autor: Sofía Rodríguez</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de la página de productos">
                    <div class="card-description">Diseño de la galería de productos, optimizado para la búsqueda por categorías.</div>
                    <div class="card-author">Autor: Luis González</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de carrito de compras">
                    <div class="card-description">Una vista detallada del carrito de compras, con opciones de pago seguras.</div>
                    <div class="card-author">Autor: Ana Martínez</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño del perfil de usuario">
                    <div class="card-description">Interfaz del perfil de usuario con acceso rápido a su historial y configuraciones.</div>
                    <div class="card-author">Autor: David Sánchez</div>
                </div>

                <div class="card card-design-interface">
                    <img src="https://via.placeholder.com/300" alt="Diseño de notificaciones">
                    <div class="card-description">Un diseño claro para las notificaciones del sistema y mensajes de confirmación.</div>
                    <div class="card-author">Autor: Elena Fernández</div>
                </div>
            </div>
        </section>
    </main>

    <script src="../js/main.js"></script>
</body>
</html>