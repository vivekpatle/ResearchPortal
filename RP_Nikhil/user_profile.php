<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>

    <title>Profile</title>

	<!-- Favicon-->
        <link rel="shortcut icon" href="images/duicon.ico" type="image/x-icon" sizes="100x100" />

	<!--Bootstrap 3.3.7-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

    <link rel="stylesheet" type="text/css" href="css/student_profile.css">

    <link rel="stylesheet" type="text/css" href="css/footer_wrap.css">

	</style>

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
                    <img src="images/navbar/ducolorlogonew.png" alt="logo" height="60px" width="60px">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
    <li><a href="research_search.php" class="hvr-underline-from-center" id="jake"><i class="fa fa-university" aria-hidden="true"></i> Research Portal </a>
                    </li>
                    <li>
                        <a href="departments.php" id="jake" class="hvr-underline-from-center"><i class="fa fa-building" aria-hidden="true"></i>  Department 
</a>
                    </li>
                    <li>
                        <a href="research_profile.php" id="jake" class="hvr-underline-from-center"> <i class="fa fa-book" aria-hidden="true"></i> Research Profile
</a>
                    </li>
                <li>
                        <a href="#" id="jake" class="hvr-underline-from-center">User <i class="fa fa-user fa-lg" aria-hidden="true"></i></a>
                </li>
				<li>
					<a href="logout.php" id="jake" class="hvr-underline-from-center">Logout  <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>

				</li>
                </ul>
            </div>


            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        </nav>


<div class="container" style="margin-top:35px;">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
<p class=" text-info"></p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $fname; ?> <?php echo $lname;?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img src="C:\xampp\h" alt="User Pic" width="128" height="128"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody id="jake" style="color:black; font-size: 1em">
                      <tr>
                        <td><strong>Department:</strong></td>
                        <td><?php echo $college; ?></td>
                      </tr>
                      <tr>
                        <td><strong>Admission date:</strong></td>
                        <td>06/23/2013</td>
                      </tr>
                        <td><strong>Gender</strong></td>
                        <td>Male</td>
                      
                      </tr>
                       <tr>
                        <td><strong>Enrolment number</strong></td>
                        <td><?php echo $roll_number; ?><br><br>
                        </td>
                        </tr>
                        <tr>
                            <td><strong>Areas of Interest</strong></td>
                            <td> Artificial Intelligence, Machine Learning, Mathematics, Matter Science</td> 
                        </tr>
                        <tr>
                            <td><a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Add Research Data 
        </a></td> 
                        </tr>   
                      </tr> 
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
     
                        <span class="pull-right">
                            <a href="edit.php" data-original-title="Edit this user" data-toggle="tooltip" type="submit" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>


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
$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();
    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);
        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });
    $('[data-toggle="tooltip"]').tooltip();
    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
</script>


<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>	

</body>
</html>