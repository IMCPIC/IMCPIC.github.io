<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="News, positive, inspirational">
    <meta name="description" content="Aggregated news with a positive and inspirational twist to leave you with faith in humanity rather than frustration with it.">
    <meta name="author" content="Erik Richter">


    <title>Posigrator</title>

    <link rel="shortcut icon" href="img/PLogo3.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/PLogo3.png" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet" media="all">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Schoolbell' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>


</head>

<body id="page-top" class="index">



    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Name and Logo -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img class="img-logo-1" src="img/PLogo3.png"></a>
            </div>

            <!-- Navbar -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll float" href="#mainnews">Stories</a>
                    </li>
                    <li>
                        <a class="page-scroll float" href="#about">Inspired</a>
                    </li>
                    <li>
                        <a class="page-scroll float" href="#subscribe">Subscribe</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header class="animated fadeIn">


        <div class="container">
            <div class="intro-text">
                <div class="intro-heading name animated zoomIn">Posigrator</div>
                <div class="mobile-logo animated zoomIn"><img src="img/PLogo3.png"></div>
                <div class="intro-heading-3 animated zoomIn">Posigrator</div>
                <div class="intro-heading-2 animated zoomIn">Posigrator</div>
                <div class="intro-lead-in animated fadeInUp"><a href="#mainnews" class="page-scroll lead-in-link">Daily aggregated news stories<br>with a positive and inspirational twist</a></div>
                <!--<div class="note">
                <i class="fa fa-angle-down fa-4x chev"></i>
                    <a href="#mainnews" class="page-scroll"><h5 class="scroll">Scroll Down</h5></a>
                </div>-->
                <div class="arrow"> <a href="#mainnews" class="page-scroll lead-in-link"><i class="fa fa-angle-down fa-5x"></i></a></div>
                <div class="intro-lead-in-3">Daily aggregated news stories<br>with a positive and inspirational twist</div>
                <div class="mobile-button animated fadeInUp">
                    <ul class="mobile-button-list">
                    <li><a href="#mainnews" class="page-scroll btn float">Stories</a></li>
                    <li><a href="#about" class="page-scroll btn float">Inspired</a></li>
                    <li><a href="#subscribe" class="page-scroll btn float">Subscribe</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Stories Grid Section -->
    <section id="mainnews" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">The Good Stuff</h2>
                    <h3 class="section-subheading text-muted">Updated Daily</h3>
                </div>
            </div>

            <div id="news" class="row">
