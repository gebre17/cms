<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>BD K clinic MGT System</title>
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
$empid=$row['ACC_ID'];
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
  <img src="img/55yu.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="background-color:#e6e8fa;">
	 
    <FORM ACTION="doctorhistory.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">
<center>
<table  bgcolor="#ffffff" style="border:5px solid lightblue;margin-top:-90px;background-color:#e6e8fa;width:800px;border-radius:16px;height:20px;">
<tr>
<td colspan="" align="">
<input type="submit" value="Drug order history" name="viewdrughistory" style="width:200px;font-size:16px;color:white;background:#5d8aa8;"></input></td> </h1></b></font></b><a href ='doctor.php?key='><font style='color:red;font-weight:40px;float:right;background:#D3D3D3;border-radius:px;margin-top:-64px;margin-right:-255px;height:30px;width;font-size:30px;'>X</font></a></td></h1></b></font></b>
<td><input type="submit" value="Lab order history" name="labhistory" style="color:white;font-size:16px;width:200px;background:#5d8aa8;"></input></td>
<td><input type="submit" value="Diagnoisis  history" name="diagnosishistory" style="color:white;font-size:16px;width:200px;background:#5d8aa8;"></input></td> 
<td><input type="submit" value="App history" name="appointmenthistory" style="color:white;font-size:16px;width:200px;background:#5d8aa8;"></input></td> 
</tr><tr><td style="margin-top:-100px;">
<style="margin-top:-100px;"><font color="red">*</font>Visit history by date:</td><td>
				<?php //drug
														 $res=mysql_query("select*from clinicmanamentsystem.drugorder d,clinicmanamentsystem.account a where d.ACC_ID=a.ACC_ID AND a.ACC_ID='$empid'");
	                                                     echo'<select name="drug1"style="height:30px;width:60px;margin-top:-30px;">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:30px;width:60px;'value='".$row['OrderDate']."'>".$row['OrderDate']."</option>";
														        }
														  echo'</select>';
													
														?>
														
														</td><td>
														<input type="submit" value="drug" name="drug" style="color:white;font-size:12px;width:70px;margin-left:-130px;margin-top:-110px;height:30px;background:#5d8aa8;"></input></pre>												
</td>
<td>
				<?php 
														 $res=mysql_query("SELECT * FROM clinicmanamentsystem.labrequist l,clinicmanamentsystem.account a where l.ACC_ID=a.ACC_ID AND a.ACC_ID='$empid'");
	                                                     echo'<select name="labdates"style="height:30px;width:60px;margin-top:-30px;margin-left:-250px;">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:30px;width:60px;'value='".$row['RequistDate']."'>".$row['RequistDate']."</option>";
														        }
														  echo'</select>';
													
														?>
														
														</td><td>
														<input type="submit" value="lab" name="lab" style="color:white;font-size:12px;width:70px;margin-left:-380px;margin-top:-110px;height:30px;background:#5d8aa8;"></input></pre>												
</td>
<td>
				<?php //diagnosis
														 $res=mysql_query("SELECT * FROM clinicmanamentsystem.diagnosis d,clinicmanamentsystem.account a where d.ACC_ID=a.ACC_ID AND a.ACC_ID='$empid'");
	                                                     echo'<select name="diagnosiss"style="height:30px;width:60px;margin-top:-30px;margin-left:-300px;">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:30px;width:60px;'value='".$row['DateOfReg']."'>".$row['DateOfReg']."</option>";
														        }
														  echo'</select>';
													
														?>
														
														</td><td>
														<input type="submit" value="diagnosis" name="diagnosdate" style="color:white;font-size:12px;width:70px;margin-left:-240px;margin-top:-110px;height:30px;background:#5d8aa8;"></input></pre>												
