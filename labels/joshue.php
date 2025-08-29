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

<!-- 👇 CLASE para aplicar estilos solo en páginas de labels -->
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
            <h2>Historia de Usuario Joshue</h2>

            <!-- Historias (5 tarjetas) -->
                <div class="stories-grid">

                <!-- 1 -->
                <article class="story-card is-highlight">
                    <header class="story-header">Registro de usuario</header>
                    <div class="story-body">
                    <p><span class="kw">Como</span> cliente nuevo,</p>
                    <p><span class="kw">Quiero</span> registrarme fácilmente en la tienda virtual con mi correo o redes sociales,</p>
                    <p><span class="kw">Para</span> poder crear una cuenta y realizar compras de forma más rápida en futuras visitas.</p>
                    </div>
                </article>

                <!-- 2 -->
                <article class="story-card">
                    <header class="story-header">Búsqueda de productos</header>
                    <div class="story-body">
                    <p><span class="kw">Como</span> comprador,</p>
                    <p><span class="kw">Quiero</span> utilizar un buscador con filtros (precio, categoría, marca, valoración),</p>
                    <p><span class="kw">Para</span> encontrar rápidamente el producto que más se ajuste a mis necesidades.</p>
                    </div>
                </article>

                <!-- 3 -->
                <article class="story-card">
                    <header class="story-header">Carrito de compras</header>
                    <div class="story-body">
                    <p><span class="kw">Como</span> usuario,</p>
                    <p><span class="kw">Quiero</span> agregar, eliminar y modificar la cantidad de productos en mi carrito,</p>
                    <p><span class="kw">Para</span> organizar mi compra antes de proceder al pago.</p>
                    </div>
                </article>

                <!-- 4 -->
                <article class="story-card">
                    <header class="story-header">Métodos de pago</header>
                    <div class="story-body">
                    <p><span class="kw">Como</span> cliente,</p>
                    <p><span class="kw">Quiero</span> contar con múltiples métodos de pago (tarjeta, transferencia, pago en efectivo al recibir, billeteras digitales),</p>
                    <p><span class="kw">Para</span> elegir la opción más conveniente y segura al momento de pagar.</p>
                    </div>
                </article>

                <!-- 5 -->
                <article class="story-card">
                    <header class="story-header">Seguimiento del pedido</header>
                    <div class="story-body">
                    <p><span class="kw">Como</span> comprador,</p>
                    <p><span class="kw">Quiero</span> recibir notificaciones por correo o en la aplicación sobre el estado de mi pedido (confirmación, en camino, entregado),</p>
                    <p><span class="kw">Para</span> estar informado del progreso de mi compra hasta la entrega final.</p>
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
          