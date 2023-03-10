<?php   
 session_start();
 include("config/config.php");
 //echo "User".$_SESSION['user'];
 if(isset($_SESSION['emp_id']))
 {
  $username=$_SESSION['emp_id'];
 } else {
 ?>
 <?php
 }
 ?>


<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>UOG Hospital</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />
       <link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />el="stylesheet" type="text/css" href="index's_file/globalcss.css" />

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
#headerz li a {
	color: white;
	font-size: 12px;
	padding: 8px ;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
}
#headerz li a:hover, #headerz li.selected a {
	background: url(img/hover.png);
	color: red;
	text-transform: lowercase;
	font-size: 24px;
	padding: 10px  ;
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
#contentarea1{
background:#bdb76b;
width: 583px;
float: center;
height: 597px;
	
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
					<a href="viewlabresult1.php">view lab result</a>
					
					<a href="refer.php">refer patient</a>
					
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="viewpatdrug.php">update patient info</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="viewcomment.php">view comment</a>
					<a href="changeuserpassword.php">Change Password</a>
					<a href="logout.php" onclick="islogout()"">Logout</a>  
</li> </p>      		 
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
<img src="img/doc.jpg" width="270px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
 <img src="img/55yu.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="font-family:Lucida Calligraphy;color:black;background-color:white;">
	 
<br><br><br>
  
  <?php
$ctrl = $_REQUEST['key'];
$query="SELECT * FROM labresult where Patient_id='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==1){
while($row=mysql_fetch_array($result)){
$row0=$row[0];
$row1=$row[1];
$row2=$row[2];
$row3=$row[3];
$row4=$row[4];
$row5=$row[5];
$row6=$row[6];
//$row7=$row[7];

}
?>
  <br><br>
 <table valign='top' align="center" style="width:300px;height:350px;border-radius:16px;border:2px solid blue;background-color:cyan;">
<tr>
<td></td>
<td align="right"><a href="viewlabresult1.php"><img src="IMG/close.jpg" title="Close"></a></td></tr>
 <tr>
<td><font face="times new roman" color="#336699" size="3"><b>Patient ID:</b></font></td><td><?php echo $row0?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>First Name:</b></td><td><?php echo $row1?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Last Name:</b></td><td><?php echo $row2?></td>
</tr>
<td><font face="times new roman" color="#336699" size="3"><b>Sex:</b></td><td><?php echo $row3?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Age:</b></td><td><?php echo $row4?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Treatment Date:</b></td><td><?php echo $row5?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Diagnosis Info:</b></td><td><?php echo $row6?></td>
</tr>
<!--<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Photo:</b></td>
<td><img width="100px" height="100px" src="<?php echo $row9;?>"></td>
</tr>-->
</table>
 
 <?php
}
	  

?>



</div>
    


</td><!--center end-->


<p>

    </section>
<div id="footer" align="center">  <font color="#fef943">&copy;All Rights Reserved UOG Hospital patient record management system 2017.</font></div>

</div>
</div>
                                                                        
</body>
</html>