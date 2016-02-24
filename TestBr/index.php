<?php
/*
 $sno = 0;
 $page_arr = array("edcet.apsche.ac.in","edcet.tssche.ac.in","edcet1.apsche.ac.in","edcet1.tssche.ac.in");
 $page = rand(0,3);
 //echo $page."-".$page_arr[$page] ."<br>";
 //$url = "Location: http://".$page_arr[$page];
 $url = "http://".$page_arr[$page]; 
// echo $url."<br>";
 if ($page > 1)
 {
 	  //echo "entered";
	 //header($url);
	 echo "<script> window.location = '" . $url . "'</script>";
 }
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>AP BArch Admissions</title>
	<script src="scripts/InitLoad.js" type="text/javascript"></script>	
	<script src="scripts/menu.js" type="text/javascript"></script>	
<!--	
	<script src="scripts/md5.js" type="text/javascript"></script>		
-->	
<script>
</script>
</head>

<body onload="initMenu();detectBrowser();">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
		<table width="950" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td colspan="2"><img src="images/top.png" width="950" height="35" /></td>
		  </tr>
		  <tr>
			<td width="450" align="left" valign="middle"><!--<img src="images/edcet-logo3.png" width="112" height="39" />--><font size = "+3" color="#FFFFFF"><b>AP BArch Admissions</b></font></td>
			<td width="680" height="44" align="right"><img src="images/apsche-logo.png" width="343" height="42" hspace="15" /></td>
		  </tr>
		  <tr>
			<td colspan="2" align="center" >
				<table width="950" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td width="41" align="right" ><a href="index.php"><img src="images/home-logo.png" width="41" height="32" / border="0"></a></td>
					<td width="895" align="left" class=" menubg menutext" >
						<ul id="sddm">
							<li><a href="doc/notification_1.pdf" target="_blank">Notification</a></li>
							<li><a href="doc/instructions.pdf" target="_blank">Procedure of Web Counselling</a></li>
							<li><a href="doc/web_procedure.pdf" target="_blank">Procedure to ExerciseOptions</a></li>							
							<li><a href="doc/fee.pdf" target="_blank">Fee Structure</a></li>							
							<li><a href="doc/course_codes.pdf" target="_blank">List of Courses</a></li>														
							<li><a href="printoptform.php" target="_blank">Print Options</a></li>																					
<!--							
							<li><a href="javascript:AjaxCall('apcollist.php','');">List of Colleges</a></li>
-->							
						</ul>
				    </td>
					<td width="14" align="left" ><img src="images/menubar_right.png" width="14" height="32" align="right" /></td>
				  </tr>
				</table>
			</td>
		  </tr>
		  <tr>
			<td colspan="2" align="center">
			 <table width="950" border="0" cellspacing="0" cellpadding="0">
			  <tr>
			    <td class="whitebg">&nbsp;
				</td>
			  </tr>
			  <tr>
				<td class="whitebg" valign="top">
				 <div id="pagedisplay" align="center">				
				  <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0" >
					<tr>
					  <td width="16"><img src="images/top_lef.gif" width="16" height="16"></td>
					  <td height="16" background="images/top_mid.gif"><img src="images/top_mid.gif" width="16" height="16"></td>
					  <td width="24"><img src="images/top_rig.gif" width="24" height="16"></td>
					</tr>
					<tr>
					  <td width="16" background="images/cen_lef.gif"><img src="images/cen_lef.gif" width="16" height="11"></td>
					  <td bgcolor="#F7F8FB"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="3" >
						  <tr>
							<td width="59%" valign="top"><p class="redhead">Important Instructions</p>
							</td>
							<td width="11" height="100%" rowspan="4" align="center" valign="middle" background="images/center_line.gif"><img src="images/center_line.gif" width="11" height="11"></td>
							<td width="39%" valign="top"><p class="redhead">Web Counselling</p>
						  </tr>
						  <tr valign="top">
							<td width="59%">
							<table class="txt_12">
<!--							
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">Candidate has to register himself and generate a password to exercise options.</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">Candidate can exercise options from any Internet Cafe.</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">Options can be prioritized on a <a href="#" class="anchorclass" rel="submenu1" style="color:#3C23AF; font-weight:bold;">Manual Option Form </a>available.</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">Can attend counselling in any one of the <a href="#" class="anchorclass" rel="submenu2" style="color:#3C23AF; font-weight:bold;">Help Line Centres</a> mentioned in the Notification.</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">After <a href="#" class="anchorclass" rel="submenu3" style="color:#3C23AF; font-weight:bold;">Certificate Verification</a>, the candidate has to Confirm the options.</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">Candidate who confirms his priority of options in the Help Line Centers only will be eligible for Allotment of Seats.</td></tr>															
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">Visit the website for payment details.<?php //echo md5("abcdefgh1234");?></td></tr>															
-->								
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">Candidate has to get the certificates verified at Help Line Center before he/she can start exercising options.</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">One Time Passowrd(OTP) would be sent to registered mobile number.</td></tr>																
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">Exercise weboptions as per the schedule.</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">Allotments will be made in the order of preference of options and exercise utmost care while entering options.</td></tr>								
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left">Candidate can download the provisional allotment order and report to the concerned college.</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left"><a href="doc/instruction.pdf" target="_blank">Procedure of Web Counseling </a></td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0_blue.gif" /></td><td align="left"><a href="doc/web_procedure.pdf" target="_blank">Procedure to excercise Web options </a></td></tr>
							</table><div id ="temp"></div>
							<script>//alert(hex_md5("abcdefgh1234"));			//document.getElementById('temp').innerHTML = hex_md5("abcdefgh1234");</script>
							</td>
							<td width="39%" align="center">
							<table class="txt_12">

								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0.gif" /></td><td align="left"><a href="allotdet.php"> Web Allotments</a>&nbsp; <img src="images/new.gif" />&nbsp; &nbsp;</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0.gif" /></td><td align="left"><a href="doc/notification_1.pdf" target="_blank">Detailed Notification</a>&nbsp;&nbsp;&nbsp; &nbsp;  </td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0.gif" /></td><td align="left"><a href="doc/state_ranks_nata.pdf" target="_blank">State Ranks List</a>&nbsp;<img src="images/new.gif" />   &nbsp;&nbsp;&nbsp; &nbsp;  </td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0.gif" /></td><td align="left"><a href="doc/instructions.pdf" target="_blank">Instructions to Candidate</a>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  </td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0.gif" /></td><td align="left"><a href="doc/web_procedure.pdf" target="_blank">Procedure to Excercise Web options</a>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  </td></tr>
<!--
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0.gif" /></td><td align="left"><a href="webopt.php"> Web Options</a>&nbsp; <img src="images/new.gif" />&nbsp; &nbsp;</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0.gif" /></td><td align="left"><a href="javascript:AjaxCall('webopt.php','');"> Web Counselling</a>&nbsp; <img src="images/new.gif" />&nbsp; &nbsp;</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0.gif" /></td><td align="left"><a href="javascript:AjaxCall('weblinks.php','');"> Web Counselling</a>&nbsp; <img src="images/new.gif" />&nbsp; &nbsp;</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0.gif" /></td><td align="left"><a href="doc/go_swd_age.pdf" target="_blank">G.O. with regard to Age</a>&nbsp;<img src="images/new.gif" />&nbsp; &nbsp;</td></tr>
								<tr><td align="left"><img src="images/dhtmlxmenu_rdbt_0.gif" /></td><td align="left"><a href="vacancy.php">Vacancy Position</a>&nbsp; <img src="images/new.gif" />&nbsp; &nbsp;</td></tr>
-->
							</table>
							
							</td>
						  </tr>
						  <tr>
							<td width="49%">&nbsp;</td>
							<td width="49%" align="center" valign="top">&nbsp;</td>
						  </tr>
					  </table>    </td>
					  <td width="24" background="images/cen_rig.gif"><img src="images/cen_rig.gif" width="24" height="11"></td>
					</tr>
					<tr>
					  <td width="16" height="16"><img src="images/bot_lef.gif" width="16" height="16"></td>
					  <td height="16" background="images/bot_mid.gif"><img src="images/bot_mid.gif" width="16" height="16"></td>
					  <td width="24" height="16"><img src="images/bot_rig.gif" width="24" height="16"></td>
					</tr>
				  </table>
				</td>
			  </td>
			  <tr>
			    <td class="whitebg"><br />

				<table width="930" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td width="11"><img src="images/quote_leftbar.png" width="11" height="28" /></td>
					<td width="908" class="quotebg">
						<marquee scrollamount="3" scrolldelay="50" onmouseover="this.stop()" onmouseout="this.start()">
							<span class="quotetext" style="font-weight:bold;font-size:16px;">

								<span style="color:#f10000; size:16px;">Flash News :: Web Allotments released on 27-09-2015 ||  Help Desk :&nbsp;96189 05368 &nbsp; 
<!--								

									Fresh candidates can attend for Certificate Verification on 21<sup>st</sup> and 22<sup>nd</sup> September, 2010&nbsp;&nbsp;									 								
-->									
<!--									
-->
							</span>
						</marquee>							
						</td>
					<td width="11"><img src="images/quote_rightbar.png" width="11" height="28" /></td>
				  </tr>
			    </table>
				
				</td>
			  </tr>
			  <tr>
			    <td class="whitebg">&nbsp;
				</td>
			  </tr>
			  <tr>
			    <td class="whitebg">

				  <table width="910" border="0"  align="center" cellpadding="0" cellspacing="0" class="notificationborder1"  height="20" >
					  <tr>
						<td class="notificationbg">
						 <table width="910" border="0" align="center" cellpadding="0" cellspacing="0">
							<tr valign="top">
							<tr>
							  <td height="6" colspan="2"  align="center" class="rightlinks"	>HELP DESK :: For queries related to Web Counselling mail to apnata2015@gmail.com      </td>
							</tr>
						</table>
					  </td>
					 </tr>
				</table>
				</td>
			  </tr>
			  <tr>
			    <td class="whitebg">&nbsp;
				</td>
			  </tr>

             </table>
			</div>			 
			</td>
		  </tr>
		  <tr>
			<td height="12" align="left" valign="top" colspan="2"><img src="images/bottom-page.png" width="950" height="8" /></td>
		  </tr>
		  <tr>
		  	<table width = "950" cellpadding="0" cellspacing="0" border="0">
   			 <tr>
			  <td height="30" align="left" class="copyrt"><a href="index.php" class="copyrt">Home</a>  | <a href="#" class="copyrt">Entrance Tests</a>  | <a href="#" class="copyrt">Related Links</a> | <a href="javascript:AjaxCall('disclaimer.php','');" class="copyrt">Disclaimer</a> <br />
			  * Best viewed in 1024 by 768 resolution * </td>
			  <td height="30" align="center" class="copyrt"><!--Site Hit Counter<div id="counter"><img src="images/5.jpg" /><img src="images/4.jpg" /><img src="images/3.jpg" /><img src="images/3.jpg" /><img src="images/8.jpg" /></div>since 06-06-09--></td>
			  <td height="30" align="right" class="copyrt"><!--Designed and Developed by Surya Consultancy Services Ltd.--></td>
			 </tr>
			</table>  
		  </tr>
		  <tr>
			<td colspan="2" align="center" >&nbsp;</td>
		  </tr>
    	</table>

		</td>
	  </tr>
</table>
<!--
<div id="submenu1" class="anylinkcss">
<ul>
<li><a href="doc/ECET_HLC.xls" target="_blank">List of Help Line Centers</a></li>
<li><a href="doc/COURINFO.xls" target="_blank">List of Courses</a></li>
<li><a href="doc/ECET_MANUAL_OPTION_FORM.xls" target="_blank">Manual Option Form</a></li>
<li><a href="doc/underconstruction.php" target="_blank">Certificates to be verified</a></li>
<li><a href="doc/counsellingprocedure.doc" target="_blank">Counselling Procedure</a></li>
</ul>
</div>
<div id="submenu2" class="anylinkcss">
<ul>
<li><a href="doc/ECET_HLC.xls" target="_blank">List of Help Line Centers</a></li>
<li><a href="doc/COURINFO.xls" target="_blank">List of Courses</a></li>
<li><a href="doc/ECET_MANUAL_OPTION_FORM.xls" target="_blank">Manual Option Form</a></li>
<li><a href="doc/underconstruction.php" target="_blank">Certificates to be verified</a></li>
<li><a href="doc/counsellingprocedure.doc" target="_blank">Counselling Procedure</a></li>
</ul>
</div>
<div id="submenu3" class="anylinkcss">
<ul>
<li><a href="doc/ECET_HLC.xls" target="_blank">List of Help Line Centers</a></li>
<li><a href="doc/COURINFO.xls" target="_blank">List of Courses</a></li>
<li><a href="doc/ECET_MANUAL_OPTION_FORM.xls" target="_blank">Manual Option Form</a></li>
<li><a href="doc/underconstruction.php" target="_blank">Certificates to be verified</a></li>
<li><a href="doc/counsellingprocedure.doc" target="_blank">Counselling Procedure</a></li>
</ul>
</div>

<script type="text/javascript">
//anylinkcssmenu.init("menu_anchors_class") //call this function at the very *end* of the document!
anylinkcssmenu.init("anchorclass")
</script>
-->
</body>
</html>
