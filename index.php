<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home-Sas</title>

    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

    <!-- Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="burgar/slick.css">
    <link rel="stylesheet" href="burgar/style.css">
    <link rel="stylesheet" href="font/font_style.css">
    <link rel="stylesheet" href="assets/main.css">
</head>

<body>

    <nav class="site-navigation">
        <div class="site-navigation-inner site-container-small">
            <a href="."> <img src="img/logo.png" width="110" alt="Sas logo"></a>
            <div class="main-navigation">
                <ul class="main-navigation__ul font">
                    <li class="font"><a href="#">Homepage</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                    <li><a href="#">Page 4</a></li>
                </ul>
            </div>
            <div id="myBtn" class="burger-container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <script>
                function myFunction(x) {
                    x.classList.toggle("change");
                }
            </script>

        </div>
    </nav>

    <section class="fh5co-top-banner mb-4">
        <div class="top-banner__inner site-container">
            <div class="w-100">
                <h1 class="text-white text-center">Interactive White <span class="border_bottom" style="font-size:2.5rem; padding-bottom:2px;">Paper</span> </h1>
            </div>
        </div>
    </section>

    <div class="orange_box_outline_1"></div>

    <section>
        <div class="site-container">

            <div class="card shadow border_radius chapter_box">
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">

                            <!-- chapter 1/1 -->
                            <div class="carousel-item active">

                                <div class="row mb-2">
                                    <div class="col-md-6 my-auto">
                                        <div class="display-3">The Power to Know</div>
                                        <h3 style="line-height: 40px;">
                                            "How trusted analytics and innovative software and services empower small and
                                            midsize business to grow."
                                        </h3>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                        <div class="">
                                            <img class="w-100 h-100" src="img/ch1_cover.png" alt="Chapter 1 Cover Image">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- chapter 1/2 -->
                            <div class="carousel-item">
                                <div class="row mb-2">
                                    <div class="col-md-6 my-auto">
                                        <h3 style="line-height: 40px;">
                                            Analytics is a must-have for any size business.
                                        </h3>
                                        <br>
                                        <h3 style="line-height: 40px;">
                                            To grow revenues or meet other financial goals,
                                            organizations of all sizes have many of the sames to
                                            answer - how to differentiate, improve the customer
                                            experience, boost employee productivity, strengthen
                                            service quality or increase market share.
                                        </h3>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                        <div class="">
                                            <img class="w-100 h-100" src="img/ch1_img1.png" alt="Chapter 1 Cover Image">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!-- chapter 1/3 -->
                            <div class="carousel-item">
                                <div class="row mb-2">
                                    <div class="col-md-6 my-auto">
                                        <h3 style="line-height: 40px;">
                                            The good news is that leader who make decisions based
                                            on data and analytics not only reach these goals, but also
                                            exceed them. And it isnt just global leaders and prominent
                                            organizations. Smaller organizations can also harness the
                                            power of analytics. The key factor to make it happen is a
                                            willingness to transform and adopt analytics, no matter the
                                            size of the budget, the extent of IT resource or even having
                                            data scientists on the team.
                                            And leveraging analytics with AI in the cloud gives
                                            CIOs and CMOs the flexibility and intelligence they
                                            need to help transform and grow their business.
                                        </h3>
                                        
                                    </div>
                                    <div class="col-md-6 my-auto">
                                        <div class="">
                                            <img class="w-100 h-100" src="img/ch1_img1.png" alt="Chapter 1 Cover Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <h1 class="absolute chapter_number blue">01</h1>
                <div class="red_line absolute"></div>

            </div>

        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="burgar/slick.min.js"></script>
    <script src="burgar/burgar.js"></script>
    <!-- 
    <script>
        $('.carousel').carousel()
    </script> -->

</body>

</html>