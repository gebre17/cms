<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>BD K clinic MGT System</title>
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
		<b> <a href="dvieweachpatient.php">view each patint</a></b>
	<b><a href="viewregpatient.php">view patient</a></b> 
        <b> <a href="appointmentdate.php">set appt date</a></b> 
		 <b>  <a href="labresult.php">Order Lab</a></b>
					 <b> <a href="viewsearchlab.php">view each lab report</a></b>
				<b> <a href="viewlabresult1.php">view lab result</a></b> 
			     <b> 	<a href="drugorder.php">order drug</a></b>  
					<b> <a href="refer.php">add dignosis Result</a></b>
					<b> <a href="doctorhistory.php">view History</a></b>
					<b> <a href="viewcomment.php">view Nurse result</a></b> 
					<b> <a href="changeuserpassword.php">Change Password</a></b> 
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
<img src="img/doc.jpg" width="270px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
  <img src="img/55yu.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="background-color:#e6e8fa;">
	 
    <FORM ACTION="drugorder.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">
<center>
<table  bgcolor="#ffffff" style="border:5px solid lightblue;margin-top:-45px;background-color:#e6e8fa;width:600px;border-radius:16px;height:200px;">
<tr>
<td colspan="3" style="padding: 2px 2px 4px;border-radius:5px;width:3000px;height:30px; background:#8FBC8F;"align="center">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Drug Order Form</h1></b></font></b><a href ='doctor.php?key='><font style='color:red;font-weight:40px;float:right;background:#D3D3D3;border-radius:px;margin-top:-54px;margin-right:-4px;height:30px;width;font-size:30px;'>X</font></a></td></h1></b></font></b></td>
</tr>
<?php
?>
<tr><td><font color="red">*</font><label>Card number:</label></td><td>
<?php 
 $res=mysql_query("select * from  clinicmanamentsystem.patientregistration");
 echo'<select name="regpatientid">';
   while($row=mysql_fetch_array($res)){
	  echo "<option style='height:30px;width:224px;border-top:6px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
		}
  echo'</select>';
?>
</td>

</tr>
</tr>
<tr>
<td>drug Name :</td><td><textarea name="regdname" type="text" id="dname" size"20" pattern="\D{2,10}" style="border:1px #480000 solid;width:250px;height:40px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Enter Drug name"></textarea></td>
</tr>
<tr>
<td> Drug Amount :</td><td><input name="regamount" type="text" id="damount" size"30" pattern="\d{1,}"required x-moz-errormessage="===>Please enter number"  style="border:1px #480000 solid;width:250px;height:40px;background:#FFFFFF;border-radius:px;"placeholder="Enter drug amount"></input></td>
</tr>
<tr>
<td>DrugAccessIn</td><td><select id='dmy' name="regdmy" required x-moz-errormessage="Please select one" style="width:250px;height:40px;;">
	                    
						<option></option>
						<option>Day</option>
	                    <option>Month</option>
						<option>Year</option>   
                     </select>
<!--<tr>
<td>Prescribed By :</td><td><input name="regprescby" type="text" id="prescby" size"20" pattern="\D{2,10}" style="border:1px #480000 solid;width:250px;height:40px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Enter doctor name"></input></td>
</tr> 
<tr>
<td>Order Date :</td><td><input name="odate" type="date" id="dname"  pattern="\D{2,10}" style="border:1px #480000 solid;width:250px;height:40px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Enter Drug name"></input></td>
</tr>-->
<tr>
<td colspan="2" align="center"><input type="submit" value="save" name="add" style="color:#0f0f0f;background:#5d8aa8;"></input> 
<input type="reset" value="Reset" style="color:#0f0f0f;background:#5d8aa8;"/></td></center>
 </div>
</FORM></td>
 </tr>
          </table>
	 <?php
if(isset($msg)){
$var=(ucfirst($msg));
   $query = "SELECT * FROM account WHERE UserName= '$var'";
   $result_set=mysql_query($query,$con);
while($row=mysql_fetch_array($result_set)){
$EID=$row['ACC_ID'];
$preby=$row['FirstName'].''.''.$row['LastName'];
}
}
?>
<?php
 if(isset($_POST['add']))
 {
 $pid=$_POST['regpatientid'];
$fdname=$_POST['regdname'];
$damount=$_POST['regamount'];
$acessin=$_POST['regdmy'];
//$preby=$_POST['regprescby'];
$odate=date('Y-m-d');;
 $rdate=date("d/m/Y");
    $sql="insert into drugorder(CardNumber,ACC_ID,DrugName,DrugAmount,DrugAccessIn,PrescribedBy,OrderDate)values('$pid','$EID','$fdname','$damount','$acessin','$preby','$odate')";
	$result=mysql_query($sql);// or die(mysql_error());		
  if(!$result){
	  die("error".mysql_error());
    print"<div id='bottom'>"."<h3><img src='IMG/error.png' width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>Please try again here is already exist!</font></h3></div>";
}
else{	
    print "<img src='IMG/tick.png' width='25px' height='25px'><font face='arial' color='green' size='5'>You have successfully registered</font>";
   
 }
}
mysql_close($con);
?> 

        

</div>
    </section>
<?php include("footer.php");?>

</div>
                                                                        
</body>
</html>