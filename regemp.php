<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>BD K Clinic MS</title>
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
     <FORM ACTION="regemp.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">
<caption align="center"><h1 style="color:#000066;font-family:Times New Roman;margin-top:-100px;"></h1></caption>
<center>
<br>
<table  bgcolor="#5d8aa8" style="margin-top:-20px;border:5px solid lightblue;background-color:#e6e8fa;width:800px;height:100px;border-radius:15px;">
  <tr>
<td colspan="3" style="padding: 2px 2px 4px;border-radius:5px;width:3000px;height:30px;background:#2F4F4F" align="center">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Employee Registration form<a href ='admin.php?key='><font style='color:red;font-weight:40px;float:right;background:pink;border-radius:px;margin-top:-6px;margin-right:-117px;height:30px;width;font-size:30px;'>X</font></a></td></h1></b></font></b></td>
</tr>

<!--<tr>
<td>EmployeeID :</td><td><input name="regid" type="text" id="first" size"20" pattern="\D{2,12}" style="border:1px #480000 solid;width:300px;height:30px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter ID"></input></td>
</tr>-->
<tr>
<td>First Name :</td><td><input name="regfirstname" type="text" id="first" size"20" pattern="\D{2,12}" style="border:1px #480000 solid;width:300px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter FName"></input></td>
</tr>
<tr>
<td>Last Name :</td><td><input name="reglastname" type="text" id="last" size"20" pattern="\D{2,12}" style="border:1px #480000 solid;width:300px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter LName"></input></td>
</tr>
<tr>
<td>Age :</td><td><input name="regage"max="75" min="18" id="age" type="number" size"20" pattern="\d{2}" style="border:1px #480000 solid;width:300px;height:25px;background:#FFFFFF;border-radius:5px;" required="required"placeholder="Enter age"></input></td>
</tr>
<tr>
<td>Sex :</td><td><select id='sex' name="regsex" required x-moz-errormessage="Please select the one from the list" style="width:300px;" "height:20px;" margin-left="20px">
	                    
						<option></option>
						<option>Male</option>
	                    <option>Female</option>        
                     </select>
                    </td>
</tr>
<tr>
<td>Phone Number :</td><td><input name="regphonenumber" id="phone" type="text" size"20" pattern="\d{10}" style="border:1px #480000 solid;width:300px;height:25px;background:#FFFFFF;border-radius:5px;" required="required"placeholder="Enter Phone-No"></input></td>
</tr>
<tr>
<td>Nationality : </td><td><select id='nation' name="regnation" required x-moz-errormessage="Please select the one from the list" style="width:300px;" "height:20px;" margin-left="20px">
	                    
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
<td>Kebelie :</td><td><input name="regkebelie" type="text" id="keb" size"20" pattern="\D{2,4}" style="border:1px #480000 solid;width:300px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter kebelie" ></input></td>
</tr>
<tr>
<td>Woreda :</td><td><input name="regworeda" type="text" id="wor" size"20" pattern="\D{2,15}" style="border:1px #480000 solid;width:300px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter woreda"></input></td>
</tr>
<tr>
<td>Zone :</td><td><input name="regzone" type="text" id="zon" size"20" pattern="\D{2,15}" style="border:1px #480000 solid;width:300px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter zone"></input></td>
</tr>
<tr>
<td>City :</td><td><input name="regcity" type="text" id="city" size"20" pattern="\D{2,15}" style="border:1px #480000 solid;width:300px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter City"></input></td>
</tr>
<tr>
<td>Specialization :</td><td><input name="regsp" type="text" id="spe" size"20" pattern="\D{2,30}" style="border:1px #480000 solid;width:300px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="specialized in"></input></td>
</tr>
<tr><td colspan=2 align="center">
<input type="submit" value="Register"onclick="validate()" name="adds"style="color:#0f0f0f;background:#5d8aa8;"/> 
<input type="reset" value="Reset"style="color:#0f0f0f;background:#5d8aa8;"/>

	 <?php
if(isset($msg)){
$var=(ucfirst($msg));
   $query = "SELECT * FROM account WHERE UserName= '$var'";
   $result_set=mysql_query($query,$con);
while($row=mysql_fetch_array($result_set)){
$EID=$row['ACC_ID'];

}
}
?>
<?php
 if(isset($_POST['adds']))
 {
$fname=$_POST['regfirstname'];
$lname=$_POST['reglastname'];
$age=$_POST['regage'];
$sex=$_POST['regsex'];
$phone=$_POST['regphonenumber'];
$nation=$_POST['regnation'];
$kebele=$_POST['regkebelie'];
$worda=$_POST['regworeda'];
$zone=$_POST['regzone'];
$city=$_POST['regcity'];
$special=$_POST['regsp'];
 //$rdate=date("d/m/Y");
    $sql="insert into employee(ACC_ID,FirstName,LastName,Age,Sex,PhoneNumber,Nationality,Kebele,Woreda,Zone,City,Specialization) values('$EID','$fname','$lname','$age','$sex','$phone','$nation','$kebele','$worda','$zone','$city','$special')";
	$result=mysql_query($sql);// or die(mysql_error());		
  if(!$result){
	  die("error".mysql_error());
    print "<h3><img src='IMG/error.png' width='2px' height='2px'>&nbsp;<font face='arial' color='red' size='2'>Please try again here is already exist!</font></h3>";
}
else{	
   echo"<font face='arial' color='green' size='6'>You have successfully registered</font>";
   //<img src='IMG/tick.png' width='2px' height='2px'>
 }
 }
mysql_close($con);

?>
<p>
</td></tr>
</table> 
</FORM>
    </section>
	<?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>

