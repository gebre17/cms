<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>Kidamret clinic</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />
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
<link rel="stylesheet" type="text/css" href="csss.css">
</head>
<body>
<div id="body">
<?php include("header.php");?>
<div id="headerz">
<table width="1150px" height="20px"border="0px">
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
							
</b>  
				
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
	 <div class="login" style="background-color:#e6e8fa;;">
<br><br><br>
     <FORM ACTION="appointmentdate.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">
<center>
<table  bgcolor="#ffffff" style="border:5px solid lightblue;border-radius:15px;margin-top:-130px;background-color:#e6e8fa;width:650px;height:300px;">
<tr>
<td colspan="3" style="padding: 2px 2px 4px;border-radius:5px;width:3000px;height:30px;" align="center" bgcolor="white-gray;">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Appointment Form</h1></b></font></b><a href ='doctor.php?key='><font style='color:red;font-weight:40px;float:right;background:pink;border-radius:px;margin-top:-54px;margin-right:-4px;height:30px;width;font-size:30px;'>X</font></a></td></h1></b></font></b></td>
</tr>
<tr><td><font color="red">*</font><label>Card number:</label></td><td>
				<?php 
														 $res=mysql_query("select * from  clinicmanamentsystem.patientregistration where status='treated'");
	                                                     echo'<select name="regpatientid">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:25px;width:280px;border-top:6px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td><br><br>
													
</tr>
<!--
<tr>
<td>First Name:</td><td><input name="regfname" type="text" size"20" pattern="\D{2,10}" style="border:px #480000 solid;width:300px;height:30px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter FName"></input></td>
</tr>
<tr>
<td>Last Name :</td><td><input name="reglname" type="text"  size"20" pattern="\D{2,10}" style="border:px #480000 solid;width:300px;height30px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter LName"></input></td>
</tr>
<tr>
<tr>
<td>Sex</td><td><input type="radio"value="male" name="sex" >male<input type="radio"value="femal" name="sex">femal<br> </td>
</tr>

<td>Phone Number :</td><td><input name="regphone" type="text"  size"20" pattern="\d{10}" style="border:px #480000 solid;width:300px;height:30px;background:#FFFFFF;border-radius:5px;color:green;" required="required"placeholder="Enter Phone-No"></input></td>
</tr> -->
<!--
<tr>
<td>Appt given Date :</td><td><input name="regapptgivendate" type="date" id="apptdate" required x-moz-errormessage="Please enter the appt given date" style="border:px #480000 solid;width:300px;height:30px;;background:#FFFFFF;border-radius:5px;" required="required"placeholder="Enter appt given date"></input></td>
</tr>-->
<tr>
<tr>
<td>Appt Date :</td><td><input name="regapptdate" type="date" id="apptdate" required x-moz-errormessage="Please enter the appt date" style="border:px #480000 solid;width:300px;height:30px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter appt date"></input></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="save" name="add" style="color:#0f0f0f;background:#5d8aa8;"></input> 
<input type="reset" value="Reset" style="color:#0f0f0f;background:#5d8aa8;"/></center>
<?php if(isset($msg)){
$var=(ucfirst($msg));
   $query = "SELECT * FROM account WHERE UserName= '$var'";
   $result_set=mysql_query($query,$con);
while($row=mysql_fetch_array($result_set)){
$EID=$row['ACC_ID'];

}
}
?>
<?php
 if(isset($_POST['add']))
 {
 $pid=$_POST['regpatientid'];
//$fname=$_POST['regfname'];
//$lname=$_POST['regfname'];
//$sex=$_POST['sex'];
//$phone=$_POST['regphone'];
$appdategi=date('Y-m-d');
$appdate=$_POST['regapptdate'];
    $sql="insert into appointment (CardNumber,ACC_ID,AppointmentGivenDate,AppointmentDate)values('$pid','$EID','$appdategi','$appdate')";
	$result=mysql_query($sql);// or die(mysql_error());		
  if(!$result){
	  die("error".mysql_error());
    print "<h3><img src='IMG/error.png' width='2px' height='2px'>&nbsp;<font face='arial' color='red' size='2'>Please try again here is already exist!</font></h3>";
}
else{	
    print"<font face='arial' color='green' size='6'>Data is registered</font>";
   //<img src='IMG/tick.png' width='2px' height='2px'>
 }
 }

mysql_close($con);

?>	
  </td>

</tr>
</table>
				
		</div>
    </section>
<?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>