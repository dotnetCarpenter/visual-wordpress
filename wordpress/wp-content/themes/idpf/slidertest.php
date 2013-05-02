<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect("mysql15.unoeuro.com","idpf_dk","arvidergod","idpf_dk_db");
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();}
  
$result = mysqli_query($con,"SELECT * FROM wp_usermeta WHERE meta_value LIKE 'Forsiden' ORDER BY RAND() LIMIT 0,1");
while($row = mysqli_fetch_array($result))
  {
  $bruger_1= $row['user_id'];
  }

$result = mysqli_query($con,"SELECT * FROM wp_usermeta WHERE meta_value LIKE 'Forsiden' ORDER BY RAND() LIMIT 0,1");
while($row = mysqli_fetch_array($result))
  {
  $bruger_2= $row['user_id'];
  }
    
$result = mysqli_query($con,"SELECT * FROM wp_usermeta WHERE meta_value LIKE 'Forsiden' ORDER BY RAND() LIMIT 0,1");
while($row = mysqli_fetch_array($result))
  {
  $bruger_3= $row['user_id'];
  }

$result = mysqli_query($con,"SELECT * FROM wp_usermeta WHERE meta_value LIKE 'Forsiden' ORDER BY RAND() LIMIT 0,1");
while($row = mysqli_fetch_array($result))
  {
  $bruger_4= $row['user_id'];
  }

echo "$bruger_1 - $bruger_2 - $bruger_3 - $bruger_4";

mysqli_close($con);


//$num_rows = mysqli_num_rows($result);
//$forside_antal = $num_rows;
//echo "$forside_antal Rows<br>";


?>


</body>
</html>