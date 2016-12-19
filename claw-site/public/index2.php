<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap theme, bootstrap template, html5 theme">
    <meta name="description" content="Free Bootstrap template based on HTML5 and CSS3">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="./css/animate.css"/>
    <script src="./js/jquery-2.1.0.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/typer.js"></script>
    <script src="./js/blocs.js"></script>
    <link rel='stylesheet' href='./css/et-line.min.css'/>
    <link rel='stylesheet' href='./css/font-awesome.min.css'/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat&subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>

    <title>Compex</title>
</head>
<body>
<!-- Main container -->
<div class="page-container">

    <!-- Navigation Bloc -->
    <div class="bloc bgc-carmine-pink d-bloc" id="nav-bloc">
        <div class="container">
            <nav class="navbar row">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><span class="et-icon-gears icon-sm icon-white zoomIn animated"></span> Compex</a>
                    <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-1">
                    <ul class="site-navigation nav navbar-nav">
                        <li>
                            <a  onclick="scrollToTarget('#services')">Services</a>
                        </li>
                        <li>
                            <a onclick="scrollToTarget('#porfolio')">Portfolio</a>
                        </li>
                        <li>
                            <a onclick="scrollToTarget('#team')">Team</a>
                        </li>
                        <li>
                            <a onclick="scrollToTarget('#quote')">Get a Quote</a>
                        </li>
                        <li>
                            <a onclick="scrollToTarget('#faq')">FAQ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navigation Bloc END -->

    <!-- header -->
    <div class="bloc bgc-outer-space bg-city-overlay d-bloc" id="header">
        <div class="container bloc-xl">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center mg-lg tc-white">WE ARE SPECIALIST IN <span
                            data-typer-targets="WEB DESIGN,WEB DEVELOPMENT,PROMOTION"></span></h3>

                    <p class="text-center  mg-lg animated fadeInUp animDelay02">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim.
                    </p>

                    <div class="text-center">
                        <a class="btn  btn-xl btn-wire wire-btn-carmine-pink animDelay06 animated fadeInUp"
                           onclick="scrollToTarget('#porfolio')">OUR PORTFOLIO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header END -->

    <!-- services -->
    <div class="bloc l-bloc bgc-white" id="services">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col-sm-4">
                    <div class="text-center">
                        <span class="et-icon-picture icon-xl icon-carmine-pink animated zoomIn animDelay02"></span>
                    </div>
                    <h3 class="text-center mg-md ">
                        Web Design
                    </h3>

                    <p class="text-center">
                        A little feature description could go here. A little feature description.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="text-center">
                        <span class="et-icon-gears icon-xl icon-carmine-pink animated zoomIn"></span>
                    </div>
                    <h3 class="text-center mg-md ">
                        Web Development
                    </h3>

                    <p class="text-center">
                        A little feature description could go here. A little feature description.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="text-center">
                        <span class="et-icon-linegraph icon-xl icon-carmine-pink animated zoomIn animDelay02"></span>
                    </div>
                    <h3 class="text-center mg-md ">
                        Promotion
                    </h3>

                    <p class="text-center">
                        A little feature description could go here. A little feature description.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- services END -->

    <!-- clients -->
    <div class="bloc bgc-platinum l-bloc" id="bloc-3">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col-sm-3 text-center">
                    <img src="img/ny-times.png" class="" alt="ny-times"/>
                </div>
                <div class="col-sm-3 text-center">
                    <img src="img/forbes.png" class="" alt="forbes"/>
                </div>
                <div class="col-sm-3 text-center">
                    <img src="img/wired.png" class="" alt="ny-wired"/>
                </div>
                <div class="col-sm-3 text-center">
                    <img src="img/guardian.png" class="" alt="guardian"/>
                </div>
            </div>
        </div>
    </div>
    <!-- clients END -->

    <!-- porfolio -->
    <div class="bloc l-bloc bgc-white" id="porfolio">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center mg-md ">
                        Our Portfolio
                    </h2>

                    <p class="text-center sub-heading">
                        Just a sample of what we do.
                    </p>
                </div>
            </div>
            <div class="row voffset">
                <div class="col-sm-3">
                    <a href="#" data-lightbox="img/dribbble-preview.png" data-caption="Image description"><img
                            src="img/dribbble-preview.png" class="img-responsive animated zoomIn" alt="portfolio"/></a>
                </div>
                <div class="col-sm-3">
                    <a href="#" data-lightbox="img/player.png" data-caption="Image description"><img
                            src="img/player.png" class="img-responsive animated zoomIn" alt="portfolio"/></a>
                </div>
                <div class="col-sm-3">
                    <a href="#" data-lightbox="img/productshot.png" data-caption="Image description"><img
                            src="img/productshot.png" class="img-responsive animated zoomIn" alt="portfolio"/></a>
                </div>
                <div class="col-sm-3">
                    <a href="#" data-lightbox="img/food-widget.png" data-caption="Image description"><img
                            src="img/food-widget.png" class="img-responsive animated zoomIn" alt="portfolio"/></a>
                </div>
            </div>
            <div class="row voffset">
                <div class="col-sm-3">
                    <a href="#" data-lightbox="img/work-11.jpg" data-caption="Image description"><img
                            src="img/work-11.jpg" class="img-responsive animDelay04 animated zoomIn" alt="portfolio"/></a>
                </div>
                <div class="col-sm-3">
                    <a href="#" data-lightbox="img/food-widget.png" data-caption="Image description"><img
                            src="img/food-widget.png" class="img-responsive animated zoomIn animDelay04" alt="portfolio"/></a>
                </div>
                <div class="col-sm-3">
                    <a href="#" data-lightbox="img/work-11.jpg" data-caption="Image description"><img
                            src="img/freebie-app.png" class="img-responsive animDelay04 animated zoomIn" alt="portfolio"/></a>
                </div>
                <div class="col-sm-3">
                    <a href="#" data-lightbox="img/dribbble-preview.png" data-caption="Image description"><img
                            src="img/dribbble-preview.png" class="animDelay04 animated zoomIn img-responsive" alt="portfolio"/></a>
                </div>
            </div>
        </div>
    </div>
    <!-- porfolio END -->

    <!-- team -->
    <div class="bloc bgc-carmine-pink d-bloc" id="team">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center mg-md ">
                        Meet our team
                    </h2>

                    <p class="sub-heading text-center">
                        We are a group of skilled individuals.
                    </p>
                </div>
            </div>
            <div class="row voffset-lg">
                <div class="col-sm-3">
                    <img src="img/adolf-zika-872335_640.jpg" class="img-responsive animated zoomIn" alt="member"/>

                    <h3 class="text-center mg-md">
                        JohnDoe
                    </h3>

                    <p class="text-center">
                        Web Developer
                    </p>
                </div>
                <div class="col-sm-3">
                    <img src="img/castro-1080873_640.jpg" class="img-responsive animated zoomIn animDelay02" alt="member"/>

                    <h3 class="text-center mg-md">
                        Jane Doe
                    </h3>

                    <p class="text-center">
                        Designer
                    </p>
                </div>
                <div class="col-sm-3">
                    <img src="img/woman-868571_640.jpg" class="img-responsive animDelay04 animated zoomIn" alt="member"/>

                    <h3 class="text-center mg-md">
                        Jane Doe
                    </h3>

                    <p class="text-center">
                        Marketing manager
                    </p>
                </div>
                <div class="col-sm-3">
                    <img src="img/open-door-1156365_640.jpg" class="img-responsive animDelay06 animated zoomIn" alt="member"/>

                    <h3 class="text-center mg-md">
                        John Doe
                    </h3>

                    <p class="text-center">
                        CEO
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- team END -->

    <!-- testimonials -->
    <div class="bloc bgc-white l-bloc" id="bloc-6">
        <div class="container bloc-md">
            <!--<div class="col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3">-->
            <!--<img src="img/bramk.jpg" class="img-responsive img-circle center-block img-frame-rd-md"/>-->
            <!--</div>-->
            <!--<div class="col-xs-12 col-md-8 col-md-offset-2">-->
            <!--<h3 class="text-center ">-->
            <!--<i>"Eventually everything connects - people, ideas, objects. The quality of the connections is the-->
            <!--key to quality per se."</i>-->
            <!--</h3>-->

            <!--<p class="text-center">-->
            <!--<strong>Charles Eames</strong>-->
            <!--</p>-->
            <!--</div>-->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                            <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item">
                                <div class="profile-circle">
                                    <img src="img/bramk.jpg"
                                         class="img-responsive img-circle center-block img-frame-rd-md" alt="member"/>
                                </div>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla
                                        eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque
                                        molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                </blockquote>
                            </div>
                            <div class="item">
                                <div class="profile-circle">
                                    <img src="img/bramk.jpg"
                                         class="img-responsive img-circle center-block img-frame-rd-md" alt="member"/>
                                </div>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla
                                        eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque
                                        molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                </blockquote>
                            </div>
                            <div class="active item">
                                <div class="profile-circle">
                                    <img src="img/bramk.jpg"
                                         class="img-responsive img-circle center-block img-frame-rd-md" alt="member"/>
                                </div>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla
                                        eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque
                                        molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials END -->

    <!-- Footer - quote -->
    <div class="bloc bgc-carmine-pink d-bloc" id="quote">
        <div class="container bloc-md">
            <div class="row">
                <div class="col-sm-9">
                    <h3 class="mg-md animated zoomIn">
                        Don&rsquo;t hesitate to contact us now...
                    </h3>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="index.html" class="btn btn-lg wire-btn-white btn-wire animated zoomIn">GET A QUOTE NOW</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer - quote END -->

    <div class="bloc l-bloc" id="faq">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center mg-md ">
                        FAQ
                    </h2>

                    <p class="sub-heading text-center">
                        Get Answers: Frequently Asked Questions
                    </p>
                </div>
            </div>
            <div class="row voffset-mg">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion"
                                       href="#collapseOne" aria-expanded="false">This is a question #1</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla
                                    eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias
                                    odio aut eius animi. Impedit temporibus nisi accusamus.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion"
                                       href="#collapseTwo" aria-expanded="false">This is a question #2</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla
                                    eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias
                                    odio aut eius animi. Impedit temporibus nisi accusamus.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion"
                                       href="#collapseThree" aria-expanded="false">This is a question #3</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla
                                    eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias
                                    odio aut eius animi. Impedit temporibus nisi accusamus.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ScrollToTop Button -->
    <a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span
            class="fa fa-chevron-up"></span></a>
    <!-- ScrollToTop Button END-->

    <!-- Footer - bloc-8 -->
    <div class="bloc bgc-platinum l-bloc" id="bloc-8">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="http://www.twitter.com/BootstrapOcean" target="_blank"><span
                                class="fa fa-twitter icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="https://www.facebook.com/BootstrapOcean" target="_blank"><span
                                class="fa fa-facebook icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg"
                           href="https://plus.google.com/b/116513433102470788789/116513433102470788789/posts"
                           target="_blank"><span class="fa fa-google-plus icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="#"><span class="fa fa-dribbble icon-md icon-carmine-pink"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2 text-center mg-md">Created by <a
                        href="http://www.bootstrapocean.com" target="_blank">BootstrapOcean</a></div>
            </div>
    <!-- Footer - bloc-8 END -->
</div>
<!-- Main container END -->
</body>

<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>
