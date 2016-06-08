
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="includes/style_prac2.css" rel="stylesheet" type="text/css" />
<title>Time Table management System</title>
<style type="text/css">

</style>
</head>
<?php
 require ("includes/dbconnection.php");
 ?>
  
<?php
   if (isset($_POST['cmdSubmit'])) 
  	{ 		
		$flagteacher="";$flagroom="";$flagday="";$flagstime="";
		
		if (trim($_POST['hidden_pidt']) == "")  { $flagteacher  = 'Required Field.';}
		if (trim($_POST['hidden_proomid']) == "") { $flagroom = 'Required Field.';} 			
		
		if (trim($_POST['hidden_pdayid']) == ""){ $flagday = 'Required Field.';}
		if (trim($_POST['hidden_pstimeid']) == ""){ $flagstime = 'Required Field.';}
		

		


if (($flagteacher == "") && ($flagroom == "") &&  ($flagday == "")&& ($flagstime == "") 
)
{

				
		 	
			$hidden_pt= $_POST['pteacher'];
			$hidden_proom= $_POST['proom'];
			$hidden_pday = $_POST['pday'];
			$hidden_pstime = $_POST['pstime'];
			
	


	

if (true){
			if($_POST['password']=='1234')
			{
			$query="INSERT INTO request( teacher_id, room_id, day_id, time_s_id, )
					VALUES('$hidden_pt','$hidden_proom','$hidden_pday','$hidden_pstime')";
					
			$result=mysql_query ("INSERT INTO request(teacher_id, room_id,  day_id, time_s_id )
					VALUES('$hidden_pt','$hidden_proom','$hidden_pday','$hidden_pstime')") or die(mysql_error()); ?>
					
			<div style="position: fixed">
               <script type="text/javascript" >alert("Successfull!!!!");</script>
				
            </div>
			<?php
			}
else
			{?><script type="text/javascript" >alert("Password donot match!!!! Try again...");</script><?php }
			}	
		}
	}

	

	
?>		

	

	


<body>
<div id="container">
  <div id="header">
    <div id="logo_w2"><img src="images/logo copy.jpg" alt="s" width="717" height="160" /></div>
    <ul class="cssMenu cssMenum">
	<li class=" cssMenui"><a class="  cssMenui" href="index.php"><img src="images/homepage.gif" />Home</a></li>
	<li class=" cssMenui"><a class="  cssMenui" href="#"><span>Search</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul class=" cssMenum">
		<li class=" cssMenui"><a class="  cssMenui" href="search_teacher.php"><img src="images/User (1).ico" />Teacher Schedule</a></li>
		<li class=" cssMenui"><a class="  cssMenui" href="search_course.php"><img src="images/user-group.ico" /> Student Schedule</a></li>
		<li class=" cssMenui"><a class="  cssMenui" href="search_room.php"><img src="images/school-icon.png" />Room Schedule</a></li>
	</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	
  </div>
	<div id="content">
	  <div id="left">
		<form action="" name="form1" method="post" >
		  <div align="center">
		    <p><br />
	          <span class="style33">Request for change</span></p>
		    <div id="layer">
              <div align="justify" >
                <div align="center" ><?php if(isset($note))echo $note;?></div>
              </div>
            <div align="center"></div></div>
		    <table border="0" align="center">
              <tr  >
                <td colspan="4" ><div align="center" class="style2">
                    <div align="center" class="style5"></div>
                </div></td>
              </tr>
              <tr>
                <td colspan="4"  ><label></label>
                    <label></label>
                    <div align="center" class="style30"><a href="index.php"></a></div></td>
              </tr>
              <tr>
                <td colspan="4" ><label></label>
                    <label></label>
                    <div align="center">
                      <div align="right" class="style3">
                        <div align="center" class="style28"></div>
                      </div>
                    </div></td>
              </tr>
              <tr >
			  
                <td height="35" ><div align="right" class="style3">Teacher</div></td>
                <td ><span class="style22">
                  <label>
                  <select name="pteacher"  id="pteacher" style="width: 267px" onchange="javascript: return optionList3_SelectedIndex()">
                    <?php 
				$result = mysql_query("SELECT * FROM profile ORDER BY teacher_name ");	
?><option value="0" ></option>
<?php 				
					while ($row = mysql_fetch_assoc($result)){
					
				 ?>
                    <option value="<?php echo $row['teacher_id'];?>"><?php echo $row['teacher_name'];?> </option>
                    <?php } ?>
                  </select>
                  
                  <input type="hidden" id="hidden_pidt" name="hidden_pidt"  value="<?PHP echo trim($_POST['hidden_pidt']); ?>" />
                  <input type="hidden" id="hidden_pt" name="hidden_pt" value="<?PHP echo trim($_POST['hidden_pt']); ?>"/>
                  </label>
                </span></td>
                <td ><span class="style21"><span class="style20"><?php  if(isset($flagteacher)) echo $flagteacher; ?></span></span></td>
                <td >&nbsp;</td>
              </tr>
              <tr >
			  
			  
			  
                <td height="34" ><div align="right" class="style3">Room</div></td>
                <td ><span class="style22">
                  <label>
                  <select name="proom"  id="proom" style="width: 267px" onchange="javascript: return optionList4_SelectedIndex()">
                    <?php // source 1: http://www.dmxzone.com/showDetail.asp?NewsId=5102&TypeId=25
			  	// source 2: http://localhost/phpmyadmin/index.php?db=mydbase&token=651c0063e511c381c9c82ce1fe9b6854
				$result = mysql_query("SELECT * FROM room ORDER BY room_name ");			  	
				do {  ?>
                    <option value="<?php echo $row['room_id'];?>"><?php echo $row['room_name'];?> </option>
                    <?php } while ($row = mysql_fetch_assoc($result)); ?>
                  </select>
                  <!-- 
			Setting up the correct combo box width alignment to table
			source: http://www.eskimo.com/~bloo/indexdot/html/topics/selectwidth.htm
		-->
                  <input type="hidden" id="hidden_proomid" name="hidden_proomid"  value="<?PHP echo trim($_POST['hidden_proomid']); ?>" />
                  <input type="hidden" id="hidden_proom" name="hidden_proom" value="<?PHP echo trim($_POST['hidden_proom']); ?>"/>
                  </label>
                </span></td>
                <td><span class="style21"><span class="style20"><?php  if(isset($flagroom)) echo $flagroom; ?></span></span></td>
                <td>&nbsp;</td>
              </tr>
              <tr>

                <td height="34"><div align="right" class="style3">Day</div></td>
                <td ><span class="style22">
                  <label><!-- 
			Setting up the correct combo box width alignment to table
			source: http://www.eskimo.com/~bloo/indexdot/html/topics/selectwidth.htm
		-->
                  <select name="pday"  id="pday" style="width: 267px" onchange="javascript: return optionList8_SelectedIndex()">
                    <?php // source 1: http://www.dmxzone.com/showDetail.asp?NewsId=5102&TypeId=25
			  	// source 2: http://localhost/phpmyadmin/index.php?db=mydbase&token=651c0063e511c381c9c82ce1fe9b6854
				$result = mysql_query("SELECT * FROM day ORDER BY day_id");			  	
				do {  ?>
                    <option value="<?php echo $row['day_id'];?>"><?php echo $row['day_name'];?> </option>
                    <?php } while ($row = mysql_fetch_assoc($result)); ?>
                  </select>
                  <input type="hidden" id="hidden_pdayid" name="hidden_pdayid"  value="<?PHP echo trim($_POST['hidden_pdayid']); ?>" />
                  <input type="hidden" id="hidden_pday" name="hidden_pday" value="<?PHP echo trim($_POST['hidden_pday']); ?>"/>
                  </label>
                </span></td>
                <td><span class="style21"><span class="style20"><?php  if(isset($flagday)) echo $flagday; ?></span></span></td>
                <td >&nbsp;</td>
              </tr>
              <tr>
                <td height="34"><div align="right" class="style3">Starting Time </div></td>
                <td ><span class="style22">
                  <label>
                  <select name="pstime"  id="pstime" style="width: 267px" onchange="javascript: return optionList9_SelectedIndex()">
                    <?php // source 1: http://www.dmxzone.com/showDetail.asp?NewsId=5102&TypeId=25
			  	// source 2: http://localhost/phpmyadmin/index.php?db=mydbase&token=651c0063e511c381c9c82ce1fe9b6854
				$result = mysql_query("SELECT * FROM timestart ORDER BY time_s_id");			  	
				do {  ?>
                    <option value="<?php echo $row['time_s_id'];?>"><?php echo $row['time_s'];?> </option>
                    <?php } while ($row = mysql_fetch_assoc($result)); ?>
                  </select>
                  <!-- 
			Setting up the correct combo box width alignment to table
			source: http://www.eskimo.com/~bloo/indexdot/html/topics/selectwidth.htm
		-->
                  <input type="hidden" id="hidden_pstimeid" name="hidden_pstimeid"  value="<?PHP echo trim($_POST['hidden_pstimeid']); ?>" />
                  <input type="hidden" id="hidden_pstime" name="hidden_pstime" value="<?PHP echo trim($_POST['hidden_pstime']); ?>"/>
                  </label>
                </span></td>
                <td><span class="style21"><span class="style20"><?php  if(isset($flagtime))echo $flagstime; ?></span></span></td>
                <td>&nbsp;</td>
              </tr>
			  
			  <tr>
                <td height="34"><div align="right" class="style3">password </div></td>
                <td ><span class="style22">
				
				<input type="password" name="password">
			  
              
			  <tr>
                <td height="21" colspan="4">&nbsp;</td>
              </tr>
              <tr >
			  
                <td colspan="3"><div align="center"><span class="style30">
                  <input type="submit" name="cmdSubmit" value="Submit"onclick="return confirm('<?php echo "your request has been submitted"; ?>'); > 
                  &nbsp;
                  
				  
                </span></div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4"><div align="center"></div></td>
              </tr>
            </table>
		    <p class="style32">&nbsp;</p>
		    <p>&nbsp;</p>
		  </div>
	    </form>
      </div>
		<div id="program"></div>
		<div id="right">
		  <p>&nbsp;</p>
			<p>&nbsp;</p>
	  </div>
		<div id="footerline">
		  <p align="center"><span class="style4">| <a href="about_dev.php">Developer</a>| <a href="about_sched.php">Scheduling System</a>| <a href="contact.html">Contact Us</a>| </span></p>
	  </div>
	</div>
	
	<div id="footer">Copyright © 2016 </div>	
</div>
</body>
</html>
<script language="javascript" >





		function optionList3_SelectedIndex()
		{
			

			var selObj = document.getElementById('pteacher');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_pidt_ValueObj = document.getElementById('hidden_pidt');
			var hidden_pt_TextObj = document.getElementById('hidden_pt');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_pidt_ValueObj.value = selObj.options[selIndex].value;
			hidden_pt_TextObj.value = selObj.options[selIndex].text;
		
			//var form = document.forms[0]; --> Option B
			<!-- //Passing the data from the databse residence [ID] to hidden field
			//Source: http://www.trans4mind.com/personal_development/JavaScript2/select.htm /-- -->			
			//----------------------------------------------------------------------------------------------------------
		}
		
		
		function optionList4_SelectedIndex()
		{
			

			var selObj = document.getElementById('proom');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_proomid_ValueObj = document.getElementById('hidden_proomid');
			var hidden_proom_TextObj = document.getElementById('hidden_proom');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_proomid_ValueObj.value = selObj.options[selIndex].value;
			hidden_proom_TextObj.value = selObj.options[selIndex].text;
		
			//var form = document.forms[0]; --> Option B
			<!-- //Passing the data from the databse residence [ID] to hidden field
			//Source: http://www.trans4mind.com/personal_development/JavaScript2/select.htm /-- -->			
			//----------------------------------------------------------------------------------------------------------
		}
		
		
				
				
		
						
						
		
		
		
		
										function optionList8_SelectedIndex()
		{
			

			var selObj = document.getElementById('pday');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_pdayid_ValueObj = document.getElementById('hidden_pdayid');
			var hidden_pday_TextObj = document.getElementById('hidden_pday');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_pdayid_ValueObj.value = selObj.options[selIndex].value;
			hidden_pday_TextObj.value = selObj.options[selIndex].text;
		
			//var form = document.forms[0]; --> Option B
			<!-- //Passing the data from the databse residence [ID] to hidden field
			//Source: http://www.trans4mind.com/personal_development/JavaScript2/select.htm /-- -->			
			//----------------------------------------------------------------------------------------------------------
		}
		
		
												function optionList9_SelectedIndex()
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

			var selObj = document.getElementById('pstime');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_pstimeid_ValueObj = document.getElementById('hidden_pstimeid');
			var hidden_pstime_TextObj = document.getElementById('hidden_pstime');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_pstimeid_ValueObj.value = selObj.options[selIndex].value;
			hidden_pstime_TextObj.value = selObj.options[selIndex].text;
		
			//var form = document.forms[0]; --> Option B
			<!-- //Passing the data from the databse residence [ID] to hidden field
			//Source: http://www.trans4mind.com/personal_development/JavaScript2/select.htm /-- -->			
			//----------------------------------------------------------------------------------------------------------
		}
		function optionList10_SelectedIndex()
		{
			

			var selObj = document.getElementById('pdept');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_pdept_id_ValueObj = document.getElementById('hidden_pdept_id');
			var hidden_pdept_TextObj = document.getElementById('hidden_pdept');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_pdept_id_ValueObj.value = selObj.options[selIndex].value;
			hidden_pdept_TextObj.value = selObj.options[selIndex].text;
		
			-----------------------------------------------------------------------------------------------------
		}

</script>	

<script language="javascript" >
	var form = document.forms[0];
	//purpose?: to retrieve what users last input on the field..
	
	form.psubcat.value = ("<?PHP echo $_POST['hidden_psubcat']; ?>");
	form.psem.value = ("<?PHP echo $_POST['hidden_psem']; ?>");
	form.pdept.value = ("<?PHP echo $_POST['hidden_dept']; ?>");
	//alert (form.pCityM.value);				
</script>