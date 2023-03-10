<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>Kidanemiret clinic</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
<link rel="stylesheet" type="text/css" href="csss.css">
      <script type="text/javascript">
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
            <a href="additem.php">ADD PATIENT</a>
			 <a href="receptionupdatepatient.php">Activate CardNumber </a>
			<a href="viewitem.php">VIEW PATIENT RECORD</a>
			<a href="viewappointment.php">VIEW PATIENT Appointment</a>
			<a href="viewPrescribedDrug.php">view ordered drug</a>
			<a href="addbill.php">ADD BILL</a>
			<a href="kviewdrugorder.php">VIEW EACH DRUG ORDER</a>
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
        <img src="img/clerk.jpg" width="270px" height="590">
		</div>
	</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
  <img src="img/pen.gif" width="280" height="580"> 
</div>
</div>
	     <div class="login" style="background-color:#bdb76b;">
	       <FORM ACTION="#" METHOD="POST" enctype="multipart/form-data">
             <font face="timesnewroman">
               <center>	
                <table  bgcolor="#ffffff" style="border:px solid black;background-color:#e6e8fa;width:400px;border-radius:5px; margin-top:-80px;height:300px;width:700px;">
				<tr>
<td colspan="9" style="padding: 2px 2px 4px;border-radius:5px;width:3000px;height:30px; background:#8FBC8F;"align="center">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Patient Registration form</h1></b></font></b><a href ='clerk.php?key='><font style='color:red;font-weight:40px;float:right;background:#D3D3D3;border-radius:px;margin-top:-54px;margin-right:-1px;height:30px;width;font-size:30px;'>X</font></a></td></h1></b></font></b></td>
</tr>
                 <!-- <tr>
                   <td>Card Number:</td><td><input name="txtmrn" type="number" size"20" pattern="\w{2,15}" style="border:0px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:0px;" required="required" placeholder="Enter the master reg no"></input></td></tr>
                   <tr>-->
                  <td>First Name :</td><td><input name="regfirstname" type="text" id="first" size"20" pattern="\D{2,10}" required x-moz-errormessage="===>Please enter only character number imposible"  style="border:0px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" placeholder="Enter FName"></input></td></tr>
                   <tr><td>Middle Name :</td><td><input name="regmiddlename" type="text" id="middle" size"20" pattern="\D{2,10}"x-moz-errormessage="===>Please enter only character number imposible" style="border:px #480000 solid;width:200px;height:25px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Enter MName"></input></td></tr>
                   <tr><td>Last Name :</td><td><input name="reglastname" type="text" id="last" size"20" pattern="\D{2,10}"x-moz-errormessage="===>Please enter only character number imposible" style="border:px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Enter LName"></input></td></tr>
                  <tr><center><td>sex:</td>
		          <td><select name="sex" style="width:200px;" required x-moz-errormessage="Please select one" style="width:200px;" "height:30px;" margin-left="20px">
                  <option></option>
                  <option>Male</option>
                  <option>Femal</option>
                </select></td></center></tr>
				<tr><td>Zone :</td><td><input name="zone" type="text" id="last" size"20" pattern="\D{2,10}" style="border:px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Enter Zone"></input></td></tr>
				<tr><td>Woreda :</td><td><input name="woreda" type="text" id="last" size"20" pattern="\D{2,10}" style="border:px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Enter woreda"></input></td></tr>
				<tr><td>Kebele:</td><td><input name="kebele" type="text" id="last" size"20" pattern="\D{2,10}" style="border:px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Enter kebele"></input></td></tr>
                <tr><td>Telephone :</td><td><input name="regphonenumber" id="phone" type="text" size"20" pattern="\d{10}"x-moz-errormessage="===>Please enter your telephone" style="border:px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required"placeholder="Enter Phone-No"></input></td></tr><tr>
                 <td>Nationality :</td><td><select id='nation' name="regnation" required x-moz-errormessage="Please select one" style="width:200px;" "height:30px;" margin-left="20px">	                    
						<option></option>
						<option>Ethiopian</option>
	                    <option>United states</option>
	                    <option>Indian</option>
	                    <option>England</option>
	                    <option>Germany</option>
						<option>Italy</option>
						<option>France</option>
						<option>Australia</option>
						<option>Egypt</option>
						<option>Corea</option>
	                    <option>Rusia</option>
                     </select></tr>
<tr><td>Birth Date :</td><td><input name="bdate" type="date" id="date" required x-moz-errormessage="Please enter  date" style="border:px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required"></input></td></tr>
        <!-- <tr><td>Register Date :</td><td><input name="rdate" type="date" id="date" required x-moz-errormessage="Please enter  date" style="border:px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required"></input></td></tr>-->
         <tr><td>Photoss: </td><td><input name="image" type="file" id="photo" required x-moz-errormessage="Please upload your photo" style="border:px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required"></input></td></tr>
         <tr><td colspan=2 align="center">
         <input type="submit" value="Register" name="Register"style="color:#0f0f0f;background:#5d8aa8;"/> <input type="reset" value="Reset"style="color:#0f0f0f;background:#5d8aa8;"/>
       
<?php
if(isset($msg)){
$var=(ucfirst($msg));
   $query = "SELECT * FROM account WHERE UserName= '$var'";
   $result_set=mysql_query($query,$con);
while($row=mysql_fetch_array($result_set)){
$EID=$row['ACC_ID'];

}
}
 if(isset($_POST['Register']))
 {
 //$acardnum=$_POST['txtmrn'];
$fname=$_POST['regfirstname'];
$midlename=$_POST['regmiddlename'];
$lname=$_POST['reglastname'];
$sex=$_POST['sex'];
$zone=$_POST['zone'];
$woreda=$_POST['woreda'];
$kebele=$_POST['kebele'];
$phone=$_POST['regphonenumber'];
$nation=$_POST['regnation'];
$birthdate=$_POST['bdate'];
$new=date('Y-m-d');
$photo=$_FILES['image']['name'];
$stat="waiting";
    $sql="insert into patientregistration(ACC_ID,FirstName,MiddleName,LastName,Sex,Zone,Woreda,Kebele,PhoneNumber,Nationality,BirthDate,RegistrationDate,status,photo)values('$EID','$fname','$midlename','$lname','$sex','$zone','$woreda','$kebele','$phone','$nation','$birthdate','$new','$stat','$photo')";
	//$var=mysql_query("insert into (CardNumber)appointment values('$acardnum')");
	$result=mysql_query($sql);// or die(mysql_error());		
  if(!$result){
	  die("error".mysql_error());
    print "<h3><img src='IMG/error.png' width='2px' height='2px'>&nbsp;<font face='arial' color='red' size='2'>Please try again here is already exist!</font></h3>";
}
else{	
    print "<font face='arial' color='green' size='6'style='margin-top:-30px;'>successfully registered</font>";
   //<img src='IMG/tick.png' width='2px' height='2px'>
 }
 }

mysql_close($con);

?>
 </td></tr>
       </table> 
</center></form>
</div>

</td><!--center end-->
 
<p>
    </section>
	<?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>