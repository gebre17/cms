<?php   
session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
 <script>
 </script>
 <?php

 ?>
<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
   <style>
 th{
 color:green;
 background:silver;
 }
 img{
 height:1px;
 }
</style>
<title>BD  K CLINIC MGT SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style/home.css">
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<script>
  </script>
  </head>
          <div id="body">
          <?php include("header.php");?>
           <div id="headerz">
           <table width="1150px" border="0px">
           <tr><td width="950" height="29" background-color="606060" font-size="10px" margin-top="-15">
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
<b> <a href="login.php?loged">Logout</a>  </b>    
			</li>	
				</p>
				<?php
				}
				else{
				header("location:login.php");
				}
				?>
									   		 
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
<img src="img/clerk.jpg" width="270px" height="590">

				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
  <img src="img/clerk1.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="font-size:16px;color:black;background-color:white;">
	 
<br><br><br>  
<?php 
$result = mysql_query("SELECT * FROM patientregistration ORDER BY RegistrationDate ASC");
echo" <table border='5' style='width:520px;height:36px;margin-left:-30px;background-color:;margin-top:-90;border:6px solid black;border-radius:10px;' align='center'>
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
<h3><th><a href='clerk.php'><font style='color:red;font-size:25px;;float:right;margin-top:-8px;background:;height:40px;'>X</th>";
while($row = mysql_fetch_array($result))	
  {
  $cardnum = $row['CardNumber'];
$fn = $row['FirstName'];
$mname=$row['MiddleName'];
$lname=$row['LastName'];
$sex=$row['Sex'];
$zone = $row['Zone'];	
$woreda = $row['Woreda'];
$kebele = $row['Kebele'];
$phone = $row['PhoneNumber'];
$nation = $row['Nationality'];
$bdate = $row['BirthDate'];
$regdate = $row['RegistrationDate'];
$status=$row['status'];
//$photo = $row['Photo'];
            print ("<tr>");
            print ("<td>" .  $cardnum . "</td>");
            print ("<td>" . $fn . "</td>");	
            print ("<td>" . $mname . "</td>");	
	        print ("<td>" . $lname . "</td>");
	        print ("<td>" . $sex . "</td>");
	        print ("<td>" . $zone . "</td>");
	        print ("<td>" . $woreda. "</td>");
	        print ("<td>" . $kebele. "</td>");
	        print ("<td>" . $phone . "</td>");
	        print ("<td>" . $nation . "</td>");
	        print ("<td>" . $bdate . "</td>");
	        print ("<td>" . $regdate . "</td>");
	        print ("<td>" . $status . "</td>");		 		
	// ("<td>"."<img src=".$photo.">" . "</td>");
		print ("<td style='background:lightblue;width:1px;'>"."</td>");

	}
	/*
print("<td align = 'center' width = '1'><a href = 'viewempdetail.php?key=".$UID."'><img width='1px' height='5px' src = 'IMG/aaa.png' title='View Detail'></img></a></td>
		
		<td align = 'center' width = '1'><a href = 'deleteemp.php?key=".$UID."'><img width='1px' height='1px' src = 'IMG/remove.png' onclick='isdelete();' title='Delete'></img></a></td>")
	*/	
?>		
		</tr>
<?php
print( "</table>");
mysql_close($con);
?>

</div>
    </td><!--center end-->
    <p>
</section>
   <?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>
