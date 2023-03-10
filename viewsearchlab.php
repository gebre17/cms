
	<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<HTML>
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
<style>
</style>
</head>
<body>

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
$acid=$row['ACC_ID'];
}
     ?>
<b> <a href="logout.php?loged">Logout</a>  </b>    
			</li>	
				</p>
				<?php
				}
				else{
				header("location:login.php");
				}
				?>
				
				
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
<img src="img/pr.jpg" width="270px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
<img src="img/pr1.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="background-color:#bdb76b;">
		
		
		 <form  action="viewsearchlab.php" method="POST">
		 
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
               <tr><td><pre><font color="red">*</font><label>Enter/select Date:</label></pre></td><td>
				<?php 
														 $res=mysql_query("select * from clinicmanamentsystem.labresult");
	                                                     echo'<select style="margin-top:-53px;" name="Client_ID">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:40px;width:220px;margin-top:-5px;'value='".$row['TreatmentDate']."'>".$row['TreatmentDate']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
													


    <td> <input type="submit" id="button" class="button" name="search" value="view Result" style="width:100%;height:40px;color:red;text-transform:capitalize;Font-weight:bolder;font-size:20px;border-top:6px;color:#0f0f0f;background:#5d8aa8;title:Enter the patient MRN;" /><td><a href = 'doctor.php?key='><font style='color:black;font-size:26px;float:right;border-radius:10px;margin-right:-200px;height:40px;background:#778899;margin-top:-37px;width:90px;'>Cancel</font></a></td>  		          
	</td>
	
    <td> <input type="submit" id="button" class="button" name="viewdetail" value="view Detail" style="width:127%;height:40px;color:red;text-transform:capitalize;Font-weight:bolder;font-size:20px;border-top:6px;color:#0f0f0f;margin-left:-35px;background:#5d8aa8;title:Enter the patient MRN;" /><td><a href = 'doctor.php?key='> 		          
	</td>
	</tr>	
 </form></table>
 <?php
   if(isset($_POST['search']))
   {
   // l,account a 
   $sql=mysql_query("select*from labresult where TreatmentDate='$_POST[Client_ID]'");
   	echo" <table border='6' style='width:350px; margin-top:-60px;margin-left:30px;height:70px;background-color:;border:13px solid greeen;border-radius:10px;'float:malign='center'>
<tr>
<th colspan='1000000'style= 'font-size:26px; background:silver;color:green;'>Lab Result Information <a href = 'viewsearchlab.php?key='><font style='color:red;font-weight:30px;float:right;background:;font-size:20px;width;'>X</font></a></th></tr>
<tr>
<th>CardNumber</th>
<th>ACC_ID</th>
<th>TreatmentResult</th>
<th>TreatmentDate</th>
</tr>";
	while($row=mysql_fetch_array($sql)){
$cn = $row['CardNumber'];	
 $acid=$row['ACC_ID'];	   
   $res=$row['TreatmentResult'];	
  $dat=$row['TreatmentDate'];	 
	
	if($_POST['Client_ID']=="")
	{
	echo "<img src='IMG/error.png' height='8%' align='bottom'><font type='Verdana' size='4' color='red'>Please enter the patient_id!!</font>";
	 echo' <meta content="10;searchdrug.php" http-equiv="refresh" />'; 
	}
	//echo "<th colspan='2'>"."Drug Detail"."</th>";
	 print ("<tr>");
   print ("<td>" .$cn. "</td>");	
   print ("<td>" .$acid. "</td>");	
   print ("<td>" .$res. "</td>");
     print ("<td>" .$dat. "</td>");
	 }
	//echo "<td height='17' style='height:17px;width:30%;border-radius:5px;float:left'>"."<div align='left'></font>Drug Name: </div></td>";
	//echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_type' id='txt_type' value='$dname' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	
	
echo' <meta content="50;viewsearchlab.php" http-equiv="refresh" />'; 
	echo "</table>";
	 }
	else
	{
//print "<h3><img src='IMG/error.png'  width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>The patient CardNumber was not exist!</font></h3>";
	  //echo' <meta content="10;searchdrug.php http-equiv="refresh" />'; 
	}
  

 ?>	
 <!--  view detaial result         -->
<?php
   if(isset($_POST['viewdetail']))
   {
   	echo" <table border='6' style='width:350px;margin-top:-60px;margin-left:30px;height:90px;background-color:;border:13px solid greeen;border-radius:10px;'float:malign='center'>
<tr>
<th colspan='1000000'style= 'font-size:26px; background:silver;color:green;'> All Lab Result Informations <a href = 'viewsearchlab.php?key='><font style='color:red;font-weight:30px;float:right;background:;font-size:20px;width;'>X</font></a></th></tr>
<tr><th>CardNumber</th>
<th>ACC_ID  </th>
<th>TreatmentResult </th>
<th>TreatmentDate </th>
</tr>";
// l,account a WHERE l.CardNumber= a.ACC_ID AND a.ACC_ID='$acid'
   $sqls="SELECT*FROM labresult";
	$ree=mysql_query($sqls);
	while($row=mysql_fetch_array($ree)){
$cn = $row['CardNumber'];	
 $acid=$row['ACC_ID'];	   
   $res=$row['TreatmentResult'];	
  $dat=$row['TreatmentDate'];		
	//echo "<th colspan='2'>"."Drug Detail"."</th>";
	 print ("<tr>");
   print ("<td>" .$cn. "</td>");	
   print ("<td>" .$acid. "</td>");	
   print ("<td>" .$res. "</td>");
     print ("<td>" .$dat. "</td>");
	//echo "<td height='17' style='height:17px;width:30%;border-radius:5px;float:left'>"."<div align='left'></font>Drug Name: </div></td>";
	//echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_type' id='txt_type' value='$dname' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	 }
	
echo' <meta content="50;viewsearchlab.php" http-equiv="refresh" />'; 
	echo "</table>";
	}
  

 ?>	
 </form>
 <form  action="viewsearchlab.php" method="POST">		
</form>	
</td><!--center end-->



<p>

    </section>

                                                                        
</body>
	<?php include("footer.php");?>

</html>	 