</td>
<td>
<td>
				<?php //appointment
														 $res=mysql_query("SELECT * FROM clinicmanamentsystem.appointment d,clinicmanamentsystem.account a where d.ACC_ID=a.ACC_ID  AND a.ACC_ID='$empid'");
	                                                     echo'<select name="apps"style="height:30px;width:60px;margin-top:-30px;margin-left:-160px;">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:30px;width:60px;'value='".$row['AppointmentDate']."'>".$row['AppointmentDate']."</option>";
														        }
														  echo'</select>';
													
														?>
														
														</td><td>
														<input type="submit" value="App" name="Appoint" style="color:white;font-size:12px;width:70px;margin-left:-90px;margin-top:-110px;height:30px;background:#5d8aa8;"></input></pre>												
</td>
</tr>
 </div>
</FORM>
 
          </table>
	 <?php
if(isset($msg)){
$var=(ucfirst($msg));
   $query = "SELECT * FROM account WHERE UserName= '$var'";
while($row=mysql_fetch_array($result_set)){
$EID=$row['ACC_ID'];

}
   $result_set=mysql_query($query,$con);
}
?>
	 
<?php
//drugorder history
if(isset($_POST['viewdrughistory'])){
//d,clinicmanamentsystem.bill b,clinicmanamentsystem.employee e where d.CardNumber=b.CardNumber=e.UserID AND status='Drug Payment'
$result = mysql_query("select*from clinicmanamentsystem.drugorder d,clinicmanamentsystem.account a where d.ACC_ID=a.ACC_ID AND a.ACC_ID='$empid'");
echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th colspan='10000000000000'style='color:blue; background:silver;font-size:28px;'><center>Patients' drug Order history</center><a href = 'doctorhistory.php?key='><font style='color:red;font-weight:30px;float:right;margin-top:-37px;margin-right:2px;background:;height:10px;width;'>X</font></a></th></tr>
<tr>
<th>CardNumber</th>
<th>USER_ID </th>
<th>DrugName</th>
<th>DrugAmount</th>
<th>DrugAccessIn</th>
<th>PrescribedBy </th>
<th>OrderDate </th>
</tr>";
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['CardNumber'];	
  print ("<tr>");
   print ("<td>" . $row['CardNumber'] . "</td>");
 print ("<td>" . $row['ACC_ID'] . "</td>");	   
   print ("<td>" . $row['DrugName'] . "</td>");	
   print ("<td>" . $row['DrugAmount'] . "</td>");	
      print ("<td>" . $row['DrugAccessIn'] . "</td>");
	     print ("<td>" . $row['PrescribedBy'] . "</td>");
		     print ("<td>" . $row['OrderDate'] . "</td>")."</tr>";

		
?>
		
<?php
  }
 
print( "</table>");
}

?>
  
<?php
//labhistory
if(isset($_POST['labhistory'])){
// l, clinicmanamentsystem.bill b where l.CardNumber=b.CardNumber and status='Lab Test payment
$result = mysql_query("SELECT * FROM clinicmanamentsystem.labrequist l,clinicmanamentsystem.account a where l.ACC_ID=a.ACC_ID AND a.ACC_ID='$empid'");
echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th colspan='10000000000000'style='color:#FFFAF0; background:#2F4F4F;font-size:28px;width:600px;'><center>Patient labratory Order history</center><a href = 'doctorhistory.php?key='><font style='color:red;font-weight:30px;float:right;margin-top:-37px;margin-right:2px;background:;height:10px;width;'>X</font></a></th></tr>
<tr>
<th>CardNumber</th>
<th>User_ID</th>
<th>BloodTest </th>
<th>UrinTest</th>
<th>FacesTest </th>
<th>RequistDate </th>
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
 }
 ?>	 
