
<?php
include("../include/header.inc");
echo 'About/Contact LadderMonkeyPainting';
include("../include/header2.inc");
// header2 includes <body> tag, footer includes </body>


//add in title
echo '
<div class="container">
    <div class="jumbotron">

        <!--Start Nav Bar-->
        <nav class="navbar navbar-default navbar-fixed-top">
			<a id="logo" class="pull-left"><img src="../images/logo.jpg"></a>
            <a class="navbar-brand" href="#">LadderMonkeyPainting</a>
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home<span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="#">About/Contact</a></li>
                <li><a href="./gallery.php">Gallery</a></li>
                <li><a href="./schedule.php">Scheduling</a></li>
                <li><a href="./employees.php">Meet the Team</a></li>
            </ul>
        </nav>
        <!--end nav bar-->

		<img class="pull-left" id="jumbo_image" src="../images/logo-jumbo.jpg">

        <h1 id="jumbo_title1">About Ladder Monkey Painting</h1>

    </div>

	<div class="page-header">
		<h1>About Us</h1>
	</div>

	<div class="col-xs-6">
		<div class="well">
			Ladder Monkey Painting creates a holistic approach to house maintenance and client satisfaction. An expert in the field with residential customers, and offerings for light commercial potential. We provide interior and exterior painting abilities that continuously exceed expectations.
		</div>
	</div>

	<div class="col-xs-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Name</h3>
			</div>
			<div class="panel-body">
				John Clark
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Phone</h3>
			</div>
			<div class="panel-body">
				(603) 425-4684
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Address</h3>
			</div>
			<div class="panel-body">
				<p>242 South Winooski Ave</p>
				<p>Burlington, VT 05401</p>
			</div>
		</div>
	</div>
	
	<div class="page-header">
		<h1>Contact Me</h1>
	</div>

<form action="./sendMail.php" method="POST">
	<div class="form-group row">
		<label for="user-email" class="col-xs-2" style="text-align:center; padding-top:6px; width:120px;">Your Email:</label>
		<div class="col-xs-10">
			<input class="form-control" type="email" placeholder="IGW-user@example.com" name="user-email" style="width:70%;">
		</div>
	</div>
	<div class="form-group row">
		<label for="email-subj" class="col-xs-2" style="text-align:center; padding-top:6px; width:120px;">Subject:</label>
		<div class="col-xs-10">
			<input class="form-control" type="text" placeholder="Subject" name="email-subj" style="width:40%;">
		</div>
	</div>
	<div class="form-group row">
		<label for="email-body" class="col-xs-2" style="text-align:center; width:120px">Message:</label>
		<div class="col-xs-10" style="width:70%;">
		 	<textarea class="form-control" name="email-body" type="text"style="height:250px;" placeholder="Enter message here..."></textarea>
			<br>
		  <button type="submit" class="btn btn-default" style="float:right;">Send</button>
		</div>
	</div>
</form>


</div>';

include("../include/footer.inc");
?>
