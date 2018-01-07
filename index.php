<?php
  $title = "My DOTA";
  $motto = "DOTA Smart Players";
  $description = "Let's play Defense of the Ancients";
  include 'control/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo $title?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style>
        /* TEMPLATE STYLES */
        
        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #1C2331;
        }
        
        footer.page-footer {
            background-color: #1C2331;
            margin-top: 2rem;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
        /*Call to action*/
        
        .flex-center {
            color: #fff;
        }
        
        .view {
            background: url("img/bg.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        /*Contact section*/
        
        #contact .fa {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1C2331;
        }
    </style>

</head>

<body>
<?php include_once("analyticstracking.php") ?>

    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>

        <div class="container">

            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <a class="navbar-brand" href="/">My DOTA</a>
                <!--Links-->
                <ul class="nav navbar-nav">
                
                    <li class="nav-item">
                        <a class="nav-link" href="#best-features">Maps</a>
                    </li>
                
                </ul>
            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <ul>
                <li>
                    <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s"><?php echo $motto;?></h1></li>
                <li>
                    <p class="wow fadeInDown"><?php echo $description;?></p>
                </li>
                <li>
                    <a href="/#best-features" class="btn btn-primary btn-lg wow fadeInLeft" data-wow-delay="0.2s">Download</a>
                    <a href="/#best-features" class="btn btn-default btn-lg wow fadeInRight" data-wow-delay="0.2s">Videos</a>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->

    <!-- Main container-->
    <div class="container">


        <div class="divider-new">
            <h2 class="h2-responsive wow fadeInDown">Dota maps</h2>
        </div>

        <!--Section: Best features-->
        <section id="best-features">

            <div class="row">
                <?php foreach($maps as $map): ?>
                <!--First columnn-->
                <div class="col-md-3">
                    <!--Card-->
                    <div class="card wow fadeInUp">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="img/<?php echo $map->imgUrl;?>.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-xs-center">
                            <!--Title-->
                            <h4 class="card-title"><?php echo $map->name;?></h4>
                            <hr>
                            <!--Text-->
                           <!-- <p class="card-text"><?php echo nl2br($map->des);?></p>-->
                            <a href="<?php echo $map->sourceUrl;?>" class="btn btn-primary">Download</a>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->
                <?php endforeach; ?>
              
            </div>

        </section>
        <!--/Section: Best features-->

    </div>
    <!--/ Main container-->





    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

   

    <!-- Animations init-->
    <script>
        new WOW().init();
    </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93855035-1', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>