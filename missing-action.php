<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','project');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"project");
$sql="SELECT * FROM missing_person WHERE serial_no = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>missing date</th>
<th>Name</th>
<th>dender</th>
<th>photo</th>
<th>age</th>
<th>age</th>
<th>m_height</th>
<th>religion</th>
<th>p_station</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['miss_date'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" .'<img height="200" width="200" src="../admin/image1//'. $row['photo']  .'">'  . "</td>";
  echo "<td>" . $row['age_s'] . "</td>";
  echo "<td>" . $row['age_e'] . "</td>";
  echo "<td>" . $row['m_height'] . "</td>";
  echo "<td>" . $row['religion'] .  "</td>";
  echo "<td>" . $row['p_station'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>