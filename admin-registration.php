<?php 
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: CRIME CONTROL Shanti Sewa Nyaya ::</title>
<script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="flexdropdown.js"></script>
    <link rel="stylesheet" type="text/css" href="flexdropdown.css">
    <link rel="stylesheet" type="text/css" href="general.css">
    <link rel="stylesheet" type="text/css"  href="style.css" />
    <link href="layout.css" rel="stylesheet" type="text/css" />
<link href="featured_slide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="jquery.tabs.setup.js"></script>
<!--dropdown script start here-->
     <?php
	     $err="";
		 $err1="";
		 $err2="";
		 $err3="";
		 $err4="";
		 $err5="";
		 if($_SERVER["REQUEST_METHOD"]=="POST")
		 {
			 if($_POST["t1"]=="")
			 {
				 $err="* first name require";
			 }
			 if($_POST["t2"]=="")
			 {
				 $err1="* 2nd name require";
			 }
			 if($_POST["t4"]=="")
			 {
				 $err2="* email require";
			 }
			 if($_POST["t5"]=="")
			 {
				 $err3="* password require";
			 }
			 if($_POST["t6"]=="")
			 {
				 $err4="* confirm password require";
			 }
			 if($_POST["t12"]=="")
			 {
				 $err5="* designation require";
			 }
		   else
		   {
			   $fn=$_POST["t1"];
			   $ln=$_POST["t2"];
			   $sn=$_POST["t3"];
			   $em=$_POST["t4"];
			   $p=$_POST["t5"];
			   $cp=$_POST["t6"];
			   $c=$_POST["t7"];
			   $st=$_POST["t8"];
			   $ci=$_POST["t9"];
			   $ar=$_POST["t10"];
			   $ad=$_POST["t11"];
               $des=$_POST["t12"];
			   $mb=$_POST["t13"];
			   $ph=$_POST["t14"];
			   $photo=$_POST["t15"];			   
		  
		   $conn=mysqli_connect('localhost','root','');
		        if(!$conn)
				{
					echo"connection failed...";
				}
			 mysqli_select_db($conn,"project");
			  $qry="insert into user_reg (fname,lname,sign_up,email,password,confirm_password,country,state,city,	areaid,address,designation,mobileno,phoneno,photo)
	  values('$fn','$ln','$sn','$em','$p','$cp','$c','$st','$ci','$ar','$ad','$des','$mb','$ph','$photo')";
	       mysqli_query($conn,"$qry");
		     if($qry)
			 {
				 header("location:user_password.php");
			 }
			 //else
			 {
				echo "insert is not done";
			 }
		   }
		 }
	 ?>

</head>

<body>
<div class="top-boredr"></div>
<div class="header-main">
<div class="headers">
      <div class="header">
        <div class="logo1"><a href="#"><img src="image/logo1.png" alt="" width="326" height="87" border="0"></a><a href="#"></a>
        </div>
        
        <div class="lef-top-icon-logo"><img src="image/logo2.png" width="254" height="76" alt=""></div>
      </div>
  </div>
</div>
<div class="button-main">
  <div class="btn">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="#" data-flexmenu="flexmenu1" stylez="position:relative;left:900px;top:200px">ABOUT US</a></li>
        <li><a href="#" data-flexmenu="flexmenu2" stylez="position:relative;left:900px;top:200px">SERVICES</a><span class="btn-line"></span></li>
        <li><a href="#" data-flexmenu="flexmenu3" stylez="position:relative;left:900px;top:200px" class="">REGISTER FIR</a></li>
        <li><a href="#" data-flexmenu="flexmenu4" stylez="position:relative;left:900px;top:200px" class="">UNITS</a></li>
        <li><a href="#" data-flexmenu="flexmenu5" stylez="position:relative;left:900px;top:200px" class="">USEFUL LINKS</a></li>
        <li><a href="#" data-flexmenu="flexmenu6" stylez="position:relative;left:900px;top:200px">CONTACT US</a></li>
      </ul>
    
<ul id="flexmenu1" class="flexdropdownmenu jqflexmenu" style="display: none; visibility: visible; z-index: 1000;">
        <li><a href="history-police.php">History</a></li>
        <li><a href="citizen-charter.php">Citizens' Charter</a></li>
        <li><a href="#">Former Commissioners</a></li>
        <li><a href="medals.php">Medals</a></li>
        <li><a href="#">Appreciation letters from public</a></li>
        </ul>
<ul id="flexmenu2" class="flexdropdownmenu jqflexmenu" style="display: none; visibility: visible; z-index: 1000;">
        <li><a target="_self" href="#">Missing Persons</a></li>     
        <li><a href="senior citizen.php">Senior Citizens Registration</a></li>
        <li><a href="passport.php">Guidelines / Information in c/w passport verification and registration of Pakistan National</a></li>
        <li><a href="#">Downloadable Forms</a></li>
        <li><a href="mess-acco.php">Go's Mess Accommodation &amp; Tariff</a></li>
        </ul>
