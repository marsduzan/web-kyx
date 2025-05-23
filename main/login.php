
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate en KYX</title>
    <link rel="stylesheet" href="/assets/css/login-styles.css">
    <link rel="stylesheet" href="/assets/css/header-styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../img/favicon.png" type="image/png" />

</head>
<body>
<!--Header-->
<?php include('../includes/header.php'); ?>

<main>
    <section class="form-login">
        <form action="#" method="post" class="form-div">
            <h2 class="titulo-login">REGÍSTRATE EN KYX</h2>
            <input type="text" name="fullname" id="name-login" placeholder="* Nombre y apellidos">
            <input type="email" name="email" id="email-login" placeholder="* Correo electrónico">
            <input type="password" name="password" id="pass-login" placeholder="* Contraseña">
            <button type="submit" class="btn-login">REGÍSTRATE</button>
            <p class="aviso-login">
            Los campos marcados con un asterisco (*) son obligatorios. <br>
            Este sitio está protegido por hCaptcha y se aplican la Política de privacidad y las Condiciones de servicio de hCaptcha.
            </p>
        </form>
    </section>
<!--Redes-->
<section class="blog">
    <h2 class="titulo-redes">SIGUENOS EN @KYXSPAIN</h2>
    <div class="img-blog">
        <a href="#" class="a-redes"><img src="../img/50eeb7640ec41673f6b163b851edb5c0.jpg" alt="img1"></a>
        <a href="#" class="a-redes"><img src="../img/796d121200489074c0817b2aec02ca07.jpg" alt="img2"></a>
        <a href="#" class="a-redes"><img src="../img/a649290a215d688ca7cc578de8203d62.jpg" alt="img3"></a>
        <a href="#" class="a-redes"><img src="../img/bb5991270a361c2cfc452ddd28b73c72.jpg" alt="img4"></a>
    </div>
    
</section>
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
<div class="footer2">
    <a href="#" class="politica-otros">© KYX 2025</a>
    <a href="#" class="politica-otros">Aviso legal</a>
    <a href="#" class="politica-otros">Política de privacidad</a>
    <a href="#" class="politica-otros">Política de reembolso</a>
    <a href="#" class="politica-otros">Política de envíos</a>
    <a href="#" class="politica-otros">Condiciones de uso</a>
    <a href="#" class="politica-otros">Desarrollado por Shopify</a>
</div>
</main>
</body>
</html>