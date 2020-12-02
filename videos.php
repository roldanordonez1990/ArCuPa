<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">
    <div class="container-fluid p-0">

        <?php include("includes/header.php");?>
        <?php include("includes/navbar.php");?>


        <main class="container">
        <div class="titulosPrincipal text-center p-3">
                    <h1>Videos</h1>
            </div>
        <!-- Carousel row -->
            <div class="swiper-container mb-5">
	                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
	                	<!-- Carousel -->
	                	<div id="carousel-example" class="carousel slide">
	       					<ol class="carousel-indicators">
	       						<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
	       						<li data-target="#carousel-example" data-slide-to="1"></li>
	       						<li data-target="#carousel-example" data-slide-to="2"></li>
	       					</ol>
	       					<div class="carousel-inner">
	       						<div class="carousel-item active">
	       							<div class="embed-responsive embed-responsive-16by9">
	       								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YQKuVcz-XTw" allowfullscreen></iframe>
	       							</div>
	       						</div>
	       						<div class="carousel-item">
	       							<div class="embed-responsive embed-responsive-16by9">
	       								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7Aq1GWfRiGk" allowfullscreen></iframe>
	       							</div>
	       						</div>
	       						<div class="carousel-item">
	       							<div class="embed-responsive embed-responsive-16by9">
	       								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/G43hcGTodEk" allowfullscreen></iframe>
	       							</div>
	       						</div>
	       					</div>
							<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
	       				</div>
	                	<!-- End carousel -->
	                </div>
                </div>
            
            
        </main>

        <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                spaceBetween: 0,
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

        <?php include("includes/footer.php");?>
    </div>
</body>

</html>