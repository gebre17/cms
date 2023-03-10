<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>clinic mgt system</title>
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
  <img src="img/55yu.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="font-family:Lucida Calligraphy;color:black;background-color:white;margin-top:-50px;">
    <FORM ACTION="refer.php" METHOD="POST" target="" onsubmit='return formValidation()'>
<font face="timesnewroman" size="+1">
 <center>
<table  align="center" bgcolor="#e6e8fa" style="border:3px solid lightblue;width:600px;border-radius:15px">
<tr>
<td colspan="3" style="padding: 2px 2px 4px;border-radius:5px;width:3000px;height:30px; background:#8FBC8F;"align="center">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Doctors Digonicis Form</h1></b></font></b><a href ='doctor.php?key='><font style='color:red;font-weight:40px;float:right;background:#D3D3D3;border-radius:px;margin-top:-54px;margin-right:-4px;height:30px;width;font-size:30px;'>X</font></a></td></h1></b></font></b></td>
</tr>
<tr><td><font color="red">*</font><label>Card number:</label></td><td>
				<?php 
														 $res=mysql_query("select * from  clinicmanamentsystem.patientregistration");
	                                                     echo'<select name="regpatientid">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:50px;width:176px;border-top:6px;background:#6B8E23;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
														
</tr>
<!--
<tr>
<td>First Name :</td><td><input name="regfname" type="text" id="pname" size"30" pattern="\D{3,40}" style="border:1px #480000 solid;width:250px;height:30px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter Patient Name"></input></td>
</tr>
<tr>
<td>Last Name :</td><td><input name="ln" id="ll" type="text" size"20" pattern="\D{2,20}" style="border:1px #480000 solid;width:250px;height:30px;background:#FFFFFF;border-radius:5px;" required="required"placeholder=""></input></td>
</tr>-->
<tr>
<td>Treatment Result:</td><td><textarea name="treat" id="treatment" type="text" size="20" required pattern= "[A-Za-z]+" style="border:1px #480000 solid;width:200px;height:50px;background:#FFFFFF;border-radius:5px;" required x-moz-errormessage="Please enter correct treatment result here " placeholder="Enter Treatment"></textarea></td>
</tr>
<tr>
<td>Reason :</td><td><textarea name="regreason" id="reason" type="text" size="20" pattern="\D{2,40}" style="border:1px #480000 solid;width:200px;height:50px;background:#FFFFFF;border-radius:5px;" required="required"placeholder="Reason"></textarea></td>
</tr>
<td colspan="2" align="center"><input type="submit" value="Register" name="add" style="color:#0f0f0f;background:#5d8aa8;"></input> 
<input type="reset" value="Reset" style="color:#0f0f0f;background:#5d8aa8;"/></td></center>
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
 $acardnum=$_POST['regpatientid'];
//$fname=$_POST['regfname'];
//$lname=$_POST['ln'];
$tr=$_POST['treat'];
$treson=$_POST['regreason'];
$rdate=date('Y-m-d');
    $sql="insert into diagnosis(CardNumber,ACC_ID,TreatmentResult,Reason,DateOfReg) values('$acardnum','$EID','$tr','$treson','$rdate')";
	$result=mysql_query($sql);// or die(mysql_error());		
  if(!$result){
	  die("error".mysql_error());
    print "<h3><img src='IMG/error.png' width='2px' height='2px'>&nbsp;<font face='arial' color='red' size='2'>Please try again here is already exist!</font></h3>";
}
else{	
    print "<font face='arial' color='green' size='6'>You have successfully registered</font>";
   //<img src='IMG/tick.png' width='2px' height='2px'>
 }
 }
mysql_close($con);
?> 
</table></center> </form><center>
 </div>
</FORM>
 </section>
 <?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>
