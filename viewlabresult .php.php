<?php   
 session_start();
 include("config/config.php");
 if(isset($_SESSION['emp_id']))
 {
  $username=$_SESSION['emp_id'];
 } else {
 ?>
 <?php
 }
 ?>


 
<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>UOG Hospital</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />
<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "../https@ssl.\default.htm" : "../www./default.htm");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<style>
}-->
#header {
background: #800020;
}
#headerz {
background: url(img/esa.jpg);
}
.login{
background:#778899;
}
#footer {
background: url(img/esa.jpg);
font-family: Lucida Calligraphy;
}
#content {
background:#778899;
}
#body{
width:1400px;
height:790px;
margin-left:-8px;
background: black;
}
#left_colomn{
background: #778899;
width: 280px;
float: left;
height: 600px;
}
#right_colomn{
background:#778899;
width: 280px;
float: right;
height: 600px;
}
#contentarea1{
background:#bdb76b;
width: 583px;
float: center;
height: 597px;
	
}

#center{
 border-radius:30px 0px 0px 0px;
-moz-border-radius: 20px 20px 0px 0px;
border-color:#ccccff;
border-style:groove;
margin-left:0px;
margin-top: -125px;
background: cyan;
width: 140px;
float: left;
height: 65px;
}
#center img{
 border-radius:30px 0px 0px 0px;
-moz-border-radius: 20px 20px 0px 0px;
}

#zz{
background: url(img/esa.jpg);
}
#yy{
width: 263px;
float: left;
height: 590px;
margin-top:5px;
margin-left:10px;
border-color:#ccccff;
border-style:groove;
}
</style>
</head>
<div id="body">
<div id="content">

<div id="header"style="background-color: #800020;">
<img src="img/60.jpg" width="60" height="30">
<h1 style="font-family:Lucida Calligraphy;"> UOGHP Record Management system</h1>
</div>
<div id="headerz">
<table width="1150px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" font-size="10px" margin-top="-15">
	<p><li>
			<a href="appointmentdate.php">set appt date</a>
					  
			     	<a href="drugorder.php">order drug</a>
				
				    <a href="labresult.php">Order Lab</a>
					<a href="viewlabresult.php">view lab result</a>
					
					<a href="refer.php">refer patient</a>
					
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="viewpatdrug.php">update patient info</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="logout.php" onclick="islogout()"">Logout</a>
				
			</li>	
				</p>
	  </div>
	  </td>

</tr>
</table>
				
		</div>

 <section class="container">

 <div id="center">
<img src="img/UU.jpg" width="140" height="70">
</div>
 
<div id="left_colomn">
<div id="yy">
<img src="img/23.jpg" width="265px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
  <a href="https://accounts.google.com/ServiceLogin?elo=1" target="_blank"><img src="img/link/gmail.jpg" width="280" height="580"></a><br/>  
</div>
</div>
	 <div class="login" style="background-color:white;">
  <br><br><br><br><br><br><br>
<?php
$result = mysql_query("SELECT * FROM labresult");
echo" <table border='5' style='width:370px;height:150px;background-color:cyan;border:3px solid indigo;border-radius:10px;' align='center'>
<tr>
<th>Patient ID</th>
<th>View Result</th>
</tr>";
while($row = mysql_fetch_array($result))
	
  {
$ctrl = $row['Patient_id'];	
  print ("<tr>");
   print ("<td>" . $row['Patient_id'] . "</td>");	
print("<td align = 'center' width = '1'><a href = 'viewlabresult.php?key=".$ctrl."'><img width='25px' height='25px' src = 'IMG/aaa.png' title='View Lab Result'></img></a></td>")
		
?>
		</tr>
<?php
  }
 
print( "</table>");
mysql_close($conn);
?>

</div>
    


</td>




<p>

    </section>
<div id="footer" align="center">  <font color="#fef943">&copy;All Rights Reserved UOG Hospital patient record management system 2017.</font></div>

</div>
</div>
                                                                        
</body>
</html>

