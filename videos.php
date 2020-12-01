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
        
                <div id="video-carousel-example" class="carousel slide carousel-fade pb-3">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#video-carousel-example" data-slide-to="1"></li>
                        <li data-target="#video-carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <video class="video-fluid" autoplay loop muted>
                                <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video class="video-fluid" autoplay loop muted>
                                <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video class="video-fluid" autoplay loop muted>
                                <source src="https://mdbootstrap.com/img/video/Agua-natural.mp4" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--Carousel Wrapper-->
            
        </main>

        <?php include("includes/footer.php");?>
    </div>
</body>

</html>