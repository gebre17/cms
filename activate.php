<?php
session_start();
include("connection.php");
mysql_select_db("ClinicManamentSystem");
$ctrl = $_REQUEST['disable'];
$SQL = "update account set status='0' WHERE ACC_ID= '$ctrl'";
mysql_query($SQL);
print "<script>location.href = 'viewuser.php'</script>";
?>