<?php
//Doctors Dignoisis history
if(isset($_POST['diagnosishistory'])){
// l, clinicmanamentsystem.bill b where l.CardNumber=b.CardNumber and status='Lab Test payment
$result = mysql_query("SELECT * FROM clinicmanamentsystem.diagnosis d,clinicmanamentsystem.account a where d.ACC_ID=a.ACC_ID AND a.ACC_ID='$empid'");
echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th colspan='10000000000000'style='color:#FFFAF0; background:#2F4F4F;font-size:28px;width:600px;'><center>Patients Diagnoisis Result history</center><a href = 'doctorhistory.php?key='><font style='color:red;font-weight:30px;float:right;margin-top:-37px;margin-right:2px;background:;height:10px;width;'>X</font></a></th></tr>
<tr>
<th>Card Number</th>
<th>User_ID</th>
<th>Treatment Result</th>
<th>Treatment Reason</th>
<th>Date Of Registration</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['CardNumber'];	
  print ("<tr>");
   print ("<td>" . $row['CardNumber'] . "</td>");
 print ("<td>" . $row['ACC_ID'] . "</td>");   
   print ("<td>" . $row['TreatmentResult'] . "</td>");	
   print ("<td>" . $row['Reason'] . "</td>");
 print ("<td>" . $row['DateOfReg'] . "</td>");   
?>
		</tr>
<?php
  }
 print( "</table>");
 }
 ?>		
<?php
//apppointment
if(isset($_POST['appointmenthistory'])){
// l, clinicmanamentsystem.bill b where l.CardNumber=b.CardNumber and status='Lab Test payment
$result = mysql_query("SELECT * FROM clinicmanamentsystem.appointment d,clinicmanamentsystem.account a where d.ACC_ID=a.ACC_ID  AND a.ACC_ID='$empid'");
echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th colspan='10000000000000'style='color:#FFFAF0; background:#2F4F4F;font-size:28px;width:600px;'><center>Patients Appointment  history</center><a href = 'doctorhistory.php?key='><font style='color:red;font-weight:30px;float:right;margin-top:-37px;margin-right:2px;background:;height:10px;width;'>X</font></a></th></tr>
<tr>
<th>CardNumber</th>
<th>User_ID</th>
<th>AppointmentGivenDate </th>
<th>AppointmentDate</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['CardNumber'];	
  print ("<tr>");
   print ("<td>" . $row['CardNumber'] . "</td>");
 print ("<td>" . $row['ACC_ID'] . "</td>");   
   print ("<td>" . $row['AppointmentGivenDate'] . "</td>");	
   print ("<td>" . $row['AppointmentDate'] . "</td>");			
?>
		</tr>
<?php
  }
 print( "</table>");
 }
 ?>	 
 	 
<?php
//drugorder history view by date
if(isset($_POST['drug'])){
$date=$_POST['drug1'];
//d,clinicmanamentsystem.bill b,clinicmanamentsystem.employee e where d.CardNumber=b.CardNumber=e.UserID AND status='Drug Payment'
$result = mysql_query("select*from clinicmanamentsystem.drugorder d,clinicmanamentsystem.account a where d.ACC_ID=a.ACC_ID AND a.ACC_ID='$empid' AND OrderDate='$date'");
echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th colspan='10000000000000'style='color:blue; background:silver;font-size:28px;'><center>Patients' drug Order history</center><a href = 'doctorhistory.php?key='><font style='color:red;font-weight:30px;float:right;margin-top:-37px;margin-right:2px;background:;height:10px;width;'>X</font></a></th></tr>
<tr>
<th>CardNumber</th>
<th>USER_ID </th>
<th>DrugName</th>
<th>DrugAmount</th>
<th>DrugAccessIn</th>
<th>PrescribedBy </th>
<th>OrderDate </th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  
$ctrl = $row['CardNumber'];	
  print ("<tr>");
   print ("<td>" . $row['CardNumber'] . "</td>");
 print ("<td>" . $row['ACC_ID'] . "</td>");	   
   print ("<td>" . $row['DrugName'] . "</td>");	
   print ("<td>" . $row['DrugAmount'] . "</td>");	
      print ("<td>" . $row['DrugAccessIn'] . "</td>");
	     print ("<td>" . $row['PrescribedBy'] . "</td>");
		     print ("<td>" . $row['OrderDate'] . "</td>")."</tr>";

		
?>
		
<?php
  }
 
print( "</table>");
mysql_close($con);
}

