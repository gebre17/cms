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
<<?php include("header.php");?>
<div id="headerz">
<table width="1150px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" font-size="10px" margin-top="-15">
	<p><li>
			<a href="viewdrugorder.php">VIEWDRUG ORDER</a>
             <a href="adddrug.php">ADD DRUG</a>
           <a href="searchdrug.php">SEARCH DRUG</a>
		    <a href="viewbill.php">VIEW BILL</a>
            <a href="pharmareport.php">GENERATE REPORT</a>
 <a href="changeuserpassword.php">ChangePassword</a>
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
<img src="img/UU.jpg" width="140" height="75">
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
	 
    <FORM ACTION="adddrug.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">
<center>
<table height="77px" bgcolor="#ffffff" style="border-radius:15px lightblue;margin-top:-40px;float:right;background-color:#e6e8fa;width:700px;height:430px;border-radius:15px;width:500px;">
				<tr>
<td colspan="9" style="padding: 2px 2px 4px;border-radius:5px;width:3000px;height:30px; background:#8FBC8F;"align="center">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Drug Registration form</h1></b></font></b><a href ='pharmacist.php?key='><font style='color:red;font-weight:40px;float:right;background:#D3D3D3;border-radius:px;margin-top:-54px;margin-right:-1px;height:30px;width;font-size:30px;'>X</font></a></td></h1></b></font></b></td>
</tr>
<tr><td><font color="red">*</font><label>Card number:</label></td><td>
				<?php 
														 $res=mysql_query("select * from  clinicmanamentsystem.patientregistration");
	                                                     echo'<select name="regpatientid">';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:30px;width:180px;border-top:6px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
<!--<tr>
<td>Drug Id :</td><td><input name="regdrugid" type="text" id="drugid" size"20" pattern="\w{2,20}" style="border:1px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Enter drug id"></input></td>
</tr>-->
<tr>
<td>Drug Name :</td><td><input name="regdrugname" type="text" id="drugname" size"20" pattern="\D{2,}" style="border:1px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required" placeholder=""></input></td>
</tr>
<tr>
<tr>
<td>Campaney Name</td><td><input type="text" name="regcampname"size"20" pattern="\D{2,}" required x-moz-errormessage="please enter character " style="width:200px;" "height:30px;" margin-left="20px"></input>
	                    
                    </td>
</tr>
<tr>
<td> Drug Amount :</td><td><input name="regamount" type="text" id="damount" size"30" pattern="\d{1,15}" style="border:1px #480000 solid;width:200px;height30px;background:#FFFFFF;border-radius:px;" required="required" placeholder=""></input></td>
</tr>
<td>Made In:</td><td><select id='madein' name="regmadein" required x-moz-errormessage="Please select one" style="width:200px;" "height:30px;" margin-left="20px">
	<option>
	</option>
	<option>Ethiopia</option>
	<option>Germany</option>
		<option>India</option>
			<option>Europe</option>
				<option>China</option>
					<option>USA</option>
	
	</select>
    </td>
</tr>
<tr>
<td>Manufacture Date :</td><td><input name="regmanufdate" type="date" id="manufdate" required x-moz-errormessage="Please enter  manufacture the date" style="border:1px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Manuf. date"></input></td>
</tr>
<tr>
<td>Expired Date :</td><td><input name="regexpdate" type="date" id="expdate" required x-moz-errormessage="Please enter  the expired date" style="border:1px #480000 solid;width:200px;height:30px;background:#FFFFFF;border-radius:px;" required="required" placeholder="Expired date"></input></td>
</tr>
<td colspan="2" align="center"><input type="submit" value="save" name="add" style="color:#0f0f0f;background:#5d8aa8;"></input> 
<input type="reset" value="Reset" style="color:#0f0f0f;background:#5d8aa8;"/></td></center>
</table></center> </form> 
</FORM>
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
//$fdid=$_POST['regdrugid'];
 $pid=$_POST['regpatientid'];
$dname=$_POST['regdrugname'];
$dcam=$_POST['regcampname'];
$damount=$_POST['regamount'];
$madein=$_POST['regmadein'];
$dofad=date('Y-m-d');
$manudate=$_POST['regmanufdate'];
$xepire=$_POST['regexpdate'];
    $sql="insert into drug(ACC_ID,CardNumber,DrugName,DrugCampany,DrugAmount,DrugMadeIN,DateofReg,ManufactureDate,ExpiredDate)values('$EID','$pid','$dname','$dcam','$damount','$madein','$dofad','$manudate','$xepire')";
	$result=mysql_query($sql);// or die(mysql_error());		
  if(!$result){
	  die("error".mysql_error());
    print"<div id='bottom'>"."<h3><img src='IMG/error.png' width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>Please try again here is already exist!</font></h3></div>";
}
else{	
    print "<font face='arial' color='green' float='right'size='5'>You have successfully registered</font>";
   
 }
}
mysql_close($con);
?> 
<p>
 </div>
    </section>
	<?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>