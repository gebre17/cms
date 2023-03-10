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
<div id="body">
<?php include("header.php");?>
<div id="headerz">
<table width="1150px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" font-size="10px" margin-top="-15">
	<p><li><b><a href="nursepatientview.php">view each patient</a></b>
	<a href="nurseviewparecord.php">view patient</a></b>
				<a href="nurcingservice.php">add patient result</a>
					
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
     <FORM ACTION="nurcingservice.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">
<!--<caption align="center"><h1 style="color:#000066;font-family:Times New Roman;"> nurese's treatment result form</h1></caption>-->
<center>
<table  bgcolor="#e6e8fa" style="border:5px solid black;background-color:#e6e8fa;width:700px;height:300px;border-color:lightblue;border-radius:16px">
<tr>
<td colspan="3" style="padding: px px px;border-radius:5px;width:3000px;height:30px; background:#8FBC8F;">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Nurese's Treatment Result</h1></b></font></b><a href ='nurse.php?key='><font style='color:red;font-weight:40px;float:right;background:#D3D3D3;border-radius:px;margin-top:-54px;margin-right:-4px;height:30px;width;font-size:30px;'>X</font></a></td></h1></b></font></b></td>
</tr>
<tr><td><font color="red">*</font><label>Card number:</label></td><td>
				<?php 
														 $res=mysql_query("select * from patientregistration where status='waiting'");
	                                                     echo'<select  name="regpatientid" required x-moz-errormessage="Please select the one from the list" style="width:300px;height:40px; margin-left=20px;">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:25px;width:280px;border-top:6px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
													
</tr>
<tr>
<td>temprature :</td><td><input name="temp" type="text" id="first" size"20" pattern="\d{1,12}" style="border:1px #480000 solid;width:290px;height:40px;background:#FFFFFF;border-radius:px;" required="required"></input></td>
</tr>
<tr>
<td>weight :</td><td><input name="wt" type="text" id="last" size"20" pattern="\d{.1,12}" style="border:1px #480000 solid;width:290px;height:40px;background:#FFFFFF;border-radius:px;" required="required"></input></td>
</tr>
<tr>
<td>blood type :</td><td><select id='B' name="BT" required x-moz-errormessage="Please select the one from the list" style="width:290px;height:40px; margin-left=20px;">
	                    
						<option></option>
						<option>A</option>
	                    <option>B</option> 
						<option>AB</option>	
						<option>O</option>						
                     </select>
                   </td>
</tr>

<tr><td colspan=2 align="center">
<input type="submit" value="Register" name="add"style="color:#0f0f0f;background:#5d8aa8;"/> 
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
 if(isset($_POST['add']))
 {
 $card=$_POST['regpatientid'];
$temp=$_POST['temp'];
$weight=$_POST['wt'];
$blood=$_POST['BT'];
$resdate=date('Y-m-d');
    $sql="insert into nurcingservice(CardNumber,ACC_ID,Temprature,Weight,BloodType,DateOfTreatment)values('$card','$EID','$temp','$weight','$blood','$resdate')";
	$result=mysql_query($sql);// or die(mysql_error());		
  if(!$result){
	  die("error".mysql_error());
    print"<div id='bottom'>"."<h3><img src='IMG/error.png' width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>Please try again here is already exist!</font></h3></div>";
}
else{	
    print "<font face='arial' color='green' size='5'>You have successfully registered</font>";
   
 }
}
mysql_close($con);
?> 
</td></tr>
</table> 
</FORM>
 </section>
 <?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>

