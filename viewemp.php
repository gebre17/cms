<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>BD K Clinic Management</title>
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
   var d = confirm('Are you sure Do you want to Delete ?');
   if(!d)
   {
    alert(window.location='viewuser.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
<style>
th{
background:orange;
color:blak;
font-size:16px;
height:20px;
}
</style>

</head>
<div id="body">
<?php include("header.php");?>
<div id="headerz">
<table width="1150px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" font-size="10px" margin-top="-15">
	<p><li>
					  
			     	<a href="adduser.php">Create Account</a>		  
			     	<a href="viewuser.php">Manage Account</a>
					<a href="regemp.php">Register employee</a>
					<a href="viewemp.php">View employee</a>
					<a href="adminreport.php">Users Report</a>
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
<img src="img/well.jpg" width="265px" height="290">
<img src="img/well.png" width="280" height="290"> 
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
<img src="img/4.jpg" width="265px" height="300"> 
 <img src="img/admin.png" width="265px" height="285"> 
</div>
</div>
	 <div class="login" style="background-color:white;">
  <br><br><br><br><br><br><br>
<?php
$result = mysql_query("SELECT * FROM employee");
echo" <table border='5' style='width:520px;height:360px;background-color:white;margin-top:-260;border:3px solid blue;border-radius:10px;' align='center'>
<tr>
<th>Usert ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Age</th>
<th>Sex</th>
<th>Phone Number</th>
<th>Nationality</th>
<th>Kebelee</th>
<th>Zone</th>
<th>City</th>
<th>Position</th>
<th align = 'center' width = '1'><a href ='admin.php?key='><font style='color:red;font-weight:40px;float:right;margin-top:-15px;background:pink;border-radius:1px;height:;width;font-size:40px;'>X</font></a></td></tr>";
while($row = mysql_fetch_array($result))
	
  {
  $UID = $row['UserID'];
$fn = $row['FirstName'];
$lname=$row['LastName'];
$age=$row['Age'];
$sex=$row['Sex'];	
$phone = $row['PhoneNumber'];
$nation = $row['Nationality'];
$kebele = $row['Kebele'];
$zone = $row['Zone'];
$CITY = $row['City'];
$posi = $row['Specialization'];

  print ("<tr>");
   print ("<td>" . $UID. "</td>");
   print ("<td>" . $fn . "</td>");	
    print ("<td>" . $lname . "</td>");	
	print ("<td>" . $age . "</td>");
	print ("<td>" . $sex . "</td>");
	print ("<td>" . $phone . "</td>");
	print ("<td>" . $nation . "</td>");
	print ("<td>" . $kebele . "</td>");
	print ("<td>" . $zone . "</td>");
	print ("<td>" . $CITY . "</td>");
	print ("<td>" . $posi . "</td>");
	print ("<td style='background:lightblue;width:1px;'>"."</td>");
	/*
print("<td align = 'center' width = '1'><a href = 'viewempdetail.php?key=".$UID."'><img width='1px' height='5px' src = 'IMG/aaa.png' title='View Detail'></img></a></td>
		
		<td align = 'center' width = '1'><a href = 'deleteemp.php?key=".$UID."'><img width='1px' height='1px' src = 'IMG/remove.png' onclick='isdelete();' title='Delete'></img></a></td>")
	*/	
?>		
		</tr>
<?php
  }
 
print( "</table>");
mysql_close($con);
?>

</div>
    


</td><!--center end-->





    </section>
	<?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>

