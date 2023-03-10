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

		 <a href="patlabresult.php">ADD LAB RESULT</a>
			  <a href="vieweachlaborder.php">VIEW Each ORDER</a>
			 <a href="viewlaborder.php">VIEW LAB ORDER</a>
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
		
		
		 <form  action="vieweachlaborder.php" method="POST">
		 
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
               <tr><td><font color="red"><pre>*</font><label>Enter Card number:</label></pre></td><td>
				<?php 
														 $res=mysql_query("select * from  bill where status='Lab Test payment' ORDER BY PayedDate DESC ");
	                                                     echo'<select style="margin-top:-53px;" name="Client_ID">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:40px;width:180px;margin-top:-5px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
													


    <td> <input type="submit" id="button" class="button" name="search" value="Generate Result" style="width:100%;height:40px;color:#2E8B57;text-transform:capitalize;Font-weight:bolder;font-size:16px;border-top:6px;color:#0f0f0f;background:#5d8aa8;title:Enter the patient MRN;" /></td>	          
	<td> <input type="submit" id="button" class="button" name="viewdetail" value="view Detail" style="width:100%;height:40px;color:#2E8B57;text-transform:capitalize;Font-weight:bolder;font-size:16px;border-top:6px;color:#0f0f0f;background:#5d8aa8;title:Enter the patient MRN;" /></td><td><a href = 'labtech.php?key='><font style='color:black;font-size:26px;float:right;border-radius:10px;margin-right:-25px;height:40px;background:#778899;margin-top:-30px;width:90px;'>Cancel</font></a></td> 		          
	</tr>		
 </form></table>
 <?php
   if(isset($_POST['search']))
   {
   $code=$_POST['Client_ID'];
   $sql="select*from labrequist where CardNumber='$code'";
	$re=mysql_query($sql);
	while($row=mysql_fetch_array($re)){
$cn = $row['CardNumber'];	
 $acid=$row['ACC_ID'];	   
   $bt=$row['BloodTest'];		
     $ut=$row['UrinTest'];
   $ft=$row['FacesTest'];
	$od=$row['RequistDate'];	
	}
	if($_POST['Client_ID']=="")
	{
	echo "<img src='IMG/error.png' height='8%' align='bottom'><font type='Verdana' size='4' color='red'>Please enter the patient_id!!</font>";
	 echo' <meta content="10;vieweachlaborder.php" http-equiv="refresh" />'; 
	}
	else
	{
    $get= @mysql_query("SELECT*FROM labrequist WHERE CardNumber='$code' ")or die(mysql_error());
    $num =@mysql_num_rows($get);
	if($num>=1)
     {
    for($i=0;$i<$num;$i++)                                        
    {
   
     $Ddosage= @mysql_result($get,$i,'$sql','CardNumber');
    }
	echo" <table border='10' margin-top:-60px;style='width:350px;height:200px;background-color:#778899;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th colspan='1000000'style= 'font-size:26px; background:silver;color:green;'> Lab order Information That Sent from Doctor<a href = 'vieweachlaborder.php?key='><font style='color:red;font-weight:40px;float:right;margin-top:-37px;margin-right:-30px;background:;border-radius:1px;height:;width:80px;font-size:25px;'>X</font></a> </th></tr>
	<tr>
<tr>
<th>CardNumber</th>
<th>USER_ID </th>
<th>Blood Test</th>
<th>Urine Test</th>
<th>Face Test</th>
<th>OrderDate </th>
</tr>";
	
	//echo "<th colspan='2'>"."Drug Detail"."</th>";
	 print ("<td>".$cn. "</td>");
 print ("<td>" .$acid. "</td>");	   
   print ("<td>" .$bt. "</td>");	
   print ("<td>" .$ut. "</td>");	
      print ("<td>" .$ft. "</td>");
		     print ("<td>" .$od. "</td>")."</tr>";
	//echo "<td height='17' style='height:17px;width:30%;border-radius:5px;float:left'>"."<div align='left'></font>Drug Name: </div></td>";
	//echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_type' id='txt_type' value='$dname' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	
	
echo' <meta content="50;vieweachlaborder.php" http-equiv="refresh" />'; 
	echo "</table>";
	}
	else
	{
print "<h3><img src='IMG/error.png'  width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>The patient CardNumber was not exist!</font></h3>";
	  echo' <meta content="10;vieweachlaborder.php http-equiv="refresh" />'; 
	}
   }}

 ?>	
<?php
   if(isset($_POST['viewdetail']))
   {
   	echo" <table border='10' margin-top:-100px;style='width:350px;height:200px;background-color:#778899;border:13px solid greeen;border-radius:10px;'float:margin-top:-50px; align='center'>
<tr>
<th colspan='1000000'style= 'font-size:26px; background:silver;color:green;'> Lab order Information That Sent from Doctor<a href = 'vieweachlaborder.php?key='><font style='color:red;font-weight:40px;float:right;margin-top:-37px;margin-right:-30px;background:;border-radius:1px;height:;width:80px;font-size:25px;'>X</font></a> </th></tr>
	<tr>
<th>CardNumber</th>
<th>USER_ID </th>
<th>Blood Test</th>
<th>Urine Test</th>
<th>Face Test</th>
<th>OrderDate </th>
</tr>";
   $sqls="SELECT * FROM clinicmanamentsystem.labrequist l, clinicmanamentsystem.bill b where l.CardNumber=b.CardNumber and status='Lab Test payment'";
	$ree=mysql_query($sqls);
	while($row=mysql_fetch_array($ree)){
$cn = $row['CardNumber'];	
 $acid=$row['ACC_ID'];	   
   $bt=$row['BloodTest'];		
     $ut=$row['UrinTest'];
   $ft=$row['FacesTest'];
	$od=$row['RequistDate'];	
	//echo "<th colspan='2'>"."Drug Detail"."</th>";
	 print ("<td>".$cn. "</td>");
 print ("<td>" .$acid. "</td>");	   
   print ("<td>" .$bt. "</td>");	
   print ("<td>" .$ut. "</td>");	
      print ("<td>" .$ft. "</td>");
		     print ("<td>" .$od. "</td>")."</tr>";
	//echo "<td height='17' style='height:17px;width:30%;border-radius:5px;float:left'>"."<div align='left'></font>Drug Name: </div></td>";
	//echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:left'>"."<input type='text' name='txt_type' id='txt_type' value='$dname' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	}
	
echo' <meta content="50;vieweachlaborder.php" http-equiv="refresh" />'; 
	echo "</table>";
	}
   

 ?>	
 </form>
 <form  action="vieweachlaborder.php" method="POST">		
</form>	
</td><!--center end-->



<p>

    </section>

                                                                        
</body>
	<?php include("footer.php");?>

</html>	 
