<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KYX</title>
    <link rel="stylesheet" href="/assets/css/home-styles.css">
    <link rel="stylesheet" href="/assets/css/header-styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../img/favicon.png" type="image/png" />
</head>
<body>
<!--Header y nav bar-->
<?php include('../includes/header.php'); ?>

<!--Banner y carrusel-->
<main class="main-content">
<section class="section-banner">
    <a href="#" class="banner">
    <img src="../img/estaa.jpg" alt="Banner" />
    <div class="banner-texto">
        <h2>GARLAND TAORÉ</h2>
        <p>COLECCIÓN SS25</p>
    </div>
    </a>
</section>

<div class="tnd">
    <h3 class="top-tendencias">TOP TENDENCIAS</h3>
    <a href="#" class="ver-todo">VER TODO</a>
</div>

<div class="contenedor-carrusel">
    <div class="section-productos">
        <div class="botones-scroll">
            <button id="left"><i class="fa-sharp fa-solid fa-arrow-right fa-rotate-180"></i></button>
            <button id="right"><i class="fa-sharp fa-solid fa-arrow-right"></i></button>
        </div>
        <div class="carrusel-prod">
        <div class="info-prod">
            <a href="#"><img class="imagen-prod" src="../ecommerceimg/nike p-6000.png" alt="Nike P-6000" /></a>
            <p class="nombre-prod">Nike P-6000</p>
            <p class="precio-prod">160 €</p>
        </div>
        </div>
        <div class="carrusel-prod">
        <div class="info-prod">
            <a href="#"><img class="imagen-prod" src="../ecommerceimg/new balance 1000.png" alt="New Balance 1000" /></a>
            <p class="nombre-prod">New Balance 1000</p>
            <p class="precio-prod">180 €</p>
        </div>
        </div>
        <div class="carrusel-prod">
        <div class="info-prod">
            <a href="#"><img class="imagen-prod" src="../ecommerceimg/nike calm.png" alt="Nike Calm" /></a>
            <p class="nombre-prod">Nike Calm</p>
            <p class="precio-prod">120 €</p>
        </div>
        </div>
        <div class="carrusel-prod">
        <div class="info-prod">
            <a href="#"><img class="imagen-prod" src="../ecommerceimg/new balance 1906r.png" alt="New Balance 1906r" /></a>
            <p class="nombre-prod">New Balance 1906r</p>
            <p class="precio-prod">230 €</p>
        </div>
        </div>
        <div class="carrusel-prod">
        <div class="info-prod">
            <a href="#"><img class="imagen-prod" src="../ecommerceimg/nike dunk low retro.png" alt="Nike Dunk Low Retro" /></a>
            <p class="nombre-prod">Nike Dunk Low Retro</p>
            <p class="precio-prod">155 €</p>
        </div>
        </div>
        <div class="carrusel-prod">
            <div class="info-prod">
                <a href="#"><img class="imagen-prod" src="../ecommerceimg/new balance rc42.jpg" alt="New Balance RC42" /></a>
                <p class="nombre-prod">New Balance RC42</p>
                <p class="precio-prod">210 €</p>
            </div>
        </div>
        <div class="carrusel-prod">
            <div class="info-prod">
                <a href="#"><img class="imagen-prod" src="../ecommerceimg/Puma Palermo Leather Unisex.png" alt="Puma Palermo Leather Unisex" /></a>
                <p class="nombre-prod">Puma Palermo Leather Unisex</p>
                <p class="precio-prod">180 €</p>
            </div>
        </div>
        <div class="carrusel-prod">
            <div class="info-prod">
                <a href="#"><img class="imagen-prod" src="../ecommerceimg/Puma Speedcat OG Unisex.png" alt="Puma Speedcat OG Unisex" /></a>
                <p class="nombre-prod">Puma Speedcat OG Unisex</p>
                <p class="precio-prod">220 €</p>
            </div>
        </div>
    </div>
</div>


<!--Banner secundario-->
<section class="banner2">
    <div class="texto-banner2">
    <h2 class="mini-titulo">SNEAKERS SANTOS</h2>
    <p class="descripcion-banner2">LA NUEVA COLECCIÓN DE NIKE "SNEAKERS SANTOS" VE LA LUZ DESPUÉS DE UNA LARGA ESPERA.</p>
    <a href="#" class="descripcion2-banner2">TODAS LAS NOVEDADES Y MÁS POR LLEGAR</a>
    </div>
    <img src="../img/holaaa.jpg" alt="Banner 2" class="imagen-banner2" />
</section>

<!--News letter y form-->
<section class="newsletter">
    <div class="info-news-letter">
        <img class="imagen-news-letter" src="../img/ewef.jpg" alt="News Letter" />
        <div class="form-news-letter">
            <h2 class="titulo-news-letter">SUSCRIBETE A NUESTRA NEWS LETTER</h2>
            <p class="descripcion-news-letter">Suscribete y consigue descuentos e información adicional</p>
            <form action="#" method="post">
                <input type="email" name="email" id="email-news-letter" placeholder="Correo electrónico">
                <button type="submit" class="btn-unete">ÚNETE</button>
            </form>
        </div>
    </div>
