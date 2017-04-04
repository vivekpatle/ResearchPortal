<!DOCTYPE html>
<html>

<head>
    <title>Home</title>

    <!-- Favicon-->
    <link rel="shortcut icon" href="images/duicon.ico" type="image/x-icon" sizes="100x100" />

    <!--Bootstrap 3.3.7-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <!-- Other style files -->
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <link rel="stylesheet" type="text/css" href="css/carousel.css">

    <link rel="stylesheet" type="text/css" href="css/footer_wrap.css">

    <link rel="stylesheet" type="text/css" href="">


</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="images/navbar/ducolorlogonew.png" alt="logo" height="60px" width="60px" >
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.php" id="jake" class="hvr-underline-from-center"><i class="fa fa-home" aria-hidden="true"></i> &nbsp Home</a>
                    </li>
                    <li>
                        <a href="departments.php" id="jake" class="hvr-underline-from-center"><i class="fa fa-building" aria-hidden="true"></i>&nbsp Department </a>
                    </li>
                    <li>
                        <a href="research_profile.php" id="jake" class="hvr-underline-from-center"> <i class="fa fa-book" aria-hidden="true"></i>&nbsp Research Profile
                        </a>
                    <li>
                           &nbsp &nbsp <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="jake"> Login </button>

                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
    </nav>
<!--Carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/carousel/2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/carousel/3.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/carousel/4.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="images/carousel/5.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--.carousel-->

<!--Social Media-->

    <div style="background-color:#383A56; padding:30px">
        <div>
            <h1 style="color: white; text-align: center;font-family: 'Playfair Display', serif;
 margin-bottom: 20px; font-size:50px;">Social Media</h1>
        </div>
        <div class="container">


            <div class="row">
                <div class="col-lg-4">
                    <div class="jumbotron" style="padding: 10px">
                        <h4 style="text-align:center"><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; Twitter</h4>
                        <h5 style="text-align:center">November 4, 2016</h5>
                        <hr class="my-2">
                        <p style="text-align:center; font-family: 'Taviraj', serif;">#DelhiUniversity | FMS Delhi Admission 2017: CAT 2016 Shortlisting Criteria changed to increase women &… http://dlvr.it/Mbg4gR </p>
                        <p style="text-align:center" class="lead">
                            <a class="btn btn-primary btn-lg" href="https://twitter.com/AllDUNews/status/794837198705037312" role="button"> View this tweet</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="jumbotron" style="padding: 10px">
                        <h4 style="text-align:center"><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; Twitter</h4>
                        <h5 style="text-align:center">November 4, 2016</h5>
                        <hr class="my-2">
                        <p style="text-align:center; font-family: 'Taviraj', serif;">#DelhiUniversity | Delhi High Court Issues Historic Decision for Access to Knowledge and Education http://dlvr.it/Mbd3wb </p>
                        <p style="text-align:center" class="lead">
                            <a class="btn btn-primary btn-lg" href="https://twitter.com/AllDUNews/status/794791624899297280" role="button"> View this tweet</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="jumbotron" style="padding: 10px">
                        <h4 style="text-align:center"><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp;  Twitter</h4>
                        <h5 style="text-align:center">November 4, 2016</h5>
                        <hr class="my-2">
                        <p style="text-align:center; font-family: 'Taviraj', serif;">#DelhiUniversity | FMS Delhi admissions 2017: Application process for MBA and Ph D course to end before CAT 2016 </p>
                        <p style="text-align:center" class="lead">
                            <a class="btn btn-primary btn-lg" href="https://twitter.com/AllDUNews/status/794745571613413377" role="button"> View this tweet</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--.Social Media-->
<div id="footerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>About</h4>
                    <div class="hline-w"></div>
                    <p>The University of Delhi is the premier university of the country and is known for its high standards in teaching and research and attracts eminent scholars to its faculty.</p>
                </div>
                <div class="col-lg-4">
                    <h4>Social Links</h4>
                    <div class="hline-w"></div>
                    <p>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <h4>Know us more!</h4>
                    <div class="hline-w"></div>
                    <p>
                        <a href="home.php">Home</a>
                        <br>
                        <a href="feedback.php">Feedback</a>
                        <br>
                        <a href="contact.php">Contact</a>
                        <p>
                </div>
            </div>
        </div>
    </div>


<script>
$(document).ready(function(){
    $('.modal-footer button').click(function(){
        var button = $(this);
        if ( button.attr("data-dismiss") != "modal" ){
            var inputs = $('form input');
            var title = $('.modal-title');
            var progress = $('.progress');
            var progressBar = $('.progress-bar');
            inputs.attr("disabled", "disabled");
            button.hide();
            progress.show();
            progressBar.animate({width : "100%"}, 100);
            progress.delay(1000)
                    .fadeOut(600);
            button.text("Close")
                    .removeClass("btn-primary")
                    .addClass("btn-success")
                    .blur()
                    .delay(1600)
                    .fadeIn(function(){
                        title.text("Log in is successful");
                        button.attr("data-dismiss", "modal");
                    });
        }
    });
    $('#myModal').on('hidden.bs.modal', function (e) {
        var inputs = $('form input');
        var title = $('.modal-title');
        var progressBar = $('.progress-bar');
        var button = $('.modal-footer button');
        inputs.removeAttr("disabled");
        title.text("Log in");
        progressBar.css({ "width" : "0%" });
        button.removeClass("btn-success")
                .addClass("btn-primary")
                .text("Ok")
                .removeAttr("data-dismiss");
                
    });
});
</script>

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script> 

</body>
</html>