<!--<script>
     $(document).ready(function(){
        $.get('getAPI.php',function(jsonData){
    
        $.each(jsonData.list, function(key, val) {
        var output="<div id='stories' class='col-md-4 col-sm-4 mainnews-item'>";
            output+="<a href='"+val.resolved_url+"' class='mainnews-link' data-toggle='modal' target='_blank'>";            
            output+="<div class='mainnews-hover'>";
            output+="<div class='mainnews-hover-content'>";
            output+="<p class='excerpt'>"+ val.excerpt +"</p>";
            output+="<i class='fa fa-ellipsis-h fa-2x'></i>"
            output+="</div>";
            output+="</div>";
            if(val.has_image>0){
                output+="<img src='"+val.image.src+"' class='img-responsive' alt='img/PLogoSoft.png' style='object-fit:cover; border:12px solid rgba(0, 0, 0, .9);'>";
            }
            else{
                output+="<img src='img/PLogoSoft.png' class='img-responsive' alt=''>";
            }
            output+="</a>";
            output+="<div class='mainnews-caption'>";
            if(val.given_title != ""){
                output+="<h4 class='title'>"+val.given_title+"</h4>";
            }
            else{
            output+="<h4 class='title'>"+val.resolved_title+"</h4>";
            }
            output+="</div>";
            output+="</div>"
            $("#news").append(output);
        });
        var maxlength = 180;
        $('p.excerpt').text(function (_, text) {
        return $.trim(text).substring(0, maxlength)+"...";
        });
        var maxlength2 = 70;
        $('h4.title').text(function (_, text) {
        return $.trim(text).substring(0, maxlength2);
        });
    });
</script>-->
                <!--<div id="stories" class="col-md-4 col-sm-4 mainnews-item">
                    <a href="#" class="mainnews-link" data-toggle="modal">
                        <div class="mainnews-hover">
                            <div class="mainnews-hover-content">
                                <p>Exerpt</p>
                                <i class="fa fa-ellipsis-h fa-2x"></i>
                            </div>
                        </div>
                        <img src="img/help.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="mainnews-caption">
                        <h4>Title</h4>
                        <p class="text-muted">Source</p>
                    </div>
                </div>

                <div id="stories" class="col-md-4 col-sm-4 mainnews-item">
                    <a href="#" class="mainnews-link" data-toggle="modal">
                        <div class="mainnews-hover">
                            <div class="mainnews-hover-content">
                                <p>Exerpt</p>
                                <i class="fa fa-ellipsis-h fa-2x"></i>
                            </div>
                        </div>
                        <img src="img/camerasmall.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="mainnews-caption">
                        <h4>Title</h4>
                        <p class="text-muted">Source</p>
                    </div>
                </div>

                <div id="stories" class="col-md-4 col-sm-4 mainnews-item">
                    <a href="#" class="mainnews-link" data-toggle="modal">
                        <div class="mainnews-hover">
                            <div class="mainnews-hover-content">
                                <p>Exerpt</p>
                                <i class="fa fa-ellipsis-h fa-2x"></i>
                            </div>
                        </div>
                        <img src="img/dog.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="mainnews-caption">
                        <h4>Title</h4>
                        <p class="text-muted">Source</p>
                    </div>
                </div>
            
                <div id="stories" class="col-md-4 col-sm-4 mainnews-item">
                    <a href="#" class="mainnews-link" data-toggle="modal">
                        <div class="mainnews-hover">
                            <div class="mainnews-hover-content">
                                <p>Exerpt</p>
                                <i class="fa fa-ellipsis-h fa-2x"></i>
                            </div>
                        </div>
                        <img src="img/people.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="mainnews-caption">
                        <h4>Title</h4>
                        <p class="text-muted">Source</p>
                    </div>
                </div>

                <div id="stories" class="col-md-4 col-sm-4 mainnews-item">
                    <a href="#" class="mainnews-link" data-toggle="modal">
                        <div class="mainnews-hover">
                            <div class="mainnews-hover-content">
                                <p>Exerpt</p>
                                <i class="fa fa-ellipsis-h fa-2x"></i>
                            </div>
                        </div>
                        <img src="img/night.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="mainnews-caption">
                        <h4>Title</h4>
                        <p class="text-muted">Source</p>
                    </div>
                </div>

                <div id="stories" class="col-md-4 col-sm-4 mainnews-item">
                    <a href="#" class="mainnews-link" data-toggle="modal">
                        <div class="mainnews-hover">
                            <div class="mainnews-hover-content">
                                <p>Exerpt</p>
                                <i class="fa fa-ellipsis-h fa-2x"></i>
                            </div>
                        </div>
                        <img src="img/food.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="mainnews-caption">
                        <h4>Title</h4>
                        <p class="text-muted">Source</p>
                    </div>
                </div>
           
                <div id="stories" class="col-md-4 col-sm-4 mainnews-item">
                    <a href="#" class="mainnews-link" data-toggle="modal">
                        <div class="mainnews-hover">
                            <div class="mainnews-hover-content">
                                <p>Exerpt</p>
                                <i class="fa fa-ellipsis-h fa-2x"></i>
                            </div>
                        </div>
                        <img src="img/bike.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="mainnews-caption">
                        <h4>Title</h4>
                        <p class="text-muted">Source</p>
                    </div>
                </div>

                <div id="stories" class="col-md-4 col-sm-4 mainnews-item">
                    <a href="#" class="mainnews-link" data-toggle="modal">
                        <div class="mainnews-hover">
                            <div class="mainnews-hover-content">
                                <p>Exerpt</p>
                                <i class="fa fa-ellipsis-h fa-2x"></i>
                            </div>
                        </div>
                        <img src="img/surf.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="mainnews-caption">
                        <h4>Title</h4>
                        <p class="text-muted">Source</p>
                    </div>
                </div>

                <div id="stories" class="col-md-4 col-sm-4 mainnews-item">
                    <a href="#" class="mainnews-link" data-toggle="modal">
                        <div class="mainnews-hover">
                            <div class="mainnews-hover-content">
                                <p>Exerpt</p>
                                <i class="fa fa-ellipsis-h fa-2x"></i>
                            </div>
                        </div>
                        <img src="img/feetsmall.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="mainnews-caption">
                        <h4>Title</h4>
                        <p class="text-muted">Source</p>
                    </div>
                </div>-->

            </div>

        </div>
    </section>

     <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center who-is">
                    <h2 class="section-heading">What is this all about?</h2>
                    <h3 class="section-subheading text-muted">Have you ever watched the nightly news?</h3>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-md-4">
                    <i class="fa fa-minus fa-2x dash"></i>
                    <h4 class="about-heading">Inspirational</h4>
                    <p class="text-muted">News reports always seem to be negative in nature...someone getting hurt, someone getting killed, someone getting taken advantage of. A simple broadcast always leaves me frustrated with the world. Why is <i>bad</i> the only news that gets reported? Why is that what sells? I got tired of it.</p>
                    <div class="row text-center">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-thumbs-o-down fa-2x"></i>
                        </span>
                     </div>
                </div>
                <div class="col-md-4">
                    <i class="dash fa fa-minus fa-2x"></i>
                    <h4 class="about-heading">Positive</h4>
                    <p class="text-muted">I wanted a place where I could find news that did not focus on the bad. There are so many good things going on out there. Why can't those get reported? This site came about because of my simple wish to read the news and end with a greater faith in humanity rather than frustration with it.</p>
                    <div class="row text-center">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-newspaper-o fa-2x"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="dash fa fa-minus fa-2x"></i>
                    <h4 class="about-heading">News</h4>
                    <p class="text-muted">Each day, this site updates with new news stories that are diverse in topic and content. However, each one is inspirational and positive in nature. I hope the articles inspire you and leave you with a renewed faith in humanity. There is a world of good out there. Let's make that worth reporting!</p>
                    <div class="row text-center">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-thumbs-o-up fa-2x"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe Section -->
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Subscribe</h2>
                    <h3 class="section-subheading text-muted">Get daily stories delivered to your Inbox!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="subscribeForm" novalidate>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Please enter your name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Please enter your email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Care to say something?" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer --> 
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="copyright">&copy Erik Richter | 2015</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Nav-Bar -->
            <div id="slider">
                <div class="mobile-nav">
                    <a href="#page-top" class="page-scroll"><img src="img/PLogoMobile.png"><a>
                        <ul class="nav-menu">
                            <li><a href="#mainnews" class="page-scroll btn">Stories</a></li><!--
                            --><li><a href="#about" class="page-scroll btn">Inspired</a></li><!--
                            --><li><a href="#subscribe" class="page-scroll btn">Subscribe</a></li>
                        </ul>
                </div>
            </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Subscribe Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/main.js"></script>

    <script src="js/jquery.appear.js" type="text/javascript"></script>

    <!--Google Analytics-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53557754-1', 'auto');
      ga('send', 'pageview');

    </script>

</body>

</html>
