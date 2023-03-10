
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
	<b><a href="viewregpatient.php">view patient</a></b> 
        <b>    <a href="appointmentdate.php">set appt date</a></b> 
					  
			     <b> 	<a href="drugorder.php">order drug</a></b> 
				
				   <b>  <a href="labresult.php">Order Lab</a></b> 
					<b> <a href="viewlabresult1.php">view lab result</a></b> 
					
					<b> <a href="refer.php">add dignosis Result</a></b> 
                      <b> <a href="viewpatdrug.php">update patient info</a></b> 
					<b> <a href="viewsearchlab.php">view labOrder</a></b> 
					<b> <a href="viewcomment.php">view Nurse Result</a></b> 
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
		
		
		 <form  action="viewsearchlab.php" method="POST">
		 
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
               <tr><td><pre><font color="red">*</font><label>Enter Card number:</label></pre></td><td>
				<?php 
														 $res=mysql_query("select * from  clinicmanamentsystem.patientregistration");
	                                                     echo'<select style="margin-top:-53px;" name="Client_ID">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:40px;width:270px;margin-top:-5px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
													


    <td> <input type="submit" id="button" class="button" name="search" value="view Result" style="width:180%;height:40px;color:red;text-transform:capitalize;Font-weight:bolder;font-size:20px;border-top:6px;color:#0f0f0f;background:#5d8aa8;title:Enter the patient MRN;" />  		          
	</td></tr>	
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
	 echo' <meta content="10;searchdrug.php" http-equiv="refresh" />'; 
	}
	else
	{
    $get= @mysql_query("SELECT*FROM labresult WHERE CardNumber='$code' ")or die(mysql_error());
    $num =@mysql_num_rows($get);
	if($num>=1)
     {
    for($i=0;$i<$num;$i++)                                        
    {
   
     $Ddosage= @mysql_result($get,$i,'$sql','CardNumber');
    }
	echo" <table border='5' style='width:520px;height:36px;background-color:white;margin-top:-90;border:6px solid black;border-radius:10px;' align='center'>
<tr>
<th>Card Number</th>
<th>First Name</th>
<th>Middle  Name</th>
<th>Last Name</th>
<th>Sex</th>
<th>Phone Number</th>
<th>Nationality</th>
<th>Birth Date</th>
<th>Reg Date</th>
<th>status</th>
<th>Action</th>
<th>photo</th>
<h3><th><a href='doctor.php'><font style='color:red;font-weight:18px;float:right;margin-top:-15px;background:green;height:40px;'><img src='IMG/close.jpg' width='1px' height='1px'> </font><h3> </a></center></th></tr>";
	
	//echo "<th colspan='2'>"."Drug Detail"."</th>";
	 print ("<tr>");
   print ("<td>" .  $cardnum . "</td>");
   print ("<td>" . $fn . "</td>");	
    print ("<td>" . $mname . "</td>");	
	print ("<td>" . $lname . "</td>");
	print ("<td>" . $sex . "</td>");
	print ("<td>" . $phone . "</td>");
	print ("<td>" . $nation . "</td>");
	print ("<td>" . $bdate . "</td>");
	print ("<td>" . $regdate . "</td>");
	print ("<td>" . $status . "</td>");
	if($status=="waiting"){
					echo"<td style='height:30px;' align = 'center' width = '1'><a href ='untreated.php?enable=".$cardnum."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' title='enabled' onclick='isendis();'>Undone</span></a></td>";
				}
				else
				{
				echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'treated.php?disable=". $cardnum."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' title='disabled' onclick='isendis();'>Done</span></a></td>";
				}
				  
				 
					
	print ("<td>"."<img src=".$photo.">" . "</td>");
		print ("<td style='background:lightblue;width:1px;'>"."</td>");

	
echo' <meta content="50;viewechpatient.php" http-equiv="refresh" />'; 
	echo "</table>";
	}
	else
	{
print "<h3><img src='IMG/error.png'  width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>The patient CardNumber was not exist!</font></h3>";
	  echo' <meta content="10;viewechpatient.php http-equiv="refresh" />'; 
	}
   }}

 ?>	

 </form>
 <form  action="viewsearchlab.php" method="POST">		
</form>	
</td><!--center end-->



<p>

    </section>

                                                                        
</body>
	<?php include("footer.php");?>

</html>	 
