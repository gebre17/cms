
<HTML>
 <head>
 <?php 
	session_start();
	include("connection.php");
	mysql_select_db("ClinicManamentSystem");
    if(isset($_GET['loged']))
	{
		header("Location:login.php");
		session_destroy();
		
	}
 ?>
 </head>
<BODY>
                                                                        
</BODY>
<HTML>