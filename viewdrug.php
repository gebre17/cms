
<?php   
 session_start();
 include("config/config.php");
 //echo "User".$_SESSION['user'];
 if(isset($_SESSION['emp_id']))
 {
  $username=$_SESSION['emp_id'];
 } else {
 ?>
 <?php
  echo "<script>window.location='login.php';</script>";
 }
 ?>


<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>UOG Hospital</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />
       <link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />el="stylesheet" type="text/css" href="index's_file/globalcss.css" />

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
}-->
#header {
background: #800020;
}
#headerz {
background: url(img/esa.jpg);
}
#headerz li a {
	color: white;
	font-size: 15px;
	padding: 40px ;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
}
#headerz li a:hover, #headerz li.selected a {
	background: url(img/hover.png);
	color: red;
	text-transform: lowercase;
	font-size: 26px;
	padding: 10px  ;
	}
.login{
background: url(img/bgtable.jpg);
}
#footer {
background: url(img/esa.jpg);
font-family: Lucida Calligraphy;
}
#content {
background:#778899;
}
#body{
width:1400px;
height:790px;
margin-left:-8px;
background: black;
}
#left_colomn{
background: #778899;
width: 280px;
float: left;
height: 600px;
}
#right_colomn{
background:#778899;
width: 280px;
float: right;
height: 600px;
}

#center{
 border-radius:30px 0px 0px 0px;
-moz-border-radius: 20px 20px 0px 0px;
border-color:#ccccff;
border-style:groove;
margin-left:0px;
margin-top: -129px;
background: cyan;
width: 140px;
float: left;
height: 74px;
}
#center img{
 border-radius:30px 0px 0px 0px;
-moz-border-radius: 20px 20px 0px 0px;
}
#contentarea1{
background:#bdb76b;
width: 583px;
float: center;
height: 597px;
	
}

#zz{
background: url(img/esa.jpg);
}
#yy{
width: 267px;
float: left;
height: 590px;
margin-top:5px;
margin-left:10px;
border-color:#ccccff;
border-style:groove;
}
</style>
</head>
<body>

<div id="body">
<div id="content">

<div id="header"style="background-color: #800020;">
<img src="img/60.jpg" width="60" height="30">
<h1 style="font-family:Lucida Calligraphy;"> UOGHP Record Management system</h1>
</div>
<div id="headerz">
<table width="1150px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" font-size="10px" margin-top="-15">
	<p><li>
 <a href="viewdrug.php">VIEW DRUG</a>
 <a href="apptdate.php">VIEW APPT DATE</a>
 <a href="patref.php">VIEW REFER</a>
 <a href="COMMENTS.php">give comment</a>
 <a href="changeuserpassword.php">Change Password</a>
