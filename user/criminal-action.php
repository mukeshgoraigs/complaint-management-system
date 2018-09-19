<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: CRIME CONTROL Shanti Sewa Nyaya ::</title>
<style>
table th, td{ color:#000000; font-family:Arial, Helvetica, sans-serif; }


</style>

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

echo "<table border='1' width='100%'>
<tr>
<th>Photo</th>
<th>Name</th>
<th>Age</th>
<th>Address</th>
<th>Colour</th>
<th>Crime type</th>
<th>description</th>
<th>arstd. date</th>
<th>arstd. area</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" .'<img height="200" width="200" src="../admin/image1//'. $row['photo']  .'">'."</td>";
  echo "<td>" . $row['c_name'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['adress'] . "</td>";
  echo "<td>" . $row['color'] . "</td>";
  echo "<td>" . $row['crime_type'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  echo "<td>" . $row['a_date'] . "</td>";
  echo "<td>" . $row['a_area'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</body>
</html>