<ul id="flexmenu3" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1003; left: 534px; top: 152px; display: none;">
        <li><a target="_blank" href="fir-register.php">Registration-form</a></li>
</ul><ul id="flexmenu4" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1002; left: 684px; top: 152px; display: none;">
        <li><a href="#" target="_blank">Recruitment Cell</a></li>
        <li><a href="mounted-police.php">Mounted Police</a></li>
        </ul>
<ul id="flexmenu5" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1001; left: 788px; top: 152px; display: none;">
        <li><a href="#">what issection 144</a></li>
        <li><a href="#">Help Lines</a></li>
        <li><a href="about fund.php">About Funds</a></li>
        <li><a href="#">Notification</a></li>       
       </ul>
<ul id="flexmenu6" class="flexdropdownmenu jqflexmenu" style="display: none; visibility: visible; z-index: 1000;">
        <li><a href="#">E-mail Us</a></li>
        <li><a href="#">Telephone Directory</a></li>
    </ul>
    </div>
</div> 

<div class="center-page-main">
  <div class="wraper">
    <div class="main">
      <div class="left-side-page-index">
        <div class="img-main-in1">
          <div class="img1-1">
            <div class="imgage">
               <a href="#" target="_blank"><img src="image/SP-ranchi.jpeg" alt="" width="218" height="168" border="0"></a>
            </div>
          </div>
          <div class="text-im1">Shri Prabhat Kumar (IPS)<br>
          City Supretendent Police, Ranchi
         </div>
        </div>
        
        <div></div><br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="float:left; clear:both;">
          <tbody><tr>
            <td height="17"></td>
          </tr>
          <tr>
            <td><a href="service.php"><img src="image/rti-manual.jpg" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td><a href="traffic.php" target="_self"><img src="image/traffic-unit.jpg" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td><a href="#" target="_self"><img src="image/licensing-unit.jpg" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td><a href="security_of_women_children.php"><img src="image/women-helpline-tab.jpg" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr>
            <td><a href="ne-resident.php"><img src="image/security-of-ne-res.jpg" width="242" height="29" alt=""></a></td>
          </tr>
        </tbody></table>
      </div>
      <form id="f1" name="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <table cellpadding="10" cellspacing="4">
          <tr>
             <td>First Name:</td>
             <td><input type="text" id="t1" name="t1" />
                <span class="error"><?php echo $err;?></span>
             </td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td><input type="text" id="t2" name="t2" />
             <span class="error"><?php echo $err1;?></span>
            </td>
          </tr>
          
          <tr>
             <td>sign up As</td>
             <td><select  id="t3" name="t3">
                   <option>user</option>
                  </select>
             </td>
          </tr>
          <tr>
             <td>E_mail</td>
             <td><input type="email" id="t4" name="t4">
                 <span class="error"><?php echo $err2;?></span>
             </td>
          </tr>
          <tr>
             <td>Password</td>
             <td><input type="password" id="t5" name="t5" />
                <span class="error"><?php echo $err3;?></span>
             </td>
          </tr>
          <tr>
             <td>Confirm Password</td>
             <td><input type="password" id="t6" name="t6">
                 <span class="error"><?php echo $err4;?></span>
             </td> 
          </tr>
          <tr>
             <td>Country</td>
             <td><select id="t7" name="t7">
                    <option>India</option>
                 </select>
             </td>
          </tr>
          <tr>
             <td>state</td>
             <td><select id="t8" name="t8">
                 <option>Jharkhand</option>
                 </select>
             </td>
          </tr>
          <tr>
             <td>City</td>
             <td><select id="t9" name="t9">
                 <option>Ranchi</option>
                 </select></td>
          </tr>
          <tr>
             <td>area_id</td>
             <td><select id="t10" name="t10">
                   <option>rnc1</option>
                   <option>rnc2</option>
                   <option>rnc3</option>
                   <option>rnc4</option>
                   <option>rnc5</option>
                   <option>rnc6</option>
                   <option>rnc7</option>
                   <option>rnc8</option>
                   <option>rnc9</option>
                   <option>rnc10</option>
                   <option>rnc11</option>
                 </select>
              </td>
          </tr>
          <tr>
             <td>Address</td>
             <td>
               <textarea  id="t11" name="t11" rows="7" cols="40"></textarea>
             </td>
          </tr>
          <tr>
             <td>Designation</td>
             <td><input type="text" name="t12" id="t12">
              <span class="error"><?php echo $err5;?></span>
             </td>
          </tr>
          <tr>
             <td>Mobile no.</td>
             <td><input type="text" name="t13" id="t13"></td>
          </tr>
          <tr>
             <td>phone no.</td>
             <td><input type="text" name="t14" id="t14"></td>
          </tr>
          <tr>
             <td>Profile photo</td>
             <td><input type="file" id="t15" name="t15"></td>
          </tr>
          <tr>
             <td><input type="submit" id="s1" name="s1" value="register me"></td>
             <td colspan="4"><input type="reset" id="r1" name="r1" value="reset">
             </td>
          </tr>
      </table>
    </form>

</body>
</html>