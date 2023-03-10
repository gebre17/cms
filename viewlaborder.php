<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>clinic management system</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
<link rel="stylesheet" type="text/css" href="csss.css">
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
th{height:10px; font-size:25px;color:blue;}
</style>
</head>
<div id="body">
<div id="content">
<?php include("header.php");?>
<div id="headerz">
<table width="1150px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" font-size="10px" margin-top="-15">
	<p><li>
				  <a href="vieweachlaborder.php">VIEW Each ORDER</a>
				<a href="viewlaborder.php">VIEW LAB ORDER</a>
             <a href="patlabresult.php">ADD LAB RESULT</a>
			  <a href="viewregipatient.php">VIEW registered patient</a>
			   <a href="labhistory.php">view LAB history</a>
			 <a href="changeuserpassword.php">Change Password</a>
<?php
if(isset($msg)){
$var=(ucfirst($msg));
   $query = "SELECT * FROM account WHERE UserName= '$var'";
   $result_set=mysql_query($query,$con);
while($row=mysql_fetch_array($result_set)){
$first=$row['FirstName'];
$last=$row['LastName'];
}
     ?>
<b> <a href="login.php?loged">Logout</a>  </b>    
			</li>	
				</p>
				<?php
				}
				else{
				header("location:login.php");
				}
				?>
				
			</li>	
				</p>
	  </div>
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
<img src="img/doct.jpg" width="265px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
  <img src="img/lab.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="background-color:white;">
  
<?php
$result = mysql_query("SELECT * FROM clinicmanamentsystem.labrequist l, clinicmanamentsystem.bill b where l.CardNumber=b.CardNumber and status='Lab Test payment' ");
echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th>CardNumber</th>
<th>User_ID</th>
<th>BloodTest </th>
<th>UrinTest</th>
<th>FacesTest </th>
<th>RequistDate </th>
<th align = 'center' width = '1'><a href = 'labtech.php?key='><font style='color:blue;font-weight:30px;float:right;margin-top:-4px;background:lightblue;height:120px;width;'>close</font></a></td>
</tr>";
while($row = mysql_fetch_array($result))
	
  {
$ctrl = $row['CardNumber'];	
  print ("<tr>");
   print ("<td>" . $row['CardNumber'] . "</td>");
 print ("<td>" . $row['ACC_ID'] . "</td>");   
   print ("<td>" . $row['BloodTest'] . "</td>");	
   print ("<td>" . $row['UrinTest'] . "</td>");	
      print ("<td>" . $row['FacesTest'] . "</td>");
	     print ("<td>" . $row['RequistDate'] . "</td>");

		
?>
		</tr>
<?php
  }
 print( "</table>");
mysql_close($con);
?>
</div>
</td>
<p>
</section>
<?php include("footer.php");?>

</div>
</div>
                                                                        
</body>
</html>

