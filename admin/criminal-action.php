<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: CRIME CONTROL Shanti Sewa Nyaya ::</title>
</head>

<body>
<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','project');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"project");
$sql="SELECT * FROM criminal WHERE sl_no = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<th>Phot</th>";
  echo "<td>" .'<img height="200" width="200" src="image1//'. $row['photo']  .'">'                 ."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Name</th>";
  echo "<td>" . $row['c_name'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Age</th>";
  echo "<td>" . $row['age'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Address</th>";
  echo "<td>" . $row['adress'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Colour</th>";
  echo "<td>" . $row['color'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>Crime type</th>";
  echo "<td>" . $row['crime_type'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>description</th>";
  echo "<td>" . $row['description'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>arstd. date</th>";
  echo "<td>" . $row['a_date'] . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th>arstd. area</th>";
  echo "<td>" . $row['a_area'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>