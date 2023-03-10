<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
 <script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='viewcomment.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>



<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>clinic management system</title>
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
<link rel="stylesheet" type="text/css" href="csss.css">

<style>

</style>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
 
 
</head>
<div id="body">
<?php include("header.php");?>
<div id="headerz">
<table width="1150px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" font-size="10px" margin-top="-15">
	<p><li>
		<b> <a href="dvieweachpatient.php">view each patint</a></b>
	<b><a href="viewregpatient.php">view patient</a></b> 
        <b> <a href="appointmentdate.php">set appt date</a></b> 
		 <b>  <a href="labresult.php">Order Lab</a></b>
					 <b> <a href="viewsearchlab.php">view each lab report</a></b>
				<b> <a href="viewlabresult1.php">view lab result</a></b> 
			     <b> 	<a href="drugorder.php">order drug</a></b>  
					<b> <a href="refer.php">add dignosis Result</a></b>
					<b> <a href="doctorhistory.php">view History</a></b>
					<b> <a href="viewcomment.php">view Nurse result</a></b> 
					<b> <a href="changeuserpassword.php">Change Password</a></b> 
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
  <img src="img/55yu.jpg" width="280" height="580"></a><br/>  
</div>
</div>
	 <div class="login" style="font-family:Lucida Calligraphy;color:black;background-color:white;">
	 
<?php
$result = mysql_query("SELECT * FROM nurcingservice");
echo" <table border='10' margin-top:-100px;style='width:400px;height:190px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th>CardNumber</th>
<th>UserID </th>
<th>Temprature</th>
<th>Weight</th>
<th>BloodType </th>
<th>DateOfTreatment </th>

<th align = 'center' width = '1'><a href = 'doctor.php?key='><font style='color:blue;font-weight:30px;float:right;margin-top:-4px;background:lightblue;height:120px;width;'>close</font></a></td>
</tr>";
while($row = mysql_fetch_array($result))
	
  {
$ctrl = $row['CardNumber'];	
  print ("<tr>");
   print ("<td>" . $row['CardNumber'] . "</td>");	
   print ("<td>" . $row['ACC_ID'] . "</td>");	
   print ("<td>" . $row['Temprature'] . "</td>");	
      print ("<td>" . $row['Weight'] . "</td>");
	     print ("<td>" . $row['BloodType'] . "</td>");
		     print ("<td>" . $row['DateOfTreatment'] . "</td>");

		
?>
		</tr>
<?php
  }
 
print( "</table>");
mysql_close($con);
?>

</div>
    </section>
	

                                                                        
</body>
<?php include("footer.php");?>
</html>