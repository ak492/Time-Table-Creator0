<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="includes/style_prac2.css" rel="stylesheet" type="text/css" />
<title>Time Table Management System</title>
<style type="text/css"></style>
</head>
<?php
 //  include("includes/session.php");
  require ("includes/dbconnection.php");

   if (isset($_POST['cmdSubmit'])) 
  	{ 		
		
		if (trim($_POST['pcourse']) == ""){ $flagcourse = 'Required Field.';}	
		
		if (trim($_POST['psem']) == ""){ $flagsy= 'Required Field.';}

//if (($flagcourse == "") && ($flagsy == ""))
//{
$hidden_pcourse= $_POST['hidden_pcourse'];
			 header(
			 		"Location: search_c_result.php?pCourse=". $_POST['pcourse'] 
					
					."&psem=". $_POST['psem'] 					
		 		   );				   				   
		//	}		 	 
			
			}
		 //	$hidden_pcourse= $_POST['hidden_pcourseid'];
		//	$hidden_psy= $_POST['hidden_psyid'];
			
			
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
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	</ul>

  </div>
  <div id="content">
	
	<div id="left">
		<form action="" name="form1" method="post" >
		  <div align="center"><br />
		  Search Course's Time Table
		  <br />
		    <br />
		  </div>
		  <table width="448" border="0" align="center" >
            <tr >
              <td width="76" height="34" ><div align="right" class="style3">Course</div></td>
              <td width="342"  ><span class="style22">
                <label>
<select name="pcourse"  id="pcourse" style="width: 267px" onchange="javascript: return optionList_SelectedIndex()">
  <?php // source 1: http://www.dmxzone.com/showDetail.asp?NewsId=5102&TypeId=25
			  	// source 2: http://localhost/phpmyadmin/index.php?db=mydbase&token=651c0063e511c381c9c82ce1fe9b6854
				$result = mysql_query("SELECT * FROM course ORDER BY course_yrSec ");
	?><option value="0"></option> <?php	
			  	while ($row = mysql_fetch_assoc($result)) { ?>
  <option value="<?php echo $row['course_id'];?>"><?php echo $row['course_yrSec'];?> </option>
  <?php }  ?>
</select>
<!-- 
			Setting up the correct combo box width alignment to table
			source: http://www.eskimo.com/~bloo/indexdot/html/topics/selectwidth.htm
		-->
                <input type="hidden" id="hidden_pcourseid" name="hidden_pcourseid"  value="<?PHP echo trim($_POST['hidden_pcourseid']); ?>" />
                <input type="hidden" id="hidden_pcourse" name="hidden_pcourse" value="<?PHP echo trim($_POST['hidden_pcourse']); ?>"/>
              </label>
              </span></td>
              <td width="16" ><span class="style21"><span class="style20"><?php if(isset($flagcourse)) echo $flagcourse; ?></span></span></td>
            </tr>
            
              <td height="34"><div align="right" class="style3">Semester</div></td>
              <td  ><span class="style22">
                <label>
                <select name="psem"  id="psem" style="width: 267px" onchange="javascript: return optionList1_SelectedIndex()">
                  <?php // source 1: http://www.dmxzone.com/showDetail.asp?NewsId=5102&TypeId=25
			  	// source 2: http://localhost/phpmyadmin/index.php?db=mydbase&token=651c0063e511c381c9c82ce1fe9b6854
				$result = mysql_query("SELECT * FROM sem ORDER BY semester ");			  	
				do {  ?>
                  <option value="<?php echo $row['sem_id'];?>"><?php echo $row['semester'];?> </option>
                  <?php } while ($row = mysql_fetch_assoc($result)); ?>
                </select>
                <!-- 
			Setting up the correct combo box width alignment to table
			source: http://www.eskimo.com/~bloo/indexdot/html/topics/selectwidth.htm
		-->
                <input type="hidden" id="hidden_psemid" name="hidden_psemid"  value="<?PHP echo trim($_POST['hidden_psyid']); ?>" />
                <input type="hidden" id="hidden_psem" name="hidden_psem" value="<?PHP echo trim($_POST['hidden_psy']); ?>"/>
                </label>
              </span></td>
              <td><span class="style21"><span class="style20"><?php if(isset($flagsem))echo $flagsem; ?></span></span></td>
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

			var selObj = document.getElementById('pcourse');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_pcourseid_ValueObj = document.getElementById('hidden_pcourseid');
			var hidden_pcourse_TextObj = document.getElementById('hidden_pcourse');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_pcourseid_ValueObj.value = selObj.options[selIndex].value;
			hidden_pcourse_TextObj.value = selObj.options[selIndex].text;
		
			//var form = document.forms[0]; --> Option B
			<!-- //Passing the data from the databse residence [ID] to hidden field
			//Source: http://www.trans4mind.com/personal_development/JavaScript2/select.htm /-- -->			
			//----------------------------------------------------------------------------------------------------------
function optionList1_SelectedIndex()
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

			var selObj = document.getElementById('psem');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_psemid_ValueObj = document.getElementById('hidden_psemid');
			var hidden_psem_TextObj = document.getElementById('hidden_psem');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_psemid_ValueObj.value = selObj.options[selIndex].value;
			hidden_psem_TextObj.value = selObj.options[selIndex].text;
		
			//var form = document.forms[0]; --> Option B
			<!-- //Passing the data from the databse residence [ID] to hidden field
			//Source: http://www.trans4mind.com/personal_development/JavaScript2/select.htm /-- -->			
			//----------------------------------------------------------------------------------------------------------
		}
		
		
		
		//hidden_psyid
		
								
		
		
		
</script>	

<script language="javascript" >
	var form = document.forms[0];
	//purpose?: to retrieve what users last input on the field..
	form.pcourse.value = ("<?PHP echo $_POST['hidden_pcourse']; ?>");
	
	form.psem.value = ("<?PHP echo $_POST['hidden_psem']; ?>");
	//alert (form.pCityM.value);				
</script>