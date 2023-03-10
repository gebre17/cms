
<?php
//Get our database abstraction file
include('config1.php');

if (isset($_GET['search']) && $_GET['search'] != '') {
	//Add slashes to any quotes to avoid SQL problems.
	$search = $_GET['search'];
	$result4 = mysql_query("SELECT * FROM members where fname like('" .$search. "%') ORDER BY fname");
	while($row4 = mysql_fetch_array($result4))
	{

		echo '<div style="float:left;"><img src="'.$row4['profilepic'].'"></div>'.'<div style="float: right; margin-left: 7px; width: 228px;"><a style="text-decoration:none" href=profile.php?id=' . $row4['id'] . '>' . $row4['fname'] .' '. $row4['lname'] . "</a></div>\n\n<br><br>";

	}
}
?>
