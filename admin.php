<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>BD clinic</title>
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
<img src="img/well.jpg" width="300px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
  <img src="img/wadmin.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="font-family:Lucida Calligraphy;color:black;">
	
<p>
	 <?php
      if(isset($msg)){
      $var=(ucfirst($msg));
      $query = "SELECT * FROM account WHERE UserName= '$var'";
       $result_set=mysql_query($query,$con);
       while($row=mysql_fetch_array($result_set)){
        $first=$row['FirstName'];
         $last=$row['LastName'];
}
echo "Welcome: System Admin"."           ".$first."          ".$last ;
}
?>
 </p>

    </section>
		<?php include("footer.php");?>

</div>
</div>
                                                                        
</body>
</html>

