
<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
?>
<html>
<?php 
if(empty($_POST['num'])){
$error="pleas enter cost";
}
if(empty($_POST['status'])){
$error="pleas enter payment status";
}?>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>kidaneemiret clinic</title>
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
<div id="body">
<?php include("header.php");?>
<div id="headerz" style="font-size:25px;">
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
					  </td>

</tr>
</table>
		</div>
 <section class="container">

 <div id="center">
<img src="img/UU.jpg" width="140" height="77">
</div>
 
<div id="left_colomn">
<div id="yy">
<width="30px" height="50px">
				</div>
</div>
<div id="right_colomn"align="center">
<div>
<width="274px" height="600px">

</div>
</div>
		
<div class="login" style="background-color:white;">
<script language="javascript">
  function check()
  {
   if(document.getElementById("status").value =="")
   {
    alert('first fill the each text fields !!'); 
    document.getElementById("status").focus();
    return false;
   }
    if(document.getElementById("num").value =="")
   {
    alert('first fill the each text fields!!'); 
    document.getElementById("num").focus();
    return false;
	
   }
   }
   </script>
 <table  border='1' style='width:375px;height:200;Background-color:#e6e8fa;border:0px solid blue;border-radius:0px;' align='center'>		  
 <td height="30" width="325px"><table width="325px"  border=0>   
 
                 <tr>										
<form name="addbill" method="post" action="" onclick="return Check(this.form);">
<div style="width:500px;">
<div class="message">
</div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
				<tr>
<td colspan="9" style="padding: 2px 2px 4px;border-radius:5px;width:3000px;height:30px; background:#8FBC8F;"align="center">
<b><font face="timesnewroman" size="1" color="#686868">
<h1 style="color:white;font-family:Times New Roman;size:4px; width:500px;">Adding bill Form</h1></b></font></b><a href ='clerk.php?key='><font style='color:red;font-weight:40px;float:right;background:#D3D3D3;border-radius:px;margin-top:-54px;margin-right:-1px;height:30px;width;font-size:30px;'>X</font></a></td></h1></b></font></b></td>
</tr>
               <tr><td><pre><font color="red">*</font><label>Card Number:</label></pre><td>
				<?php 
														 $res=mysql_query("select * from clinicmanamentsystem.labrequist");
	                                                     echo'<select name="regpatientid" required pattern="[0-9]/" >';
														   while($row=mysql_fetch_array($res)){
															  echo "<option style='height:25px;width:180px;border-top:6px;'value='".$row['CardNumber']."'>".$row['CardNumber']."</option>";
														        }
														  echo'</select>';
														?>
														</td>
													
</tr>
<tr>
<td><label>Cost payment:</label></td>
<td><input type="float" required pattern="\d.{1,}"name="num"  required x-moz-errormessage="===>Please enter number character is imposible"  placeholder="Enter Cost"id="cnewpassword" style="border:1px #480000 solid;width:200px;height:40px;background:#FFFFFF;border-radius:5px;color:green;"required="required"></td>
</tr>
 <tr><center><td>payment status:</td>
		          <td><select name="status" style="width:200px;"  required pattern="[A-Za-z]/" required x-moz-errormessage="Please select payment status" style="width:200px; height:30px;" margin-left="20px">
                  <option></option>
                  <option>Lab Test payment</option>
                  <option>Drug Payment</option>
                </select></td></center></tr>
<!--<tr><td><label></font>Payment Date:</label></td>
<td><input type="date"required name="pdate" id="newPassword" style="border:1px #480000 solid;width:300px;;height:30px;background:#FFFFFF;border-radius:5px;color:green;" require="required"></td>
</tr>-->
<tr>
  <td colspan="1" align="center"></td>
  <td colspan="2"><input type="submit"Onclick="return check();" name="add" value="Save" class="btnSubmit" style="font-size:20px;color:white;background:green;width:100px;height:45px;border-radius:7px;"onclick="return check(this.form);">
  <input type="reset" name="reset" Onclick="return check();"value="Reset" class="btnSubmit" style="border-radius:7px;color:white;font-size:20px;background:green;width:100px;height:45px;"></td>
</td>
</tr>
</table>
    </div>
      </form>
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
 $paid=$_POST['regpatientid'];
$cost=$_POST['num'];
$sum=0;
$pdate=date('Y-m-d');
$status=$_POST['status'];;

$result=mysql_query("select*from bill");
while($row=mysql_fetch_array($result)){
$costs=$row['PaymentCost'];
$cost=$_POST['num'];
$sum=$sum+$costs;
$sum++;
}
 //$rdate=date("d/m/Y");
    $sql="insert into bill(CardNumber,ACC_ID,PaymentCost,TotalCost,PayedDate,status)values('$paid','$EID','$cost','$sum','$pdate','$status')";
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
 ?>

  </tr>
          </table></td>
            </tr>
       </table>
<p>
    </section>
<?php include("footer.php");?>
</div>
</div>
                                                                        
</body>
</html>
