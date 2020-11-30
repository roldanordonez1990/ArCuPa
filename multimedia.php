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


        <main>
            <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
                            class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
                    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
                    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
                    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
                    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
                </ol>
                <!--/.Indicators-->

                <div class="carousel-inner v-2" role="listbox">

                    <div class="carousel-item active">
                        <div class="col-2 col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (36).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary btn-md btn-rounded">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-2 col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (34).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary btn-md btn-rounded">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-2 col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary btn-md btn-rounded">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-2 col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (29).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary btn-md btn-rounded">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-2 col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary btn-md btn-rounded">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-2 col-md-2">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary btn-md btn-rounded">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </main>
        <script>
        $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function() {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < 4; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });
        </script>

        <?php include("includes/footer.php");?>
    </div>
</body>

</html>