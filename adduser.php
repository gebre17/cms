<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>Bahir Dar Kidanemiret Clinic</title>
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
<script language="javascript">
  function check()
  {
   if(document.getElementById("regpassword").value =="")
   {
    alert('first fill the each textfields !!'); 
    document.getElementById("regpassword").focus();
    return false;
   }
    if(document.getElementById("regfirstname").value =="")
   {
    alert('first fill the each text  fields!!'); 
    document.getElementById("regfirstname").focus();
    return false;
   }
    if(document.getElementById("reglastname").value =="")
   {
    alert('first fill the each text fields !!'); 
    document.getElementById("reglastname").focus();
    return false;
   }
    if(document.getElementById("phone").value =="")
   {
    alert('first fill the each text fields !!'); 
    document.getElementById("regage").focus();
    return false;
   }
    if(document.getElementById("regage").value =="")
   {
    alert('first fill the each text fields !!'); 
    document.getElementById("username").focus();
    return false;
   }
   }
   </script>
<!--<td width="650" valign="top" height="700"><br><br>-->
	  <br><br><br><center>
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
<b> <a href="logout.php?loged">Logout</a>  </b>    
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
<section class="container">

 <div id="center">
<img src="img/UU.jpg" width="140" height="74">
</div>
 
<div id="left_colomn">
<div id="yy">
<img src="img/4.jpg" width="270px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
  <img src="img/pen.gif" width="280" height="580">
</div>
</div>
	 <div class="login" style="background-color:#e6e8fa;">
     <FORM ACTION="adduser.php" METHOD="POST" name="aster" onclick="check();"enctype="multipart/form-data">
<font face="timesnewroman">
<table  bgcolor="#e6e8fa" style="border:5px solid lightblue;background-color:#e6e8fa;width:700px;height:300px;border-radius:15px;margin-top:-59px;">
  <tr>
<td colspan="3" style="padding: 2px 2px 4px;border-radius:5px;width:300px;height:30px;" align="center" bgcolor="white-gray;">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">User Account form</h1></b></font></b><th align = 'center' width = '1'><a href ='admin.php?key='><font style='color:red;font-weight:40px;float:right;margin-top:-15px;background:pink;border-radius:1px;height:;width;font-size:40px;'>X</font></a></td>
</tr>
<tr>
<td>First Name :</td><td><input name="regfirstname" type="text" id="first" size"20" required pattern="\D{1,}[A-Za-z]+" style="border:1px #480000 solid;width:200px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter FName"></input></td>
</tr>
<tr>
<td>Last Name :</td><td><input name="reglastname" type="text" id="last" size"20" pattern="\D{2,12}" style="border:1px #480000 solid;width:200px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter LName"></input></td>
</tr>
<tr>
<td>Age :</td><td><input name="regage" max="75" min="18"id="age" type="Number" size"20" pattern="\d{2}" style="border:1px #480000 solid;width:200px;height:25px;background:#FFFFFF;border-radius:5px;" required="required"placeholder="Enter age"></input></td>
</tr>
<tr>
<td>Sex :</td><td><select id='sex' name="regsex" required x-moz-errormessage="Please select the one from the list" style="width:200px;" "height:20px;" margin-left="20px">
	                    
						<option></option>
						<option>Male</option>
	                    <option>Female</option>        
                     </select>
                   </td>
</tr>
<tr>
<td>Role</td><td><select id='acc_type' name="role" required x-moz-errormessage="Please select one" style="width:200px;" "height:20px;" margin-left="20px">
	                    
						<selected style="width:200px;font:red;">
						<option>Admin</option>
	                    <option>Receptionist</option>
	                    <option>Doctor</option>
	                    <option>Pharmacist</option>
						<option>LabTech</option>
						<option>Nurse</option>
	                    
                     </select>
                    </td>
					<!--  email validation ="(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3})"          -->
</tr>
<tr>
<td>User Name:</td><td><input name="username" type="text" id="email" size"30" pattern="\D{2,25}" style="border:1px #480000 solid;width:200px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter Email"></input></td>
</tr>
<tr>
<td>Password :</td><td><input name="regpassword" type="password" id="pass" size"20" pattern="\w{4,15}" style="border:1px #480000 solid;width:200px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter Password"></input></td>
</tr>
<tr>
<td>Phone Number :</td><td><input name="regphonenumber" id="phone" type="text" size"20" pattern="[+2519][0-9].{11}" style="border:1px #480000 solid;width:200px;height:25px;background:#FFFFFF;border-radius:5px;" required x-moz-errormessage="Please select pleas enter correct Ethiopian phone number" placeholder="Enter Phone-No"></input></td>
</tr>
<tr>
<td>Nationality : </td><td><select id='nation' name="regnation" required x-moz-errormessage="Please select the one from the list" style="width:200px;" "height:20px;color:red;" margin-left="20px">
	                    
						<option></option>
						<option>Ethiopia</option>
	                    <option>America</option>
	                    <option>Germany</option>
	                    <option>Europe</option>
	                    <option>Eurtrea</option>
						<option>Sudan</option>
						<option>S.Africa</option>
	                    
                     </select>
                    </td>
</tr>
<tr>
<td>City :</td><td><input name="regcity" type="text" id="city" size"20" pattern="\D{2,15}" style="border:1px #480000 solid;width:200px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter City"></input></td>
</tr>
<!--<tr>
<td>Photo :</td><td><input name="regphoto" type="file" id="photo" input required="required"></td>
</tr>-->

<tr><td colspan=2 align="center">
<input type="submit" value="Register" name="add" Onclick="return check(this.form);"style="color:#0f0f0f;background:#5d8aa8;o"/> 
<input type="reset" value="Reset"style="color:#0f0f0f;background:#5d8aa8;"/>
<?php
 if(isset($_POST['add']))
 {
$fname=$_POST['regfirstname'];
$lname=$_POST['reglastname'];
$age=$_POST['regage'];
$sex=$_POST['regsex'];
$role=$_POST['role'];
$uname=$_POST['username'];
$pass=md5($_POST['regpassword']);
$phone=$_POST['regphonenumber'];
$nation=$_POST['regnation'];
$city=$_POST['regcity'];
 $rdate=date("d/m/Y");
    $sql="insert into account(FirstName,lastName,Age,Sex,Role,UserName,Password,PhoneNumber,Nationality,City,status)values('$fname','$lname','$age','$sex','$role','$uname',('$pass'),'$phone','$nation','$city','0')";
	$result=mysql_query($sql);// or die(mysql_error());		
  if(!$result){
	  die("error".mysql_error());
    print "<h3><img src='IMG/error.png' width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>Please try again here is already exist!</font></h3>";
}
else{	
    print "<font face='arial' color='green' size='5'>You have successfully added</font>";
   
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

