<?php
session_start();
include("connection.php");
mysql_select_db("ClinicManamentSystem");
$ctrl = $_REQUEST['enable'];
$SQL = "update account set status='1' WHERE ACC_ID= '$ctrl'";
mysql_query($SQL);
print "<script>location.href = 'viewuser.php'</script>";
?>