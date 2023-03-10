<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
<link rel="stylesheet" type="text/css" href="csss.css">
<style>
</style>
</head>
<div id="body">
<?php include("header.php");
?>
<div id="headerz">

 <section class="container">

 <div id="center">
<img src="img/UU.jpg" width="140" height="70">
</div>
 
<div id="left_colomn"style="margin-top:-30px;">
<div id="yy">
<img src="img/change.jpg" width="300px" height="590">
</div>
</div>
<div id="right_colomn"align="center">
<img src="img/change.jpg" width="285px" height="600px">
</div></marquee>
	 <div class="login"style="margin-top:45px;">
<script language="javascript">
  function check()
  {
   if(document.getElementById("username").value =="")
   {
    alert('first fill the each text fields !!'); 
    document.getElementById("username").focus();
    return false;
   }
    if(document.getElementById("accid").value =="")
   {
    alert('first fill the each text fields!!'); 
    document.getElementById("accid").focus();
    return false;
	
   }
   }
   </script>
<!--<td width="650" valign="top" height="700"><br><br>-->
	  
	  
	  <table border="1" cellpadding="0" cellspacing="0" width="700"style="margin-top:-30px;Background-color:#e6e8fa;">
<tr>
<td style="padding: 2px 2px 4px;border-radius:5px;" align="center" bgcolor="#6495ED;">
<b><font face="timesnewroman" size="1" color="#686868"><b>
<br>
<h1 style="color:white;font-family:Times New Roman;size:6px;">Password Recovery Form</h1></b></font></b></td></tr>
<tr>
<td><form method="post" action="forgotp.php">
<center><table id="ap_table_lost" height="120px">
<tr>
<td><font face="verdana,arial" size="-1"style="font-size:15px;color:green;">User Name:</font></td>  
<td><input name="username" type="text" id="username" size="30" required x-moz-errormessage="Please enter your User Name" placeholder='Enter User Name'></td></tr>
<tr>
<?phpecho"";?>
<td><font face="verdana,arial" size="-1"style="font-size:18px;color:green;"> User ID:</font></td>  
<td><input name="accid" type="text" id="accid" size="30" placeholder='Enter Your User ID' required x-moz-errormessage="Enter Your valid User ID"></td></tr>
<tr>
<td>&nbsp;</td>
  <td><font face="verdana,arial" size="-1" ><input style="font-size:20px;"value="Submit" name="submitMain" type="submit" Onclick="return check(this.form);"/>
  </font></td>
  <td><font face="verdana,arial" size="-1" ><input style="font-size:20px;margin-left:-250px;"value="Reset" name="submitMain" type="reset" Onclick="return check(this.form);"/>
  </font></td>
  </tr></center>
</table></center>
</form>
<?php
 session_start();
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 if(isset($_POST['submitMain']))
  {
   $acid=$_POST['accid'];
$uname=$_POST['username'];

   $sql="SELECT * FROM account where UserName='$uname' AND ACC_ID='$acid';"; 
   
   $result_set=mysql_query($sql,$con);
   if(!$result_set)
   {
   die("Query faill".mysql_error());
   }
if(mysql_num_rows($result_set)>0)
{
while($row=mysql_fetch_array($result_set))
{
//$id=$row[0];
$acid=$row[0];
$pass=($row[7]);
$role=$row['Role'];
//$emp_id=$row[1];
echo"<center>"."<div style='float:top;>";
echo"<center>.<div style='float:top;>"."&nbsp; &nbsp;"."<font face='monotype corsiva' color='green' size='6'>"."Hello: ".$role."</font>"."&nbsp; &nbsp;&nbsp;&nbsp;"."your password is:"." &nbsp;&nbsp;"."$pass"."<font color='green' size='6'> "."</font>"."</center>"."<div style='float:top;>";;
echo'<meta content="40;login.php" http-equiv="refresh" />';
}}
else
{
echo"<center>";
echo"<img src='img/error1.png' width='10px' height='10px'><font size=5  color='red'><I>Please enter the correct information!!!</I></font>"."<div style='float:top;>";;
}
mysql_close($con);
}
?>

  </tr>
          </table></td>
            </tr>
       </table>
<p>
</div>
    </section>
<?php include("footer.php");?>	
                                                                        
</body>

</html>
