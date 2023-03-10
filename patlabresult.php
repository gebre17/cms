<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>clinic system</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
<link rel="stylesheet" type="text/css" href="csss.css">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />
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
	<a href="vieweachlaborder.php">VIEW Each ORDER</a>
				<a href="viewlaborder.php">VIEW LAB ORDER</a>
             <a href="patlabresult.php">ADD LAB RESULT</a>
			 			 <a href="viewregipatient.php">VIEW registered patient</a>
						  <a href="labhistory.php">view LAB history</a>
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
<img src="img/doct.jpg" width="270px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
 <img src="img/lab.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="background-color:#bdb76b;">
     <FORM ACTION="patlabresult.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">
<center>
<table   bgcolor="#ffffff" style="border:5px solid lightblue;border-left:20px;background-color:#e6e8fa;width:700px;height:300px;border-radius:15px;align:center;margin-left:20px;margin-right:-90px;">
 <tr>
<td colspan="3" style="padding: 2px 2px 4px;border-radius:5px;width:3000px;height:30px;background:#2F4F4F" align="center">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Lab Result  Form<a href ='labtech.php?key='><font style='color:red;font-weight:40px;float:right;background:pink;border-radius:px;margin-top:-6px;margin-right:-70px;height:50px;width;font-size:30px;'>X</font></a></td></h1></b></font></b></td>
</tr>
<tr><td><font color="red">*</font><label>Card number:</label></td><td>
				<?php 
														 $res=mysql_query("select * from clinicmanamentsystem.bill where status='Lab Test payment'");
	                                                     echo'<select style= "background:pink;"name="regpatientid">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:25px;width:270px;border-top:6px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
													
</tr>
<!--
<tr>
<td>First Name :</td><td><input name="regfirstname" type="text" id="first" size"20" pattern="\D{2,15}" style="border:1px #480000 solid;width:280px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter FName"></input></td>
</tr>
<tr>
<td>Last Name :</td><td><input name="reglastname" type="text" id="last" size"20" pattern="\D{2,15}" style="border:1px #480000 solid;width:280px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter LName"></input></td>
</tr>
<tr>
<td>Sex</td><td><input type="radio"value="male" name="regsex" >male<input type="radio"value="femal" name="regsex">femal<br></td>
</tr>
<td>Age :</td><td><input name="regage" id="age" type="text" size"20" pattern="\d{2}" style="border:1px #480000 solid;width:280px;height:25px;background:#FFFFFF;border-radius:5px;" required="required"placeholder="Enter age"></input></td>
</tr> -->
<tr>
<td>Diagnosis result :</td><td><textarea name="regdiagnos" type="text" id="diag" size"20" pattern="\D{2,100}" style="border:1px #480000 solid;width:300px;height:55px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter the diagnosis info"></textarea></td>
</tr><!--
<tr>
<td>Treatment Date :</td><td><input name="reginvestdate" type="date" id="investdate" required x-moz-errormessage="Please enter  date of adding" style="border:1px #480000 solid;width:280px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="add treatment date"></input></td>
</tr>-->
<tr><td colspan=2 align="center">
<input type="submit" value="Save" name="add"style="color:#0f0f0f;background:#5d8aa8;"/> <input type="reset" value="Reset"style="color:#0f0f0f;background:#5d8aa8;"/>
</td></tr>
</table> 
</FORM>
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
//$fname=$_POST['regfirstname'];
//$lname=$_POST['reglastname'];
//$sex=$_POST['regsex'];
//$age=$_POST['regage'];
$dignosis=$_POST['regdiagnos'];
$rdate=date('Y-m-d');
    $sql="insert into labresult(CardNumber,ACC_ID,TreatmentResult,TreatmentDate ) values('$acardnum','$EID','$dignosis','$rdate')";
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
<p>

    </section>
<?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>