</section>
<section class="encuentranos">
    <h2 class="titulo-encuentranos">NUESTRA TIENDA</h2>
    <p class="descripcion-encuentranos">Carrer Provença 120 <br>
        Barcelona 08029
    </p>
    <p class="descripcion-encuentranos">De Lunes a Sábado: <br>
        De 11:00 am a 21:00 pm
    </p>
    <p class="descripcion-encuentranos">Domingo: <br>
        De 11:00 am a 15:00 pm
    </p>
    
    <a href="#" class="ubi">CÓMO LLEGAR</a>
</section>

<!--Blog 1 y blog 2-->
<section class="blog">
    <h2 class="titulo-redes">SIGUENOS EN @KYXSPAIN</h2>
    <div class="img-blog">
        <a href="#" class="a-redes"><img src="../img/50eeb7640ec41673f6b163b851edb5c0.jpg" alt="img1"></a>
        <a href="#" class="a-redes"><img src="../img/796d121200489074c0817b2aec02ca07.jpg" alt="img2"></a>
        <a href="#" class="a-redes"><img src="../img/a649290a215d688ca7cc578de8203d62.jpg" alt="img3"></a>
        <a href="#" class="a-redes"><img src="../img/bb5991270a361c2cfc452ddd28b73c72.jpg" alt="img4"></a>
    </div>
    
</section>
<section class="blog2">
    <h2 class="titulo-blog">NUESTRO BLOG</h2>
    <div class="img-correr-blog">
        <img src="../img/olaaaaaaaaaaa.jpeg" alt="Correr" class="img-correr">
        <img src="../img/alexander-w.jpg" alt="Correr" class="img-correr">
    </div>
    <div class="info-blog">
        <h4 class="titulo-articulo">Del trail al asfalto: "El estilo que no pide permiso"</h4>
        <p class="descripcion-articulo">
        Aquí no seguimos caminos marcados. Subimos montañas con estilo y bajamos a la ciudad con alma salvaje. Este no es solo un blog, es un manifiesto para quienes viven entre el vértigo del outdoor y la actitud del streetwear. 
        Si alguna vez sentiste que tus botas merecen una pasarela o que tu chaqueta técnica tiene más historia que mil fotos…
        </p>
        <a href="#" class="leer-mas">SEGUIR LEYENDO</a>
    </div>
</section>
</main>
<!--Footer-->
<footer class="footer">
    <div class="sec1">
        <h3 class="titulo-footer">ENLACES</h3>
        <a href="#" class="enlaces">CONTACTO</a>
        <a href="#" class="enlaces">ENVÍO</a>
        <a href="#" class="enlaces">SOBRE NOSOTROS</a>
        <a href="#" class="enlaces">BLOG</a>
        <a href="#" class="enlaces">PREGUNTAS FRECUENTES</a>
    </div>
    <div class="sec2">
        <h3 class="titulo-footer">CONTACTANOS</h3>
        <p class="contactos">
            TELÉFONO <br>
            634278943 <br>
        </p>
        <p class="contactos">
            CORREO ELECTÓNICO <br>
            kyxsneak@gmail.com <br>
        </p>
    </div>
    <div class="sec3">
        <h3 class="titulo-footer">POLÍTICA DE EMPRESA</h3>
        <p class="politica">
        En KYX, ofrecemos sneakers originales y de alta calidad, apostando por la autenticidad, el estilo y la cultura urbana. Nuestra misión es brindar una experiencia de compra segura, rápida y confiable, siempre siguiendo las últimas tendencias. </p>

        <p class="politica">Todos nuestros productos son 100% originales, trabajamos con marcas oficiales y ofrecemos atención personalizada. Aceptamos devoluciones dentro de los 14 días hábiles si el producto está en perfectas condiciones. </p>
        
        <p class="politica">
        Nos comprometemos con la sostenibilidad, la transparencia y el respeto por nuestra comunidad. En KYX, no solo vendemos sneakers, vendemos actitud.
        </p>
    </div>
</footer>
<small class="footer2">
    <a href="#" class="politica-otros">© KYX 2025</a>
    <a href="#" class="politica-otros">Aviso legal</a>
    <a href="#" class="politica-otros">Política de privacidad</a>
    <a href="#" class="politica-otros">Política de reembolso</a>
    <a href="#" class="politica-otros">Política de envíos</a>
    <a href="#" class="politica-otros">Condiciones de uso</a>
    <a href="#" class="politica-otros">Desarrollado por Shopify</a>
</samll>

<script src="/assets/js/script-scroller.js"></script>
</body>
</html>
