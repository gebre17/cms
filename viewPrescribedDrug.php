<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<head>
<link rel="stylesheet" type="text/css" href="style/home.css">
<link rel="stylesheet" type="text/css" href="csss.css">
</head>
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
	  </div>
	  </td>

</tr>
</table>
				
		</div>

 <section class="container">

 <div id="center">
<img src="img/UU.jpg" width="140" height="75">
</div>
 
<div id="left_colomn">
<div id="yy">
<img src="img/pr.jpg" width="265px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
 <img src="img/pr1.jpg" width="280" height="580"></a><br/>  
</div>
</div>
	 <div class="login" style="background-color:white;">
	 
<?php
$result = mysql_query("SELECT * FROM drugorder");
echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th rowspan='10000000000000000000'style='color:white; background:brown;'><center>Drug Order Info. To The Card officer</center></th>
<th>CardNumber</th>
<th>USER_ID </th>
<th>DrugName</th>
<th>DrugAmount</th>
<th>PrescribedBy </th>
<th>OrderDate </th>

<th align = 'center'rowspan='10000000000000000000' width = '1'><a href = 'clerk.php?key='><font style='color:blue;font-weight:30px;float:right;margin-top:-4px;background:lightblue;height:120px;width;'>close</font></a></td>
</tr>";
while($row = mysql_fetch_array($result))
	
  {
$ctrl = $row['CardNumber'];	
  print ("<tr>");
   print ("<td>" . $row['CardNumber'] . "</td>");
 print ("<td>" . $row['ACC_ID'] . "</td>");	   
   print ("<td>" . $row['DrugName'] . "</td>");	
   print ("<td>" . $row['DrugAmount'] . "</td>");	
	     print ("<td>" . $row['PrescribedBy'] . "</td>");
		     print ("<td>" . $row['OrderDate'] . "</td>")."</tr>";

		
?>
		
<?php
  }
 
print( "</table>");
mysql_close($con);
?>
		
<?php
  
?>

</div>
    


</td>




<p>

    </section>
<?php include("footer.php");?>
</div>
</div>
                                                                        
</body>

</html>

