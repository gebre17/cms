
	<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>clinic</title>
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
<b> <a href="logout.php?loged">Logout</a>  </b>    
			</li>	
				</p>
				<?php
				}
				else{
				header("location:login.php");
				}
				?>
				
				
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
<img src="img/pr.jpg" width="270px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
<img src="img/pr1.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="background-color:#bdb76b;">
		
		
		 <form  action="receptionupdatepatient.php" method="POST">
		 
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
               <tr><td><pre><font color="red">*</font><label>Enter Card number:</label></pre></td><td>
				<?php 
														 $res=mysql_query("select * from  clinicmanamentsystem.patientregistration where status='treated'");
	                                                     echo'<select style="margin-top:-53px;" name="Client_ID">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:40px;width:180px;margin-top:-5px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
													


    <td> <input type="submit" id="button" class="button" name="search" value="activateCard" style="width:110%;height:40px;color:red;text-transform:capitalize;Font-weight:bolder;font-size:20px;border-top:6px;color:#0f0f0f;background:#5d8aa8;title:Enter the patient MRN;" /><td><a href = 'clerk.php?key='><font style='color:black;font-size:20px;align:center;float:right;border-radius:5px;margin-right:-210px;height:32px;background:#778899;margin-top:-40px;width:60px;'>Cancel</font></a></td> 		            		          
	</td>
	
    <td> <input type="submit" id="button" class="button" name="viewdetail" value="View Detail" style="width:100%;height:40px;color:red;text-transform:capitalize;Font-weight:bolder;font-size:18px;border-top:6px;color:#0f0f0f;background:#5d8aa8;title:Enter the patient MRN;" /> 		            		          
	</td>
	</tr>	
	
 </form></table>
 <?php
 
   if(isset($_POST['search']))
   {
   $code=$_POST['Client_ID'];
   $sql="select*from patientregistration where CardNumber='$code'";
	$re=mysql_query($sql);
	while($row=mysql_fetch_array($re)){
$cardnum = $row['CardNumber'];
$fn = $row['FirstName'];
$mname=$row['MiddleName'];
$lname=$row['LastName'];
$sex=$row['Sex'];
$zone=$row['Zone'];
$woreda=$row['Woreda'];
$Kebele=$row['Kebele'];				
$phone = $row['PhoneNumber'];
$nation = $row['Nationality'];
$bdate = $row['BirthDate'];
$regdate = $row['RegistrationDate'];
$status=$row['status'];
$photo = $row['Photo'];	
	}
	if($_POST['Client_ID']=="")
	{
	echo "<img src='IMG/error.png' height='8%' align='bottom'><font type='Verdana' size='4' color='red'>Please enter the patient_id!!</font>";
	 echo' <meta content="10;receptionupdatepatient.php" http-equiv="refresh" />'; 
	}
	else
	{
    $get= @mysql_query("SELECT*FROM patientregistration WHERE CardNumber='$code' AND status='treated'")or die(mysql_error());
    $num =@mysql_num_rows($get);
	if($num>=1)
     {
    for($i=0;$i<$num;$i++)                                        
    {
   
     $Ddosage= @mysql_result($get,$i,'$sql','CardNumber');
    }
	echo" <table border='5' style='width:520px;height:36px;background-color:white;margin-top:-75;margin-left:-25px;border:6px solid black;border-radius:10px;' align='center'>
<tr>
<th colspan='1000000'style= 'font-size:26px; background:silver;color:green;'>  Card Activation of treated patients for retreatment Informations  <a href = 'receptionupdatepatient.php?key='><font style='color:red;font-weight:30px;float:right;background:;font-size:20px;width;'>X</font></a></th></tr>
	<tr>
<th>Card Number</th>
<th>First Name</th>
<th>Middle  Name</th>
<th>Last Name</th>
<th>Sex</th>
<th>Zone</th>
<th>Woreda</th>
<th>Kebele</th>
<th>Phone Number</th>
<th>Nationality</th>
<th>Birth Date</th>
<th>Reg Date</th>
<th>status</th>
<th>Action</th>
<th align = 'center' width = '1'><a href ='receptionupdatepatient.php?key='><font style='color:red;font-weight:40px;float:right;margin-top:-2px;background:;border-radius:1px;height:;width:80px;font-size:30px;'>X</font></a></td></tr>";
	
	//echo "<th colspan='2'>"."Drug Detail"."</th>";
			 print ("<tr>");
		     print ("<td>" .  $cardnum . "</td>");
		     print ("<td>" . $fn . "</td>");	
			 print ("<td>" . $mname . "</td>");	
			 print ("<td>" . $lname . "</td>");
			 print ("<td>" . $sex . "</td>");
			 print ("<td>" . $zone . "</td>");
			 print ("<td>" . $woreda. "</td>");
			 print ("<td>" .$Kebele . "</td>");
			 print ("<td>" . $phone . "</td>");
			 print ("<td>" . $nation . "</td>");
			 print ("<td>" . $bdate . "</td>");
			 print ("<td>" . $regdate . "</td>");
			 print ("<td>" . $status . "</td>");
	if($status=="waiting"){
					echo"<td style='height:30px;' align = 'center' width = '1'><a href ='receptionwait.php?enable=".$cardnum."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' title='enabled' onclick='isendis();'>Undone</span></a></td>";
				}
				else
				{
				echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'receptiontreatment.php?disable=". $cardnum."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' title='disabled' onclick='isendis();'>Done</span></a></td>";
				}
				  
				 
		print ("<td style='background:lightblue;width:1px;'>"."</td>");

	
echo' <meta content="50;receptionupdatepatient.php" http-equiv="refresh" />'; 
	echo "</table>";
	}
	else
	{
print "<h3><img src='IMG/error.png'  width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>The patient CardNumber was not exist!</font></h3>";
	  echo' <meta content="10;receptionupdatepatient.php http-equiv="refresh" />'; 
	}
   }}

 ?>	

 </form>
 <form  action="receptionupdatepatient.php" method="POST">	
 <?php
 if(isset($_POST['viewdetail']))
   {
 	echo" <table border='5' style='width:520px;height:36px;background-color:white;margin-top:-75;margin-left:-25px;border:6px solid black;border-radius:10px;' align='center'>
<tr>
<th colspan='1000000'style= 'font-size:26px; background:silver;color:green;'>  Card Activation of treated patients for retreatment Informations  <a href = 'receptionupdatepatient.php?key='><font style='color:red;font-weight:30px;float:right;background:;font-size:20px;width;'>X</font></a></th></tr>
<th>Card Number</th>
<th>First Name</th>
<th>Middle  Name</th>
<th>Last Name</th>
<th>Sex</th>
<th>Zone</th>
<th>Woreda</th>
<th>Kebele</th>
<th>Phone Number</th>
<th>Nationality</th>
<th>Birth Date</th>
<th>Reg Date</th>
<th>status</th>
<th>Action</th>
<th </tr>";
	
   $sql="select*from patientregistration where status='treated'";
	$re=mysql_query($sql);
	while($row=mysql_fetch_array($re)){
$cardnum = $row['CardNumber'];
$fn = $row['FirstName'];
$mname=$row['MiddleName'];
$lname=$row['LastName'];
$sex=$row['Sex'];
$zone=$row['Zone'];
$woreda=$row['Woreda'];
$Kebele=$row['Kebele'];				
$phone = $row['PhoneNumber'];
$nation = $row['Nationality'];
$bdate = $row['BirthDate'];
$regdate = $row['RegistrationDate'];
$status=$row['status'];
$photo = $row['Photo'];	
	//echo "<th colspan='2'>"."Drug Detail"."</th>";
			 print ("<tr>");
		     print ("<td>" .  $cardnum . "</td>");
		     print ("<td>" . $fn . "</td>");	
			 print ("<td>" . $mname . "</td>");	
			 print ("<td>" . $lname . "</td>");
			 print ("<td>" . $sex . "</td>");
			 print ("<td>" . $zone . "</td>");
			 print ("<td>" . $woreda. "</td>");
			 print ("<td>" .$Kebele . "</td>");
			 print ("<td>" . $phone . "</td>");
			 print ("<td>" . $nation . "</td>");
			 print ("<td>" . $bdate . "</td>");
			 print ("<td>" . $regdate . "</td>");
			 print ("<td>" . $status . "</td>");
			 	if($status=="waiting"){
					echo"<td style='height:30px;' align = 'center' width = '1'><a href ='receptionwait.php?enable=".$cardnum."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' title='enabled' onclick='isendis();'>Undone</span></a></td>";
				}
				else
				{
				echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'receptiontreatment.php?disable=". $cardnum."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' title='disabled' onclick='isendis();'>Done</span></a></td>";
				}}
				  
				 
		print ("<td style='background:lightblue;width:1px;'>"."</td>");

	
echo' <meta content="50;receptionupdatepatient.php" http-equiv="refresh" />'; 
	echo "</table>";
			 
	echo "</table>";
}
 ?>	 
</form>	
</td><!--center end-->



<p>

    </section>

                                                                        
</body>
	<?php include("footer.php");?>

</html>	 
