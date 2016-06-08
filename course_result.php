<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Time Table</title>
<style type="text/css">
</style>
</head>

<body>

                <p align="center">
                  <?php

 		 require ("includes/dbconnection.php");
?>
                 
                 <span class="style32 style3"><span class="style10">
                    <strong>Motilal Nehru National Institute of Technology </strong><br /> 
                    Allahabad </span><br />
                    <br /> 
                    <span class="style11">Individual Course's Time Table </span></span>
                    <span class="style12">
                    <br />
            <?php
				$psem=$_REQUEST['psem'];
				$result = mysql_query("SELECT * FROM sem HAVING sem_id='$psem'");
				
if (!$result) 
		{
		die("Query to show fields from table failed");
		}
			$numberOfRows = MYSQL_NUMROWS($result);
	
			If ($numberOfRows == 0) 
				{
				}
			else if ($numberOfRows > 0) 
				{
				$i=0;
			
			$sem = MYSQL_RESULT($result,$i,"semester");
				}
				echo 'Semester '.$sem;?>
		    </span> </span>
                  <?php
				
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];
		//	$t = $_REQUEST[$t];
			
				$pCourse =$_REQUEST['pCourse'];
				$result = mysql_query("SELECT * FROM course HAVING course_id='$pCourse'");
				
if (!$result) 
		{
		die("Query to show fields from table failed");
		}
			$numberOfRows = MYSQL_NUMROWS($result);
	
			If ($numberOfRows == 0) 
				{
			//echo 'Sorry No Record Found!';
				}
			else if ($numberOfRows > 0) 
				{
				$i=0;
			
			$teacher = MYSQL_RESULT($result,$i,"course_yrSec");
				
				
				}
				
				?>
</p>
            <table width="725" border="0" align="center" >
              <tr>
                <td width="111" height="54" class="style1"><span class="style32">Course:</span></td>
                <td width="588" align="left" class="style1"><span class="style32" ><strong><?php echo $teacher ?></strong>
				</span></td>
			  </tr>
</table>
            <p>&nbsp;</p>
            <table width="723" border="1" align="center">
              <tr>
                <td width="102"><div align="center" class="style1">TIME</div></td>
                <td width="118"><div align="center" class="style1">MONDAY</div></td>
                <td width="119"><div align="center" class="style1">TUESDAY</div></td>
                <td width="115"><div align="center" class="style1">WEDNESDAY</div></td>
                <td width="119"><div align="center" class="style1">THURSDAY</div></td>
                <td width="110"><div align="center" class="style1">FRIDAY</div></td>
              </tr>
              <tr>
                <td><div align="center" class="style15">8:00 - 9:00 <br />
                  &nbsp;&nbsp; </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 1){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 1){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 1){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 1){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 1){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
              </tr>
              <tr>
                <td><div align="center" class="style15">9:00 - 10:00 <br />
                  &nbsp;&nbsp; </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 2){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                  &nbsp;</div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 2){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 2){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 2){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			 $pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 2){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
              </tr>
              <tr>
                <td><div align="center" class="style15">10:00 - 11:00 <br />
                  &nbsp;&nbsp; </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 3){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 3){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' 
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 3){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 3){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 3){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
              </tr>
              <tr>
                <td><div align="center" class="style15">11:00 - 12:00 <br />
                  &nbsp;&nbsp;</div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 4){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 4){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 4){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 4){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 4){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
              </tr>
              <tr>
                <td><div align="center" class="style15">12:00 - 1:00 <br />
                  &nbsp;&nbsp;</div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 5){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 5){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 5){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 5){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 5){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
              </tr>
              <tr>
                <td><div align="center" class="style15">1:00 - 2:00 <br />
                  &nbsp;&nbsp;</div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 6){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 6){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 6){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 6){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 6){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
              </tr>
              <tr>
                <td><div align="center" class="style15">2:00 - 3:00 <br />
                  &nbsp;&nbsp;</div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 7){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 7){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 7){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 7){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 7){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
              </tr>
              <tr>
                <td><div align="center" class="style15">3:00 - 4:00 <br />
                  &nbsp;&nbsp;</div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 8){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 8){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 8){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 8){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 8){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
              </tr>
              <tr>
                <td><div align="center" class="style15">4:00 - 5:00 <br />
                  &nbsp;&nbsp;</div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 9){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 9){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 9){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 9){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 9){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
              </tr>
              <tr>
                <td><div align="center" class="style15">5:00 - 6:00 <br />
                  &nbsp;&nbsp;</div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 10){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 10){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 10){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 10){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
                <td><div align="center" class="style12">
                    <?php
			$pCourse =$_REQUEST['pCourse'];
			
			$psem=$_REQUEST['psem'];

			$result = mysql_query("SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING course_id='$pCourse' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = MYSQL_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo '';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = MYSQL_RESULT($result,$i,"sub_code");
					$hidden_pcourse = MYSQL_RESULT($result,$i,"course_yrSec");
					$hidden_proom = MYSQL_RESULT($result,$i,"room_name");
					$hidden_pt = MYSQL_RESULT($result,$i,"teacher_name");
					$hidden_pday = MYSQL_RESULT($result,$i,"day_id");
					$hidden_pstime = MYSQL_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 10){	
			  		echo $hidden_psubcat . '<br>'.$hidden_pt . '<br>'.$hidden_proom;
					if(isset($end)) echo end;
						}
						
	$i++;	 
			}
			} ?>
                </div></td>
              </tr>
              
            </table>
            <p><br />
            </p>
            </body>
</html>