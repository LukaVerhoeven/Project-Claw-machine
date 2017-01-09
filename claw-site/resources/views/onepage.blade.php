<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap theme, bootstrap template, html5 theme">
    <meta name="description" content="Free Bootstrap template based on HTML5 and CSS3">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css"/>
    <script src="js/jquery-2.1.0.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/typer.js"></script>
    <script src="js/blocs.js"></script>
    <link rel='stylesheet' href='css/et-line.min.css'/>
    <link rel='stylesheet' href='css/font-awesome.min.css'/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat&subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="/css/list.css">

    <title>Feed-by-Tweet Machine</title>
</head>
<body>
<!-- Main container -->
<div class="page-container">

    <!-- header -->
    <div class="bloc bgc-outer-space bg-city-overlay d-bloc" id="header">
        <div class="container bloc-xl">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center mg-lg tc-white">FEED-BY-TWEET MACHINE <span
                            data-typer-targets="#TomEnCoGift,#DeWarmsteWeek"></span></h3>

                    <p class="text-center bigger-text mg-lg animated fadeInUp animDelay02">
                        De feed-by-tweet machine is een actie in samenwerking met Tom&Co die De Warmste Week steunt.
                        We plaatsten onze feed-by-tweet machine aan de ingang van het Tom&Co filiaal te Wilrijk. Hierbij was het de bedoeling dat met een tweet stuurde met de hashtag:
                        <strong>#TomEnCoGift</strong>. Wanneer men dit deed werd er een 'claw-machine' geactiveerd die voor uw trouwe viervoeter enkele snoepjes cadeau gaf.
                        Mensen konden ook vrijblijvend een bijdrage leveren voor De Warmste Week.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- header END -->
    <div class="bloc l-bloc bgc-grey" id="services">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center mg-lg">Laatste 5 bijdragers:</h1>
                    <ul class="rolldown-list animated" id="myList">
                        @foreach($lastUsers as $user)
                            <li class="tc-white">&#64;{{$user->twitterName}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- services -->
    <div class="bloc bgc-carmine-pink d-bloc" id="team">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center mg-md ">
                        The project
                    </h1>
                </div>
            </div>
            <div class="row voffset-lg">
                <div class="col-sm-6">
                    <img src="img/feedbytweetmachine.png" class="creator img-responsive animDelay04 animated zoomIn" alt="feed by tweet machine"/>
                </div>
                <div class="col-sm-6 top-buffer">
                    <p class="bigger-text">De fysieke wereld linken met de virtuele wereld. Dat was onze missie. Waarom dit niet combineren met geld inzamelen voor een goed doel?</p>
                    <p class="bigger-text">We stonden te popelen om deze kleine grijpmachine te gebruiken wat eigenlijk een mini snoepjesgrijper was.</p>
                </div>
            </div>

            <div class="row voffset-lg top-buffer">
                <div class="col-sm-6">
                    <img src="img/claw_machine_open.jpg" class="creator img-responsive animDelay04 animated zoomIn smaller" alt="feed by tweet machine open"/>
                </div>
                <div class="col-sm-6 top-buffer">
                    <p class="bigger-text">First things first. Het eerste obstakel was de machine openhalen en de bedrading tackelen. Na vele testjes 'hackten' we deze machine. Hierna werd een Arduino gebruikt om hier instructies naar te sturen.</p>
                    <p class="bigger-text">Iedereen die voorbij onze stand wandelde en graag een hondensnoepje voor hun trouwe viervoeter wou, kon een tweet sturen met de hashtag <strong>#TomEnCoGift</strong>. Een klein Python scriptje scande Twitter voor deze hashtag en stuurde de Arduino een signaal wanneer een nieuwe tweet ontvangen werd.</p>
                </div>
            </div>

            <div class="row voffset-lg top-buffer">
                <div class="col-sm-6 top-buffer">

                </div>
            </div>

        </div>
    </div>
    <!-- team -->
    <div class="bloc bgc-grey d-bloc" id="team">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center tc-darkgrey mg-md ">
                        Team
                    </h1>
                </div>
            </div>
            <div class="row voffset-lg">
                <div class="col-sm-6">
                    <img src="img/luka.jpg" class="creator img-responsive animDelay04 animated zoomIn" alt="member"/>

                    <h3 class="text-center tc-darkgrey mg-lg">
                        Luka verhoeven
                    </h3>
                </div>
                <div class="col-sm-6">
                    <img src="img/joren.jpg" class="creator img-responsive animDelay06 animated zoomIn" alt="member"/>

                    <h3 class="text-center tc-darkgrey mg-lg">
                        Joren Van Hemelrijk
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- team END -->

    <div class="bloc l-bloc bgc-blue" id="services">
        <div class="container bloc-lg">
            <div class="row">
                <h1 class="text-center mg-lg">In samenwerking met</h1>
                <div class="col-sm-6">
                    <div class="text-center">
                        <span class="et-icon-linegraph icon-xl icon-carmine-pink animated zoomIn animDelay02"><img class="mfl" src="img/musicforlife.png" alt=""></span>
                    </div>
                    <h3 class="text-center mg-md ">
                        De Warmste Week
                    </h3>

                    <p class="text-center">
                        Een actie voor De Warmste Week.
                    </p>
                </div>
                <div class="col-sm-6">
                    <div class="text-center">
                        <span class="et-icon-linegraph icon-xl icon-carmine-pink animated zoomIn"><img class="tec" src="img/TomAndCo_Logo.png" alt=""></span>
                    </div>
                    <h3 class="text-center mg-md ">
                        Tom & Co
                    </h3>

                    <p class="text-center">
                        In samenwerking met Tom & Co.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ScrollToTop Button -->
    <a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span
            class="fa fa-chevron-up"></span></a>
    <!-- ScrollToTop Button END-->

</div>
<!-- Main container END -->
<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<script src="/js/list.js"></script>
</body>

<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>
