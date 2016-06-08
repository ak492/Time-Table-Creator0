<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="includes/style_prac2.css" rel="stylesheet" type="text/css" />
<title>Time Table Management System</title>
<style type="text/css"></style>
</head>
<?php
   //include("includes/session.php");
  require ("includes/dbconnection.php");

   if (isset($_POST['cmdSubmit'])) 
  	{ 		
		
		if (trim($_POST['pteacher']) == ""){ $flagcourse= 'Required Field.';}	
		

$hidden_pcourse= $_POST['hidden_pt'];
			 header(
			 		"Location: search_t_result.php?pT=". $_POST['pteacher'] 
					."&pT=".$_POST['pteacher']
										
		 		   );				   				   
			}
?>
<body>
<div id="container">
  <div id="header">
    <img src="images/logo copy.jpg" alt="s" width="717" height="160" />
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
		<form action="" name="form1" method="post" >
		
		  <div align="center"><br />
		  Search Teacher's Time Table
		  <br />
		    <br />
		  </div>
		  <table width="448" border="0" align="center" >
            <tr >
              <td width="76" height="34" ><div align="right" class="style3">Teacher</div></td>
              <td width="342"  ><span class="style22">
                <label>
<select name="pteacher"  id="pteacher" style="width: 267px" onchange="javascript: return optionList_SelectedIndex()">
  <?php // source 1: http://www.dmxzone.com/showDetail.asp?NewsId=5102&TypeId=25
			  	// source 2: http://localhost/phpmyadmin/index.php?db=mydbase&token=651c0063e511c381c9c82ce1fe9b6854
				$result = mysql_query("SELECT * FROM profile ORDER BY teacher_name ");	
?><option value="0"></option> <?php				
				while ($row = mysql_fetch_assoc($result)) {  ?>
  <option value="<?php if(isset($row)) echo $row['teacher_id'];?>"><?php if(isset($row)) echo $row['teacher_name'];?> </option>
  <?php } ?>
</select>
<!-- 
			Setting up the correct combo box width alignment to table
			source: http://www.eskimo.com/~bloo/indexdot/html/topics/selectwidth.htm
		-->
                <input type="hidden" id="hidden_ptid" name="hidden_ptid"  value="<?PHP echo trim($_POST['hidden_ptid']); ?>" />
                <input type="hidden" id="hidden_pt" name="hidden_pt" value="<?PHP echo trim($_POST['hidden_pt']); ?>"/>
              </label>
              </span></td>
              <td width="16" ><span class="style21"><span class="style20"><?php if(isset($flagcourse)) echo $flagcourse; ?></span></span></td>
            </tr>
            
              
          </table>
		  <p align="center"><span class="style30">
	      <input type="submit" name="cmdSubmit" value="Next" />
	      &nbsp;</span></p>
	  </form>
    </div>
		<div id="program"></div>
		<div id="right">
		  <p>&nbsp;</p>
	</div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<div id="footerline">
		  <p align="center"><span class="style4"> | <a href="about_dev.php">Developer</a>| <a href="about_sched.php">About System</a>| <a href="contact.php">Contact Us</a>| </span></p>
	</div>
  </div>
	
	<div id="footer">Copyright © 2016 </div>	
</div>
</body>
</html>

<script language="javascript" >
/*		function SubmitForm(form)
		{			
			var form = document.forms[0];		
			if ((form.pLName.value.length <1) ||
				(form.pFName.value.length <1) ||
				(form.pMIName.value.length <1)) 
				{						
				 return false; 		
				}				 									
			else
				{	
				  return true;
				}
		}
*/		
		function optionList_SelectedIndex()
		{
			//----------------------------------------------------------------------------------------------------------
			/*HTML/JavaScript - Working with selectedIndex (select, options, selectedIndex, text, value)
			The selectedIndex number can be used to reference the selected option in the select list. 
			Note: It is case sensitive. 		
			Make sure to capitalize the "I" in selectedIndex
			* selectedIndex - The number (base 0) of the item that is selected in the select list
			* value - For an option, what's in the value attribute.
			  If the value attribute is not set, text should be returned [* refer below]
				  o val1 is the value in the following HTML example
				  o <option value="val1">sea one</option>
			* text - For an option, what's in between the option tags
				  o sea two is the text in the following HTML example
				  o <option value="val2">sea two</option>*/

			var selObj = document.getElementById('pteacher');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_ptid_ValueObj = document.getElementById('hidden_ptid');
			var hidden_pt_TextObj = document.getElementById('hidden_pt');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_ptid_ValueObj.value = selObj.options[selIndex].value;
			hidden_pt_TextObj.value = selObj.options[selIndex].text;
		
			//var form = document.forms[0]; --> Option B
			<!-- //Passing the data from the databse residence [ID] to hidden field
			//Source: http://www.trans4mind.com/personal_development/JavaScript2/select.htm /-- -->			
			//----------------------------------------------------------------------------------------------------------

		
</script>	

<script language="javascript" >
	var form = document.forms[0];
	//purpose?: to retrieve what users last input on the field..
	form.pteacher.value = ("<?PHP echo $_POST['hidden_pt']; ?>");
	
	//alert (form.pCityM.value);				
</script>