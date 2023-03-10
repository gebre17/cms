<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>clinic mgt</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
<link rel="stylesheet" type="text/css" href="csss.css">
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
 <img src="img/55yu.jpg" width="280" height="580"></a><br/>  
</div>
</div>

	 <div class="login" style="background-color:#e6e8fa;">
    <FORM ACTION="labresult.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">
<table  bgcolor="#ffffff" style="border:5px solid lightblue;background-color:#e6e8fa;width:650px;height:400px;border-radius:16px;margin-top:-40px;">
<tr>
<td colspan="3" style="padding: 2px 2px 4px;border-radius:5px;width:3000px;height:30px; background:#8FBC8F;"align="center">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Lab Order Form</h1></b></font></b><a href ='doctor.php?key='><font style='color:red;font-weight:40px;float:right;background:#D3D3D3;border-radius:px;margin-top:-54px;margin-right:-4px;height:30px;width;font-size:30px;'>X</font></a></td></h1></b></font></b></td>
</tr>
<tr><td><font color="red">*</font><label>Card number:</label></td><td>
				<?php 
														 $res=mysql_query("select * from  clinicmanamentsystem.patientregistration");
	                                                     echo'<select name="regpatientid">';
														   while($row=mysql_fetch_array($res)){
														   
															  echo "<option style='height:30px;width:280px;border-top:6px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
														
</tr>
<!--
</tr>
<td>Age :</td><td><input name="regage" id="regage" type="text" size"20" pattern="\d{2}" style="border:1px #480000 solid;width:300;height:px;background:#FFFFFF;border-radius:px;" required="required"placeholder="Enter age"></input></td>
</tr>
<tr>
<td>Sex:</td><td><select id='sex' name="regsex" required x-moz-errormessage="Please select one" style="border:1px #480000 solid;width:300;height:35px;background:#FFFFFF;border-radius:px;" required="required" placeholder="sex">
	                    
						<option></option>
						<option>M</option>
	                    <option>F</option>
	                    
	                    
                     </select>
                    </td>
</tr>
-->
<tr>
<td>Blood Test:</td><td><select id='btest' name="regbtest" required x-moz-errormessage="Please select one" style="border:1px #480000 solid;width:300;height:35px;background:#FFFFFF;border-radius:;" required="required" placeholder="blood test" >
	                    
						<option></option>
						<option>Yes</option>
	                    <option>No</option>
	                    
	                    
                     </select>
                    </td>
</tr>
<tr>
<td>Urean Test:</td><td><select id='utest' name="regutest" required x-moz-errormessage="Please select one" style="border:1px #480000 solid;width:300;height:35px;background:#FFFFFF;border-radius:;" required="required" placeholder="urean test" >
	                    
						<option></option>
						<option>Yes</option>
	                    <option>No</option>
	                    
	                    
                     </select>
                    </td>
</tr>
<tr>
<td>Faeces Test:</td><td><select id='ftest' name="regftest" required x-moz-errormessage="Please select one" style="border:1px #480000 solid;width:300;height:35px;background:#FFFFFF;border-radius:;" required="required" placeholder="faeces test" >
	                    
						<option></option>
						<option>Yes</option>
	                    <option>No</option>
	                    
	                    
                     </select>
                    </td>
</tr>
<!--<tr>
<td>Date :</td><td><input name="reginvestdate" type="date" id="adddate" required x-moz-errormessage="Please enter  date of adding" style="border:1px #480000 solid;width:300;height:35px;background:#FFFFFF;border-radius:;" required="required""></input></td>
</tr>-->
<td colspan="2" align="center"><input type="submit" value="Register" name="add" style="color:#0f0f0f;"></input> 
<input type="reset" value="Reset" style="color:#0f0f0f;background:#5d8aa8;"/></td></center>
</table></center> </form> <br><center>
 </fieldset>
</FORM>
<p>
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
 $pid=$_POST['regpatientid'];
$doc=$EID;
//$age=$_POST['regage'];
//$sex=$_POST['regsex'];
$btest=$_POST['regbtest'];
$utest=$_POST['regutest'];
$face=$_POST['regftest'];
$date=date('Y-m-d');;

    $sql="insert into labrequist(CardNumber,ACC_ID,BloodTest,UrinTest,FacesTest,RequistDate)values('$pid','$doc','$btest','$utest','$face','$date')";
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
 </div>
    </section>
                                                                        
</body>
<?php include("footer.php");?>
</html>

