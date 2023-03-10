
<html>
<header>
<link rel="stylesheet" type="text/css" href="style/home.css">
<link rel="stylesheet" type="text/css" href="csss.css">
</header>

<body>
<div id="content">
<div id="header"style="background-color: lightblue;float:left;">
<img src="img/well.jpg" width="20" height="30">
<h1 style="font-family:Lucida Calligraphy;float:left;">Kidanemhiret clinic Management system</h1>
 <?php
 echo"<div id='dates'>";
 //$dd=mktime(11,54,8,12,2018);
 $time=date("h: i: sa");
  $date=date("l/ F d/Y /");
  echo"<div>";
echo"To day is:  "."$date"."$time";
echo"</div>";
 echo"<div>";
 ?>
</div>
                                                                        
</body>
</html>