 <?php 
	session_start();
	include("connection.php");
	mysql_select_db("ClinicManamentSystem");
    if(isset($_GET['loged']))
	       {
		   header("Location:login.php");
		    session_destroy();
		 }
	?>
<script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-3855518-1");
    pageTracker._initData();
    pageTracker._trackPageview();
</script>
<html>
  <html lang="en-US" xml:lang="en-US" xmlns=""/>
      <head>
      <title>bd  Kidanemiret clinic</title>
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
	  </head>
             <div id="body">
              <?php include("header.php");?>
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
    if(document.getElementById("password").value =="")
   {
    alert('first fill the each text fields!!'); 
    document.getElementById("password").focus();
    return false;
	
   }
   }

   </script>
<!--<td width="650" valign="top" height="700"><br><br>-->
	<center>
	  <br><br>
	 <table border="1" cellpadding="0" cellspacing="0" width="700"height="-1"style="margin-top:-60px;Background-color:#e6e8fa;">
     <tr>
<td style="padding: 2px 2px 4px;border-radius:5px;" align="center" bgcolor="white-gray;">
<b><font face="timesnewroman" size="1" color="#686868"><b>
<br>
<h1 style="color:white;font-family:Times New Roman;size:6px;">Login Form</h1></b></font></b></td>
</tr>
<tr>
<td><form method="post" action="login.php">
<center><table id="ap_table_lost" height="120px">
<tr>
<td><font face="verdana,arial" size="-1"style="font-size:15px;color:green;">User Name:</font></td>  
<td><input name="username" type="text" id="username" size="30" required x-moz-errormessage="Please enter user name" placeholder='Enter user name'></td></tr>
<tr>

<td><font face="verdana,arial" size="-1"style="font-size:15px;color:green;">Password:</font></td>  
<td><input name="password" type="password" id="accid" size="30" placeholder='Enter Your password' required x-moz-errormessage="Enter Your valid User Name"></td></tr>
<tr>
<td>&nbsp;</td>
  <td><font face="verdana,arial" size="-1" ><input style="font-size:20px;"value="Login" name="submitMain" type="submit" Onclick="return check(this.form);"/>
  </font></td>
  <td><font face="verdana,arial" size="-1" ><input style="font-size:20px;margin-left:-250px;"value="Reset" name="submitMain" type="reset" Onclick="return check(this.form);"/>
  </font></td>
  </tr></center>
</table>
 <p align="center"><h2 style="color:red;font-family:Times New Roman;">
		   <a href="forgotp.php"><font style="color:red"></a></h2><p>
</center>
</form>
 <?php
 if(isset($_POST['submitMain']))
 {
   $username =$_POST['username'];
   $password=md5(($_POST['password']));
   $query = "SELECT * FROM account WHERE UserName= '$username' AND Password ='$password'";
  ///
  $result_set=mysql_query($query);
if(!$result_set){
die("query is failed".mysql_error());
}
$row=mysql_fetch_array($result_set);
$stat=$row['status'];
if(mysql_num_rows($result_set)>0)
{
if($stat==0)
{
$role=$row['Role'];
$_SESSION["username"]=$username;
if($role=="Doctor")
{
$_SESSION['role']=$row['Role'];
$_SESSION["username"]=$username;
echo "<script>window.location='doctor.php';</script>";
}
else if($role=="Admin")
{
$_SESSION['role']=$row['Role'];
echo "<script>window.location='admin.php';</script>";
}
else if($role=="Manager")
{
$_SESSION['role']=$row['Role'];
echo "<script>window.location='manager.php';</script>";
}
else if($role=="Receptionist")
{
$_SESSION['role']=$row['Role'];
echo "<script>window.location='clerk.php';</script>";
}
else if($role=="Pharmacist")
{
$_SESSION['role']=$row['Role'];
echo "<script>window.location='pharmacist.php';</script>";
}
else if($role=="LabTech")
{
$_SESSION['role']=$row['Role'];
echo "<script>window.location='labtech.php';</script>";
}
else if($role=="Nurse")
{
$_SESSION['role']=$row['Role'];
echo "<script>window.location='nurse.php';</script>";
}
}}
else
{
    print "<img src='IMG/error1.png' align='center' width='8px' height='5px'><I><font face='timesnew roman' color='#FF0000' size='4'> please Enter corrrect user name and password !</font></I>";

}


if($stat==1)
   {
   print "<img src='IMG/error1.png' align='center' width='8px' height='5px'><I><font face='timesnew roman' color='#FF0000' size='4'> Your Account is deactivated please contact to system admin !</font></I>";

   }}

mysql_close($con);

?>	
  </tr></td>
          </table>
</div>
    </section>
<?php include("footer.php");?>	
                                                                        
</body>
</html>
