<?php
session_start();
include("connection.php");
mysql_select_db("ClinicManamentSystem");
$cardnu = $_REQUEST['disable'];
$SQL = "update patientregistration set status='waiting' WHERE CardNumber=$cardnu";
mysql_query($SQL);
print "<script>location.href='receptionupdatepatient.php'</script>";