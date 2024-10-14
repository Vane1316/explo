<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../public/css/landin.css">
    <link rel="stylesheet" href="../public/css/whats.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/whats2.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!--Titulo de la empresa-->
    <title>Saudade</title>

</head>

<body>
    <?php
      session_start();
    ?>

    <nav id="header" class="barra">
        <div class="w-full flex items-center justify-between px-6 py-4 backdrop-blur-lg">
            <!-- Icono de menú para dispositivos móviles -->
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle">

            <!-- Menú de navegación -->
            <div id="menu" class="hidden fixed top-0 left-0 h-full w-3/4 bg-purple-600 shadow-lg z-50 md:relative md:flex md:bg-transparent md:shadow-none md:w-auto md:h-auto md:order-1">
                <nav>
                    <ul class="flex flex-col md:flex-row md:items-center text-base text-white md:text-black pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="./">Inicio</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="QuieneSomos/quienessomos">Quiénes Somos</a></li>
                        <li><a class="inline-block no-underline hover:text-[#6F00FF] font-medium text-lg py-2 px-4 lg:-ml-2" href="Catalogo/catalogo">Catalogo</a></li>
                    </ul>
                </nav>
            </div>
<!-- Contenido adicional del menú -->
<div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
    <div class="auth flex items-center w-full md:w-full">
        <button><a style='font-size:24px;color:black' class='fas'>&#xf07a;</a></button>

        <?php if (isset($_SESSION['username'])): ?>
            <span class="inline-block no-underline font-medium text-black text-lg px-4">Hola, <?php echo $_SESSION['username']; ?>!</span>
            <span class="inline-block no-underline font-medium text-black text-lg px-4">Rol: <?php echo $_SESSION['role']; ?></span> <!-- Mostrar rol aquí -->
            <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="Login/LogoutAction">Cerrar sesión</a>
        <?php else: ?>
            <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF] px-4" href="Login/inicio_sesion">Iniciar sesión</a>
            <a class="inline-block font-medium no-underline text-black text-lg hover:text-[#6F00FF]" href="Login/registro">Registrarse</a>
        <?php endif; ?>
    </div>
</div>

        </div>
    </nav>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');

        menuToggle.addEventListener('change', function() {
            if (this.checked) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>

    <video id="video" class="" autoplay muted loop>
        <source src="../public/img/video/street.mp4" type="video/mp4">
        Tu navegador no soporta la etiqueta de video.
    </video>

    <!--Alerta ed inicio de session-->

    <div id="popup" class="fixed z-50 bg-slate-100 opacity-95 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  shadow-lg font-comic-sans rounded-md p-24 text-center animate-popup drop-shadow-2xl "
        style="display: none; width: 500px; height: 550px;">
        <img id="popup-image" src="../public/img/LOGO_SAUDADE.png" alt="Descripción de la imagen">
        <h2 class="text-xl font-bold py-2">¡Te Damos la Bienvenida a Saudade!</h2>
        <p class="py-2 text-lg font-normal">Obtén un descuento del 10% en tu primera compra iniciando sesión.</p>
        <div class="flex justify-center align-center space-x-4 py-4">
            <a href="Login/inicio_sesion" class=" bg-black text-white hover:text-[#6F00FF] hover:bg-gray-300 px-4 py-2 rounded-lg text-center px-4 font-medium text-lg">Iniciar sesión</a>
            <button onclick="closePopup()" class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded-lg  font-medium text-lg">Cerrar</button>
        </div>
    </div>

    <!--Spotify-->

    <iframe class="luna" style="border-radius:12px"
        src="https://open.spotify.com/embed/track/7bywjHOc0wSjGGbj04XbVi?utm_source=generator&theme=0" width="100%"
        height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
    </iframe>

    <div class="bg-white py-16">
        <div class="container mx-auto">
            <!-- Sección Dynamo Ropa Urbana -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold mb-4">explore</h1>
                <p class="text-gray-600 mb-8">La vida es muy corta para seguir usando prendas aburridas. Viste tu actitud con saudade ropa urbana: Camisetas, jeans, gorras, accesorios y mucho más.</p>
                <div class="flex justify-center space-x-8">
                    <div class="text-center">
                        <p class="text-gray-800 font-medium">Envíos a toda Colombia</p>
                    </div>
                    <div class="text-center">
                    </div>
                    <div class="text-center">
                        <p class="text-gray-800 font-medium">Devoluciones hasta 30 días</p>
                    </div>
                </div>
            </div>

            <!-- Sección NEW MERCH -->
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold">NEW MERCH</h2>
                <div class="border-b-2 mb-8"></div>
            </div>