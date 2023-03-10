<?php   
 session_start();
 $msg=$_SESSION["username"];
include("connection.php");
mysql_select_db("ClinicManamentSystem");
 ?>
<html>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>BD k Clinic</title>
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
<script>
  function isdelete()
  {
   var d = confirm('Are you sure Do you want to Delete ?');
   if(!d)
   {
    alert(window.location='viewuser.php');
   }
   else
   {
   return false;
    
   }
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
					  
			     <a href="adduser.php">Create Account</a>		  
			     	<a href="viewuser.php">Manage Account</a>
					<a href="regemp.php">Register employee</a>
					<a href="viewemp.php">View employee</a>
					<a href="adminreport.php">Users Report</a>
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
				
			</li>	
				</p>
	  </div>
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
<img src="img/well.jpg" width="265px" height="290">
<img src="img/well.png" width="280" height="290"border="5px"border color="red"> 
				</div>
</div>
<div id="right_colomn"align="center">
<div class="left"><br/>
<img src="img/4.jpg" width="265px" height="300"> 
 <img src="img/admin.png" width="265px" height="285"> 
</div>
</div>
	 <div class="login" style="background-color:white;">
<table   width="100%"  border="1"   style="background:white;border-radius:5px;margin-top:-60px;border:1px solid rgba(0,0,0,0.4); border:5px solid rgba(0,0,0,0.4);border-top:25px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			<thead >	
			<tr>
			<td colspan=6 style="font-size:16px;background:lightblue"> 
			<center><h3>Manage Employee account<a href="admin.php"><font style="color:red;font-weight:18px;float:right;margin-top:-20px;"><img src="IMG/close.jpg" width="1px" height="1px"> </font><h3> </a>	</center>	
		</td>
			</tr>
				<tr>
				<th>Account ID</th>
				<th>Full name</th>
				<th>role</th>
				<th>status</th>
				<th>Action</th>
				</tr>
			</thead>
			<?php
				$result = mysql_query("SELECT * FROM account ");
				$count=mysql_num_rows($result);
					$i=0;
					while($row = mysql_fetch_array($result))
				  {
					$id = $row['ACC_ID'];
					$fname=$row['FirstName'];
					$lname=$row['LastName'];
					$role=$row['Role'];
					$stat=$row['status'];
					echo '<tr>';
					echo '<td>'.$id.'</td>';
					echo '<td>'.$fname.'  '.$lname.' '.'</td>';
					echo '<td>'.$role.'</td>';
					echo '<td>'.$stat.'</td>';
					if($stat==0){
					echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'deactivate.php?enable=".$id."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' title='enabled' onclick='isendis();'>Activated</span></a></td>";
				}
				else
				{
				echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'activate.php?disable=".$id."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' title='disabled' onclick='isendis();'>Deactivated</span></a></td>";
				}
				
			
				  }
				  echo '</tr>';
					?>
			</table>
</div>
    


</td><!--center end-->




<p>

    </section>	
	<?php include("footer.php");?>	
</div>
</div>
                                                                        
</body>
</html>

