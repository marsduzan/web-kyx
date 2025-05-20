<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="/assets/css/shop-styles.css" />
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
<main>
    <section class="shop-div">
        <div class="imagen-grande">
            <img src="../ecommerceimg/nike calm.png" alt="Imagen Principal" class="imagen-principal">
            <img src="../ecommerceimg/nike calm2.png" alt="Imagen Principal" class="imagen-principal">
            <img src="../ecommerceimg/nike calm.png" alt="Imagen Principal" class="imagen-principal">
            <img src="../ecommerceimg/nike calm2.png" alt="Imagen Principal" class="imagen-principal">
        </div>
        <div class="info-sneaker">
            <h2 class="titulo-sneak">Nike Calm</h2>
            <p class="precio-sneak">120 €</p>
            <div class="tallas-div">
                <button class="tallas">33</button>
                <button class="tallas">34</button>
                <button class="tallas">35</button>
                <button class="tallas">36</button>
                <button class="tallas">37</button>
                <button class="tallas">38</button>
                <button class="tallas">39</button>
                <button class="tallas">40</button>
                <button class="tallas">42</button>
                <button class="tallas">43</button>
                <button class="tallas">44</button>
                <button class="tallas">45</button>
            </div>
            <div class="botones-pago">
                <select name="cantidad" id="cantidad" class="cantidad" onchange="seleccionarTalla">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button class="add-cesta">AÑADIR A LA CESTA</button>
            </div>
            <div class="garantias">  
                <p id="info1" class="info-vendedor">ENTREGA SEGURA EN 48 HORAS</p>
                <p id="info2" class="info-vendedor">DEVOLUCIÓN Y CAMBIO HASTA 14 DÍAS DESPUÉS DE LA ENTREGA</p>
                <p id="info3" class="info-vendedor">ZAPATILLAS AUTÉNTICAS Y VERIFICADAS</p>
            </div>
            <div class="descripcion-sneak">
                <h4 class="titulo-descripcion">DESCRIPCIÓN</h4>
                <p class="p-descripcion">
                    Las Nike Calm redefinen el concepto de estilo relajado con un diseño minimalista y funcional. Ideales para quienes buscan comodidad sin renunciar a la elegancia, estas sandalias están diseñadas para ofrecer una experiencia ligera y confortable en cada paso. Su estructura ergonómica se adapta al contorno del pie, brindando soporte y amortiguación incluso en largas jornadas. <br> <br>

                    Con un acabado limpio y materiales de alta calidad, las Nike Calm son el complemento perfecto para cualquier ocasión. Ya sea para un paseo casual, un día de playa o para estar en casa con estilo, su versatilidad las convierte en un básico imprescindible en tu armario.
                </p>
            </div>
        </div>

    </section>
</main>

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
</body>

</html>