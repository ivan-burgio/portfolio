<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iván Burgio | <?php echo $titulo_pestaña ?> </title>
    <link rel="icon" type="image/png" href="/build/img/logo2.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> <!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" /> <!-- Font Awesome -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!-- Animaciones AOS -->
    <link rel="stylesheet" href="/build/css/app.css"> <!-- CSS -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" defer></script> <!-- Interactive Map -->
</head>

<body>
    <?php
    include_once __DIR__ . '/templates/nav.php';
    include_once __DIR__ . '/templates/header.php';
    echo $contenido;
    include_once __DIR__ . '/templates/footer.php';
    ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>

    <script src="/build/js/main.min.js" defer></script>
</body>

</html>