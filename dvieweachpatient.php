
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
		
		 <form  action="dvieweachpatient.php" method="POST">
		 
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
               <tr><td><pre><font color="red">*</font><label>Enter Card number:</label></pre></td><td>
				<?php 
														 $res=mysql_query("select * from patientregistration where status='waiting'");
	                                                     echo'<select style="margin-top:-53px;" name="Client_ID">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:40px;width:220px;margin-top:-5px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
													


    <td> <input type="submit" id="button" class="button" name="search" value="view Each" style="width:105%;height:40px;color:red;text-transform:capitalize;Font-weight:bolder;font-size:20px;border-top:6px;color:#0f0f0f;background:#5d8aa8;title:Enter the patient MRN;" /><td><a href = 'doctor.php?key='><font style='color:black;font-size:26px;float:right;border-radius:10px;margin-right:-220px;height:40px;background:#778899;margin-top:-37px;width:90;'>Cancel</font></a></td> 		            		          
	</td>
	 <td> <input type="submit" id="button" class="button" name="viewdetail" value="View Detail" style="width:125%;height:40px;color:red;text-transform:capitalize;Font-weight:bolder;font-size:20px;border-top:6px;color:#0f0f0f;margin-left:-30px;background:#5d8aa8;title:Enter the patient MRN;" />	            		          
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
	 echo' <meta content="10;dvieweachpatient.php" http-equiv="refresh" />'; 
	}
	else
	{
    $get= @mysql_query("SELECT*FROM patientregistration WHERE CardNumber='$code' AND status='waiting'")or die(mysql_error());
    $num =@mysql_num_rows($get);
	if($num>=1)
     {
    for($i=0;$i<$num;$i++)                                        
    {
   
     $Ddosage= @mysql_result($get,$i,'$sql','CardNumber');
    }
	echo" <table border='5' style='width:520px;height:36px;background-color:white;margin-top:-75;border:6px solid black;border-radius:10px;' align='center'>
<tr>
<tr>
<th colspan='1000000'style= 'font-size:26px; background:silver;color:green;'> Each patient Information that ready to takes treatment/waiter/<a href ='dvieweachpatient.php?key='><font style='color:red;font-weight:40px;float:right;margin-top:-2px;background:;border-radius:1px;height:;width:80px;font-size:30px;'>X</font></a> </th></tr>
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
</tr>";
	
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
					echo"<td style='height:30px;' align = 'center' width = '1'><a href ='untreatedpatient.php?enable=".$cardnum."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' title='enabled' onmouseover='isendis();'>Done</span></a></td>";
				}
				else
				{
				echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'treatedpatient.php?disable=". $cardnum."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' title='disabled' onmouseover='isendis();'>Untreated</span></a></td>";
				}
		print ("<td style='background:lightblue;width:1px;'>"."</td>");

	
echo' <meta content="50;dvieweachpatient.php" http-equiv="refresh" />'; 
	echo "</table>";
	}
	else
	{
print "<h3><img src='IMG/error.png'  width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>The patient CardNumber was not exist!</font></h3>";
	  echo' <meta content="10;dvieweachpatient.php http-equiv="refresh" />'; 
	}
   }}

 ?>	
 <?php
   if(isset($_POST['viewdetail']))
   {
    	echo" <table border='5' style='width:520px;height:36px;background-color:white;margin-top:-75;margin-left:-28px;border:6px solid black;border-radius:10px;' align='center'>
<tr>
<tr>
<th colspan='1000000'style= 'font-size:26px; background:silver;color:green;'> All patient Informations' those ready to take treatment/waiters/<a href ='dvieweachpatient.php?key='><font style='color:red;font-weight:40px;float:right;margin-top:-2px;background:;border-radius:1px;height:;width:80px;font-size:30px;'>X</font></a></th></tr>
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
</tr>";
   $sqls="select*from patientregistration where status='waiting'";
	$ree=mysql_query($sqls);
	while($row=mysql_fetch_array($ree)){
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
					echo"<td style='height:30px;' align = 'center' width = '1'><a href ='untreatedpatient.php?enable=".$cardnum."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' title='enabled' onmouseover='isendis();'>Done</span></a></td>";
				}
				else
				{
				echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'treatedpatient.php?disable=". $cardnum."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' title='disabled' onmouseover='isendis();'>Untreated</span></a></td>";
				}}
		print ("<td style='background:lightblue;width:1px;'>"."</td>");

	
echo' <meta content="50;dvieweachpatient.php" http-equiv="refresh" />'; 
	echo "</table>";
	
   }

 ?>	
 </form>
 <form  action="dvieweachpatient.php" method="POST">		
</form>	
</td><!--center end-->



<p>

    </section>

                                                                        
</body>
	<?php include("footer.php");?>

</html>	 
