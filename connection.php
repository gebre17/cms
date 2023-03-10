<?php
$con= mysql_connect("localhost","root","");
     if(!$con){
	 DIE('There is a problem with the system.  Please notify your system administrator.' );
	 }
	 mysql_select_db("ClinicManamentSystem");
  ?>