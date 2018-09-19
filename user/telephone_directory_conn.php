<?php
$q =$_GET['q'];
$con = mysql_connect("localhost","root","");
if (!$con) 
{
  echo("Not connected...");
}

mysql_select_db("project");
$sql="SELECT * FROM telephone
      WHERE p_station = '".$q."'";
$result=mysql_query($sql);

echo "<table  width='100%' border='1'  cellspacing='0' rules='all' class='td-space'>
<tbody>
<tr>
    <th scope='col'>Office/Police Station</th>
    <th scope='col'>Telephone No</th>
	<th scope='col'>Fax No.</th>
</tr>
";
while($row = mysql_fetch_assoc($result)) 
{
  echo "<tr>";
  echo "<td>PCR</td>";
  echo "<td><b>" . $row['phone'] . "</b></td>";
  echo "<td>&nbsp;</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Eyes and Ears</td>";
  echo "<td><b>" . $row['mobile'] . "</b></td>";
  echo "<td>&nbsp;</td>";
  echo "</tr>"; 
  echo "<tr>";
  echo "<td>Women in distress</td>";
  echo "<td><b>" . $row['fax_no'] . "</b></td>";
  echo "<td>&nbsp;</td>"; 
  echo "</tr>";
  echo "<tr>";
  echo "<td>Special Cell</td>";
  echo "<td><b>" . $row['fax_no'] . "</b></td>";
  echo "<td>&nbsp;</td>"; 
  echo "</tr>";
  echo "<tr>";
  echo "<td>Missing Persons</td>";
  echo "<td><b>" . $row['fax_no'] . "</b></td>";
  echo "<td>&nbsp;</td>"; 
  echo "</tr>";
  echo "<tr>";
  echo "<td>Traffic</td>";
  echo "<td><b>" . $row['fax_no'] . "</b></td>";
  echo "<td>&nbsp;</td>"; 
  echo "</tr>";
  echo "<tr>";
  echo "<td>Vigilance</td>";
  echo "<td><b>" . $row['fax_no'] . "</b></td>";
  echo "<td>&nbsp;</td>"; 
  echo "</tr>";     
}
echo "</table>";
?>