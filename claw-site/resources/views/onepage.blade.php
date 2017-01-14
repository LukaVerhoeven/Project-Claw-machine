<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Feed-by-Tweet machine in samenwerking met Tom & Co en de Warmste Week">
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
                        De Feed-by-Tweet machine werd gelanceerd in samenwerking met Tom & Co ter ondersteuning van de 'Warmste Week'.
                        We plaatsten onze Feed-by-Tweet machine aan de ingang van het Tom & Co filiaal te Wilrijk.
                        Wanneer klanten een tweet stuurden met de hashtag <strong>#TomEnCoGift</strong> werd onze grijpmachine geactiveerd.
                        Deze ving dan gratis hondensnoepjes voor hun viervoeter.
                        Daarnaast was het de bedoeling klanten te motiveren om een bijdrage te schenken voor het project Scaledogs vzw tijdens de Warmste Week.
                    </p>


                </div>
                <div class="iframe">
                    <iframe src="https://player.vimeo.com/video/198717627" class="center" display="block" margin="0 auto" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
                        Het project
                    </h1>
                </div>
            </div>
            <div class="row voffset-lg">
                <div class="col-sm-6">
                    <img src="img/feedbytweetmachine.png" class="creator img-responsive animated zoomIn top-buffer" alt="feed by tweet machine"/>
                </div>
                <div class="col-sm-6 top-buffer">
                    <p class="bigger-text">De fysieke wereld linken met de virtuele wereld. Dat was onze opzet.
                    We zouden het combineren met een inzamelactie voor een goed doel, met name het project Scaledogs: een vzw die zich inzet voor de opleiding van blindegeleidehonden.</p>
                    <p class="bigger-text">We stonden te popelen om onze kleine grijpmachine, in feite een mini snoepjesgrijper hiervoor op een ludieke manier in te zetten.</p>
                </div>
            </div>

            <div class="row voffset-lg">
                <div class="col-sm-6">
                    <p class="bigger-text text-left">First things first. We hebben de snoepjesgrijper eerst opengemaakt en de bedrading getackeld. Na vele testjes 'hackten' we de machine. Hierna werd een Arduino gebruikt om er instructies naar te sturen.</p>
                    <p class="bigger-text text-left">Iedereen die voorbij onze stand wandelde en graag wat hondensnoepjes wilde voor hun trouwe viervoeter, kon deze verkrijgen door het sturen van een tweet met de hashtag <strong>#TomEnCoGift</strong>. Een klein Python scriptje scande Twitter voor deze hashtag en stuurde de Arduino een signaal wanneer een nieuwe tweet ontvangen werd.  Dan werd de grijpmachine geactiveerd.  De hond was blij met de snoepjes en het baasje meestal gul met de bijdrage achteraf.</p>
                </div>
                <div class="col-sm-6">
                    <img src="img/claw_machine_open.jpg" class="creator img-responsive animated zoomIn smaller" alt="feed by tweet machine open"/>
                </div>
            </div>

            <div class="row voffset-lg top-buffer">
                <div class="col-sm-6 top-buffer">

                </div>
            </div>

        </div>
    </div>

    <div class="bloc l-bloc bgc-grey" id="services">
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

    <!-- team -->
    <div class="bloc bgc-carmine-pink d-bloc" id="team">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center mg-md">
                        Het Team
                    </h1>
                </div>
            </div>
            <div class="row voffset-lg">
                <div class="col-sm-4">
                    <img src="img/luka.jpg" class="creator img-responsive animDelay02 animated zoomIn" alt="member luka"/>

                    <h3 class="text-center mg-lg">
                        Luka verhoeven
                    </h3>
                </div>
                <div class="col-sm-4">
                    <img src="img/lou.png" class="creator img-responsive animDelay06 animated zoomIn" alt="member lou"/>

                    <h3 class="text-center mg-lg">
                        'Lou'
                    </h3>
                </div>
                <div class="col-sm-4">
                    <img src="img/joren.jpg" class="creator img-responsive animDelay04 animated zoomIn" alt="member joren"/>

                    <h3 class="text-center mg-lg">
                        Joren Van Hemelrijk
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- team END -->

    <!-- ScrollToTop Button -->
    <a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span
            class="fa fa-chevron-up"></span></a>
    <!-- ScrollToTop Button END-->

</div>
<!-- Main container END -->
<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<script src="/js/list.js"></script>
</body>



</html>