?>
<?php
//labhistory view by date
if(isset($_POST['lab'])){
// l, clinicmanamentsystem.bill b where l.CardNumber=b.CardNumber and status='Lab Test payment
$result = mysql_query("SELECT * FROM clinicmanamentsystem.labrequist l,clinicmanamentsystem.account a where l.ACC_ID=a.ACC_ID AND a.ACC_ID='$empid' AND RequistDate='$_POST[labdates]'");
echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th colspan='10000000000000'style='color:#FFFAF0; background:#2F4F4F;font-size:28px;width:600px;'><center>Patient labratory Order history</center><a href = 'doctorhistory.php?key='><font style='color:red;font-weight:30px;float:right;margin-top:-37px;margin-right:2px;background:;height:10px;width;'>X</font></a></th></tr>
<tr>
<th>CardNumber</th>
<th>User_ID</th>
<th>BloodTest </th>
<th>UrinTest</th>
<th>FacesTest </th>
<th>RequistDate </th>
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
 }
 ?>
<?php
//Doctors Dignoisis history view by date
if(isset($_POST['diagnosdate'])){
// l, clinicmanamentsystem.bill b where l.CardNumber=b.CardNumber and status='Lab Test payment
$result = mysql_query("SELECT * FROM clinicmanamentsystem.diagnosis d,clinicmanamentsystem.account a where d.ACC_ID=a.ACC_ID AND a.ACC_ID='$empid' AND DateOfReg='$_POST[diagnosiss]'");
echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th colspan='10000000000000'style='color:#FFFAF0; background:#2F4F4F;font-size:28px;width:600px;'><center>Patients Diagnoisis Result history</center><a href = 'doctorhistory.php?key='><font style='color:red;font-weight:30px;float:right;margin-top:-37px;margin-right:2px;background:;height:10px;width;'>X</font></a></th></tr>
<tr>
<th>Card Number</th>
<th>User_ID</th>
<th>Treatment Result</th>
<th>Treatment Reason</th>
<th>Date Of Registration</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['CardNumber'];	
  print ("<tr>");
   print ("<td>" . $row['CardNumber'] . "</td>");
 print ("<td>" . $row['ACC_ID'] . "</td>");   
   print ("<td>" . $row['TreatmentResult'] . "</td>");	
   print ("<td>" . $row['Reason'] . "</td>");
 print ("<td>" . $row['DateOfReg'] . "</td>");   
?>
		</tr>
<?php
  }
 print( "</table>");
 }
 ?>	
<?php
//apppointment
if(isset($_POST['Appoint'])){
// l, clinicmanamentsystem.bill b where l.CardNumber=b.CardNumber and status='Lab Test payment
$result = mysql_query("SELECT * FROM clinicmanamentsystem.appointment d,clinicmanamentsystem.account a where d.ACC_ID=a.ACC_ID  AND a.ACC_ID='$empid' AND AppointmentDate='$_POST[apps]'");
echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th colspan='10000000000000'style='color:#FFFAF0; background:#2F4F4F;font-size:28px;width:600px;'><center>Patients Appointment  history</center><a href = 'doctorhistory.php?key='><font style='color:red;font-weight:30px;float:right;margin-top:-37px;margin-right:2px;background:;height:10px;width;'>X</font></a></th></tr>
<tr>
<th>CardNumber</th>
<th>User_ID</th>
<th>AppointmentGivenDate </th>
<th>AppointmentDate</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['CardNumber'];	
  print ("<tr>");
   print ("<td>" . $row['CardNumber'] . "</td>");
 print ("<td>" . $row['ACC_ID'] . "</td>");   
   print ("<td>" . $row['AppointmentGivenDate'] . "</td>");	
   print ("<td>" . $row['AppointmentDate'] . "</td>");			
?>
		</tr>
<?php
  }
 print( "</table>");
 }
 ?>	 
</div>
    </section>
<?php include("footer.php");?>

</div>
                                                                        
</body>
</html>