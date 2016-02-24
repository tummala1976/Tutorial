<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ed.CET</title>
</head>
<?php
require_once("includes.php");
dispAlertMsg($webserv_vacancy_running,$webserv_vacancy_msg);
?>
<frameset rows="20%,*">
   <frame src="vachead.php?<?php echo $_SERVER['QUERY_STRING']; ?>" frameborder="0" scrolling="no" noresize="noresize"/>
   <frame src="vac1.php?<?php echo $_SERVER['QUERY_STRING']; ?>" frameborder="0" noresize="noresize" style="position:relative; top:-20px;"/>
</frameset><noframes></noframes>
</html>
