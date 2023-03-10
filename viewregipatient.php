<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
 <script>
 </script>
 <?php
 
 ?>

<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
   <style>
 th{
 color:black;
 background:#FFE4B5;
 }
 img{
 height:1px;
 }
</style>
<title>BD  K CLINIC MGT SYSTEM</title>
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
<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='viewitem.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
</head>
<div id="body">
<?php include("header.php");?>
<div id="headerz">
<table width="1150px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" font-size="10px" margin-top="-15">
	<p><li>
				  <a href="vieweachlaborder.php">VIEW Each ORDER</a>
	<a href="patlabresult.php">ADD LAB RESULT</a>
			 <a href="viewlaborder.php">VIEW LAB ORDER</a>
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
	 <div class="login" style="font-size:16px;color:black;background-color:white;">
	 
<br><br><br>  
<?php 
$result = mysql_query("SELECT * FROM patientregistration ORDER BY RegistrationDate ASC");
echo" <table border='5' style='width:520px;height:36px;background-color:white;margin-top:-90;border:6px solid black;border-radius:10px;' align='center'>
<tr>
<th>Card Number</th>
<th>First Name</th>
<th>Middle  Name</th>
<th>Last Name</th>
<th>Sex</th>
<th>Phone Number</th>
<th>Nationality</th>
<th>Birth Date</th>
<th>Reg Date</th>
<th>status</th>
<th>photo</th>
<th align = 'center' width = '1'><a href ='labtech.php?key='><font style='color:red;font-weight:40px;float:right;margin-top:-2px;background:;border-radius:1px;height:;width;font-size:40px;'>X</font></a></td></tr>";
while($row = mysql_fetch_array($result))	
  {
  $cardnum = $row['CardNumber'];
$fn = $row['FirstName'];
$mname=$row['MiddleName'];
$lname=$row['LastName'];
$sex=$row['Sex'];	
$phone = $row['PhoneNumber'];
$nation = $row['Nationality'];
$bdate = $row['BirthDate'];
$regdate = $row['RegistrationDate'];
$status=$row['status'];
$photo = $row['Photo'];
  print ("<tr>");
   print ("<td>" .  $cardnum . "</td>");
   print ("<td>" . $fn . "</td>");	
    print ("<td>" . $mname . "</td>");	
	print ("<td>" . $lname . "</td>");
	print ("<td>" . $sex . "</td>");
	print ("<td>" . $phone . "</td>");
	print ("<td>" . $nation . "</td>");
	print ("<td>" . $bdate . "</td>");
	print ("<td>" . $regdate . "</td>");
	print ("<td>" . $status . "</td>");			
	print ("<td>"."<img src=".$photo.">" . "</td>");
		print ("<td style='background:lightblue;width:1px;'>"."</td>");

	}
?>		
		</tr>
<?php
print( "</table>");
mysql_close($con);
?>

</div>
    


</td><!--center end-->

<p>

    </section>
<?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>
