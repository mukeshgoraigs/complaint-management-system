<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<td><?php
		$conn=@mysql_connect("localhost","root","");
		   if(!$conn)
		   {
			  echo("connection failed");
		   }
		  mysql_select_db("project");
		 /* $q="select * from missing_person";
		 $sm=mysql_query($q);
		    $rs=mysql_fetch_assoc($sm);
			$sn=$rs['serial_no'];*/
			$sn=$_REQUEST['t1'];
		 
		  $st=$_REQUEST['t11'];
		  $qry="update missing_person SET status='$st' where serial_no=$sn";
		   $smt=mysql_query($qry);
		  
		if(mysql_affected_rows()>0)
		{
			echo "1 row updated...";
		}
		  else
		   {
			   echo "updation fail...";
		   }
?>
</body>
</html>