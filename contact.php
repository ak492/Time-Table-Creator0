<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="includes/style_prac2.css" rel="stylesheet" type="text/css" />
<title>Time Table Management System</title>
<style type="text/css">
</style>
</head>
<?php
//include("includes/session.php");
	
?>
<body>
<div id="container">
  <div id="header"><img src="images/logo copy.jpg" alt="s" width="717" height="160" />
    <div id="logo_w2"></div>
    <ul class="cssMenu cssMenum">
	<li class=" cssMenui"><a class="  cssMenui" href="index.php"><img src="images/homepage.gif" />Home</a></li>
	<li class=" cssMenui"><a class="  cssMenui" href="#"><span>Search</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul class=" cssMenum">
		<li class=" cssMenui"><a class="  cssMenui" href="search_teacher.php"><img src="images/User (1).ico" />Teacher Time Table</a></li>
		<li class=" cssMenui"><a class="  cssMenui" href="search_course.php"><img src="images/user-group.ico" /> Student Time Table</a></li>
		<li class=" cssMenui"><a class="  cssMenui" href="search_room.php"><img src="images/school-icon.png" />Room Time Table</a></li>
	</ul>
	

  </div>
	<div id="content">
	
	  <div id="left">
		
	    <div align="center">
	      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              <br />
	        <p>For any questions, comments or reaction please contact us at these numbers:</p>
	        <p># <strong>09098487145 or 09208287464</strong></p>
	        <p>or feel free to email us at <strong>time_table_management_system@mnnit.in </strong></p>
	        <p>&nbsp;</p>
	        <p>Thank you and God bless! </p>
	        
			<p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p><a href=request.php><h1>schedule change request</h1></a></p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	      </form>
	      </div>
	   
	  </div>
		<div id="program"></div>
		<div id="right">
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
	  </div>
		<div id="footerline">
		  <p align="center"><span class="style4"> | <a href="about_dev.php">Developer</a>| <a href="about_sched.php">About System</a>| <a href="contact.php">Contact Us</a>| </span></p>
	  </div>
	</div>
	
	<div id="footer">Copyright © 2016 </div>	
</div>
</body>
</html>

