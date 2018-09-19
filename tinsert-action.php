<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','project');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"project");
$sql="SELECT * FROM telephone WHERE sl_no = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table style='border:solid;' width='400px;' height='100' background='admin/image/PA05.JPG'>
<tr bgcolor='#CCCCCC'>
<th style='color:black;'>Police Station</th>
<th  style='color:black;'>Phone Number</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['p_station'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>