<a href="logout.php" onclick="islogout()">Logout</a> 
</li></p>  

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
<img src="img/pat.jpg" width="270px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
  <img src="img/pa1.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="background-color:#bdb76b;">
		
		
		 <form  action="viewdrug.php" method="POST">
		 
	   <br>
		   
			<h1 style="color:blue">Enter Patient MRN:</h1><input type="text" name="Client_ID" id="course" style="border:1px #480000 solid blue;width:200px;height:32px;background:white;border-radius:500px;"/>
		     <br><br>
     <input type="submit" id="button" class="button" name="button" value="Search" style="width:20%;height:26px;color:#2E8B57;text-transform:capitalize;Font-weight:bolder;font-size:15px;color:#0f0f0f;background:#5d8aa8;" />
	  		          
		
 <?php
   if(isset($_POST['button']))
   {
         $code=$_POST['Client_ID'];
   $sql="select * from orderdrug where Client_ID='$code'";
	$re=mysql_query($sql);
	while($row=mysql_fetch_array($re)){
$Client_ID=$row['Client_ID'];
 $Client_FName=$row['Client_FName'];
 $Client_LName=$row['Client_LName'];
 $Sex=$row['Sex'];
 $Age=$row['Age'];
 $Prescrived_by=$row['Prescrived_by'];
 $dname=$row['dname'];
 $amount=$row['amount'];
 $access=$row['access_in'];
 $quan=$row['quantity'];
	}
   
    
	if($_POST['Client_ID']=="")
	{
	echo "<img src='IMG/error.png' height='8%' align='bottom'><font type='Verdana' size='4' color='red'>Please enter the patient_id!!</font>";
	 echo' <meta content="15;viewdrug.php" http-equiv="refresh" />'; 
	}
	else
	{
    $get= @mysql_query("SELECT * FROM orderdrug WHERE Client_ID='$code' ")or die(mysql_error());
    $num =@mysql_num_rows($get);
	if($num>=1)
     {
    for($i=0;$i<$num;$i++)                                        
    {
   
     $Ddosage= @mysql_result($get,$i,'Client_ID');
    }
	echo "<table valign='top' align='center' width:'150px';height:'250px';border-radius:'16px';border:'3px solid blue';background-color:'cyan'>";
	echo "<tr>";
	echo "<th colspan='2'>"."<I><h2>Drug Detail</h2></I><br>"."</th>";
	echo "<br>";
	echo "<br>";
	echo "</tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:40%;color:white;background-color:black;border-radius:5px;float:left'>"."<div align='left'></font><I>MRN:</I></div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_type' id='txt_type' value='$Client_ID' style='width:115px;height:20px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:40%;color:white;background-color:black;border-radius:5px;float:left'>"."<div align='left'></font><I>First Name:</I></div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_name' id='txt_name' value='$Client_FName' style='width:115px;height:20px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:40%;color:white;background-color:black;border-radius:5px;float:left'>"."<div align='left'></font><I>Last Name:</I></div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_code' id='txt_code' value='$Client_LName' style='width:115px;height:20px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:40%;color:white;background-color:black;border-radius:5px;float:left'>"."<div align='left'></font><I>Sex:</I></div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_brand' id='txt_brand' value='$Sex' style='width:115px;height:20px;background:#FFFFFF;border-radius:2px;'>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:40%;color:white;background-color:black;border-radius:5px;float:left'>"."<div align='left'></font><I>Age:</I></div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_model' id='txt_model' value='$Age' style='width:115px;height:20px;background:#FFFFFF;border-radius:2px;'>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:40%;color:white;background-color:black;border-radius:5px;float:left'>"."<div align='left'></font><I>Presc_by:</I></div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_brand' id='txt_brand' value='$Prescrived_by' style='width:115px;height:20px;background:#FFFFFF;border-radius:2px;'>"."</td>";
	echo "</tr>";
echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:40%;color:white;background-color:black;border-radius:5px;float:left'>"."<div align='left'></font><I>Drug Name:</I></div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_brand' id='txt_brand' value='$dname' style='width:115px;height:20px;background:#FFFFFF;border-radius:2px;'>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:40%;color:white;background-color:black;border-radius:5px;float:left'>"."<div align='left'></font><I>Amount:</I></div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_brand' id='txt_brand' value='$amount' style='width:115px;height:20px;background:#FFFFFF;border-radius:2px;'>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:40%;color:white;background-color:black;border-radius:5px;float:left'>"."<div align='left'></font><I>Access in:</I></div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_brand' id='txt_brand' value='$access' style='width:115px;height:20px;background:#FFFFFF;border-radius:2px;'>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:40%;color:white;background-color:black;border-radius:5px;float:left'>"."<div align='left'></font><I>Quantity:</I></div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_brand' id='txt_brand' value='$quan' style='width:115px;height:20px;background:#FFFFFF;border-radius:2px;'>"."</td>";
	
	echo "</tr>";
	
echo' <meta content="50;viewdrug.php" http-equiv="refresh" />'; 
	echo "</table>";
	}
	else
	{
print "<h3><img src='IMG/error.png'  width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>The patient MRN was not exist!</font></h3>";
	  echo' <meta content="10;viewdrug.php http-equiv="refresh" />'; 
	}
   }}

 ?>	

 </form>
 <form  action="viewdrug.php" method="POST">
<?php
   if(isset($_POST['viewdrug']))
   {
    $code=$_POST['Client_ID'];
   	if($_POST['Client_ID']=="")
	{
	echo "<img src='IMG/error.png' height='8%' align='bottom'><font type='Verdana' size='4' color='red'>Please enter the patient id!!</font>";
	 echo' <meta content="10;viewdrug.php" http-equiv="refresh" />'; 
	}
	else{
	
	$redate=date("d/m/Y");
	$Client_ID=$_POST['Client_ID'];
	$sql="select * from orderdrug where Client_ID='$Client_ID'";
	$re=mysql_query($sql);
	$sqs=mysql_num_rows($re);
	if($sqs>0)
	{
	
	while($row=mysql_fetch_array($re)){
	$Client_ID=$row['Client_ID'];
   }}}}
?>		
</form>	
</td><!--center end-->



<p>

    </section>
<div id="footer" align="center">  <font color="#fef943">&copy;All Rights Reserved UOG Hospital patient record management system 2017.</font></div>

</div>
</div>
                                                                        
</body>
</html>	 
