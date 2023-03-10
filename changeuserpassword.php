<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>kidaneemiret clinic</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
<link rel="stylesheet" type="text/css" href="csss.css">
  <link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />
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
<div id="body">
<?php include("header.php");?>
<div id="headerz" style="font-size:25px;">
<div>
<table>
<tr>
  <td>

 	<p><li>
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
									   	
				<!--<a href="logout.php" >LOGOUT</a>-->
				
			</li>	
				</p>
					  </td>
</tr>
</table>	</div>

 <section class="container">

 <div id="center">
<img src="img/UU.jpg" width="140" height="77">
</div>
 
<div id="left_colomn">
<div id="yy">
<img src="img/change.jpg" width="300px" height="590">
</div>
</div>
<div id="right_colomn"align="center">
<div>
<img src="img/change.jpg" width="274px" height="600px">
</div>
</div>	
<div class="login" style="background-color:white;">
 <table  border='1' style='width:375px;height:200;Background-color:#e6e8fa;border:0px solid blue;border-radius:0px;' align='center'>
<!--<caption align="center"><h1 style="color:#000066;font-family:Times New Roman;"> Password Change  Form</h1></caption>-->	
<tr>
<td colspan="3" style="padding: 2px 2px 4px;border-radius:5px;width:3000px;height:30px;" align="center" bgcolor="white-gray;">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Password Change  Form</h1></b></font></b></h1></b></font></b></td>
</tr>	  
 <td height="30" width="325px"><table width="325px"  border=0>     
                 <tr>										
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message">
<?php
 
?>
</div>
<table border="0" cellpadding="10" cellspacing="0" width="800" align="center" class="tblSaveForm">
<tr>
<td width="40%"><pre><label><font color="red">*</font>Enter Current Password:</label></pre></td>
<td width="60%"><input type="password" required="required" name="oldpassword" id="oldpassword" style="border:1px #480000 solid;width:300px;height:40px;background:#FFFFFF;border-radius:px;color:green;" required="required"></td>
</tr>
<tr>
<td><label><font color="red">*</font> Enter New Password:</label></td>
<td><input type="password"required name="newpassword" id="newPassword" style="border:1px #480000 solid;width:300px;height:40px;background:#FFFFFF;border-radius:px;color:green;" require="required"></td>
</tr>
<td><label><font color="red">*</font>Confirm Password:</label></td>
<td><input type="password" <font="red"required name="cnewpassword" id="cnewpassword" style="border:1px #480000 solid;width:300px;height:40px;background:#FFFFFF;border-radius:px;color:green;"required="required"></td>
</tr>

<tr>
<td colspan="1" align="center">
<td colspan="2"><input type="submit" name="change"value="change" class="btnSubmit" style="color:#0f0f0f;background:#5d8aa8;width:120px;height:30px;">
<input type="reset" name="reset" value="Reset" class="btnSubmit" style="color:#0f0f0f;background:#5d8aa8;width:120px;height:30px;"></td>
</td>
</tr>
</table>
</div>
</form>
<?php

  if(isset($_POST['change']))
{
 if(strlen($_POST['newpassword'])<6 and strlen($_POST['newpassword'])>25 )
{
	
print "<h3><img src='IMG/error.png' width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>Please enter the new password between 6 and 25 character!</font></h3>"; 
}
else if(strlen($_POST['cnewpassword'])<6 and strlen($_POST['cnewpassword'])>25 )
{
	print "<h3><img src='IMG/error.png' width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>Please enter the confirm new password between 6 and 25 character!</font></h3>"; 
}

if ($_POST['newpassword']!=$_POST['cnewpassword'])
{
	print "<h3><img src='IMG/error.png' width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>Please enter the confirm new password identical with the new password!</font></h3>";
}
else
{
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("does not connect:".mysql.error());
}
mysql_select_db("clinicmanamentsystem",$con);
$sql="select * from account where password=md5('$_POST[oldpassword]')";
$result=mysql_query($sql,$con);
$count=mysql_num_rows($result);
if($count!=0)
{
mysql_query("UPDATE account SET password=md5('$_POST[newpassword]') where password=md5('$_POST[oldpassword]')");
print "<img src='IMG/tick.png' width='25px' height='25px'><font face='arial' color='green' size='2'>Your Password  is successfully changed.</font>";
}
else
{
	print "<h3><img src='IMG/error.png' width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>Please enter the correct old Password!</font></h3>";
//echo"<font color=\"red\">please enter correct old password ?</font>"; 
}
}
}
?>
  </tr>
          </table></td>
            </tr>
       </table>
<p>
</div>
    </section>
                                                                        
</body>
<?php include("footer.php");?>
</html>
