<?php
include("connection.php");
mysql_select_db("ClinicManamentSystem");
/*
 $sql="CREATE TABLE account
 (
ACC_ID varchar(15)primary key,
 FirstName varchar(15) NOT NULL,
 LastName varchar(15) NOT NULL,
 Age 	INT NOT NULL,
Sex varchar(4) NOT NULL,
Role varchar(15) NOT NULL,
UserName varchar(15) NOT NULL,
Password varchar(15) NOT NULL,
PhoneNumber varchar(15) NOT NULL,
Nationality varchar(15) NOT NULL,
City varchar(15) NOT NULL)";
*/
 //employee registraton table
  $employeess="CREATE TABLE Employee(
UserID varchar(15)primary key,
 FirstName varchar(15) NOT NULL,
 LastName varchar(15) NOT NULL,
 Age INT NOT NULL,
Sex varchar(4) NOT NULL,
PhoneNumber varchar(15) NOT NULL,
 Nationality varchar(15) NOT NULL,
Kebele varchar(15) NOT NULL,
Woreda varchar(15) NOT NULL,
Zone varchar(15) NOT NULL,
City varchar(15) NOT NULL,
Specialization varchar(15) NOT NULL)";

 //Excute query
 if(mysql_query( $employeess,$con))
 {
 
  

      echo " table created successfully."."<br>";
				
 }
 else{
 echo"tabele is not created";
 }
?>