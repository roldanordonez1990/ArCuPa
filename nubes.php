<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">
    <div class="container-fluid p-0">

        <?php include("includes/header.php");?>
        <?php include("includes/navbar.php");?>


        <main>

            <div class="titulosPrincipal text-center p-3">
                    <h1>Nubes y Cielos</h1>
            </div>
            <!-- Swiper -->
            <div class="swiper-container ">
                <div class="swiper-wrapper">

                    <div class="swiper-slide"><img src="../media/images/borregos.jpg"  alt="bonitas vistas desde la sierra"></div>
                    <div class="swiper-slide"><img src="../media/images/cielo1.jpg"  alt="bonitas vistas desde la sierra"></div>
                    <div class="swiper-slide"><img src="../media/images/ireland.jpg" alt="sendero por la naturaleza" /></div>
                    <div class="swiper-slide"><img src="../media/images/lightning.jpg" alt="tremendo impacto de trueno" /></div>
                    <div class="swiper-slide"><img src="../media/images/clouds-2.jpg" alt="vistas desde las alturas" /></div>
                    <div class="swiper-slide"><img src="../media/images/sunset.jpg" alt="vistas de un atardecer" /></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <script
                src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'>
            </script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>
            <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                spaceBetween: 0,
                //loop: true,
                autoplay: 2500,
                autoplayDisableOnInteraction: false,
                slidesPerView: 4,
                coverflow: {
                    rotate: 30,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true
                }
            });
            </script>
        </main>

        <?php include("includes/footer.php");?>
    </div>
</body>

</html>