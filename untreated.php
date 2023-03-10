<?php
session_start();
include("connection.php");
mysql_select_db("ClinicManamentSystem");
$cardnu = $_REQUEST['enable'];
$SQL = "update patientregistration set status='treated' WHERE CardNumber=$cardnu";
mysql_query($SQL);
print "<script>location.href='viewregpatient.php'</script>";
?>