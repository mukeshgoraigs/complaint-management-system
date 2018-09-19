<?php 

ob_start();
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: CRIME CONTROL Shanti Sewa Nyaya ::</title>
<style>
.error{ color:#FF0000}
</style>
<!--dropdown script start here-->
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
		 $err6="";
		 $err7="";
		 $err8="";
		 $err9="";
		 
        if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if($_POST["t1"]=="")
			{
				$err="* name require";
			}
			if($_POST["t2"]=="")
			{
				$err1="* phone no. require";
			}
			if($_POST["t3"]=="")
			{
				$err2="* email require";
			}
			if($_POST["t4"]=="")
			{
				$err3="* address require";
			}
			if($_POST["t5"]=="")
			{
				$err4="* date & time require";
			}
			if($_POST["t6"]=="")
			{
				$err5="* crime title require";
			}
			
		else
		{
			$nm=$_POST["t1"];
			$pa=$_POST["t11"];
			$ph=$_POST["t2"];
			$em=$_POST["t3"];
			$add=$_POST["t4"];
			$ar_id=$_POST["s1"];
	        $dat=$_POST["t5"];
			$titl=$_POST["t6"];
			$des=$_POST["description"];
			$rmrk=$_POST["t8"];
		    $gndr=$_POST["gender"];
	
	     $con=@mysql_connect("localhost","root","");
		        if(!$con)
		        {
				 echo "connection failed";
			    }
				
				mysql_select_db("project");
				$qry="insert into firregister (name,password,phone,email,address,area_id,time_date,crime_title,fir_description,fir_remark,gender) values('$nm','$pa','$ph','$em','$add','$ar_id','$dat','$titl','$des','$rmrk','$gndr')";
				mysql_query($qry);
				if(mysql_affected_rows()>0)
				{
					header("location:get-register.php");
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
        <li><a href="../index.php">HOME</a></li>
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
        <li><a href="#">Missing Persons</a></li>     
        <li><a href="senior citizen.php">Senior Citizens Registration</a></li>
        <li><a href="passport.php">Guidelines / Information in c/w passport verification and registration of Pakistan National</a></li>
        <li><a href="#">Downloadable Forms</a></li>
        <li><a href="mess-acco.php">Go's Mess Accommodation &amp; Tariff</a></li>
        </ul>
<ul id="flexmenu3" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1003; left: 534px; top: 152px; display: none;">
        <li><a href="fir-register.php">Registration-form</a></li>
</ul><ul id="flexmenu4" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1002; left: 684px; top: 152px; display: none;">
        <li><a href="#">Recruitment Cell</a></li>
        <li><a href="mounted-police.php">Mounted Police</a></li>
        </ul>
<ul id="flexmenu5" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1001; left: 788px; top: 152px; display: none;">
        <li><a href="#">waht is section 144</a></li>
        <li><a href="#">Help Lines</a></li>
        <li><a href="about fund.php">About Funds</a></li>
        <li><a href="notification1.html">Notification</a></li>       
       </ul>
<ul id="flexmenu6" class="flexdropdownmenu jqflexmenu" style="display: none; visibility: visible; z-index: 1000;">
        <li><a href="#">E-mail Us</a></li>
        <li><a href="telephone_directory.php">Telephone Directory</a></li>
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
            <td><a href="traffic.php"><img src="image/traffic-unit.jpg" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td><a href="licencing.php"><img src="image/licensing-unit.jpg" width="242" height="29" alt=""></a></td>
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
            <td><a href="ne-resident.php"><img src="image/security-of-ne-res.jpg" width="242" height="29" alt=""></a></td>
          </tr>
        </tbody></table>
      </div>
 <div id="featured_slide" class="clear">
    <!-- ###### -->
    <div class="overlay_left"></div>
    <div id="featured_content">
      <div class="featured_box" id="fc1"><img src="image/slid1.jpg" alt="" />
       
      </div>
      <div class="featured_box" id="fc2"><img src="image/slid2.jpg" alt="" />
       
      </div>
      <div class="featured_box" id="fc3"><img src="image/slid3.jpg" alt="" />
        
      </div>
      <div class="featured_box" id="fc4"><img src="image/slid4.jpg" alt="" />
        
      </div>
      <div class="featured_box" id="fc5"><img src="image/slid5.jpg" alt="" />
      
      </div>
    </div>
     <ul id="featured_tabs">
      <li><a href="#fc1">All About The Crime Solution.</a></li>
      <li><a href="#fc2">Why You Should need Crime Solution.</a></li>
      <li><a href="#fc3">We Always ready for you.</a></li>
      <li><a href="#fc4">Our Acheviment Your Acheviment.</a></li>
      <li class="last"><a href="#fc5">Our Work Shanti Sewa &amp; Nyaya</a></li>
    </ul>
   
    <!-- ###### -->
  
</div>
        
  <form id="f1" name="f1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <fieldset>
     <legend style="color:#03C; font-weight:bolder;">FIR Registration</legend>
     <center>
        <table cellpadding="10" cellspacing="4">
        <tbody bgcolor="#CCCCCC">
           <tr>
              <td  style="font-weight:bolder;"><font color="#0000CC">User Name</font></td>
              <td><input type="text" id="t1" name="t1" />
                  <span class="error"><?php echo $err;?></span>
           </td>
           </tr>
           <tr>
              <td style="font-weight:bolder;"><font color="#0000CC">password</font></td>
              <td><input type="password" id="t11" name="t11"></td>
           </tr>
           <tr>
              <td style="font-weight:bolder;"><font color="#0000CC">Phone no</font></td>
              <td><input type="text" id="t2" name="t2" />
                   <span class="error"><?php echo $err1;?></span>
              </td>
           </tr>
           <tr>
              <td style="font-weight:bolder;"><font color="#0000CC">email</font></td>
              <td><input type="email" id="t3" name="t3" />
              <span class="error"><?php echo $err2;?></span>
           </td>
           </tr>
           <tr>
              <td style="font-weight:bolder;"><font color="#0000CC">Address</font></td>
              <td><input type="text" id="t4" name="t4" />
              <span class="error"><?php echo $err3;?></span>
              </td>
           </tr>
           <tr>
              <td  style="font-weight:bolder;"><font color="#0000CC">FIR AreaId</font></td>
               <td><select name="s1" id="s1">
                    <option>rnc01</option>
                    <option>rnc02</option>
                    <option>rnc03</option>
                    <option>rnc04</option>
                    <option>rnc05</option>
                    <option>rnc07</option>
                    <option>rnc08</option>
                    <option>rnc09</option>
                    <option>rnc10</option>
                    <option>rnc11</option>
                  </select>
               
           </td>
           </tr>
           <tr>
             <td style="font-weight:bolder;"><font color="#0000CC">FIR Time & Date</font></td>
             <td><input type="datetime" id="t5" name="t5" />
           
              <span class="error"><?php echo $err4;?></span>
           </td>
           </tr>
           <tr>
              <td style="font-weight:bolder;"><font color="#0000CC">Crime Title</font></td>
              <td><input type="text" id="t6" name="t6" />
              <span class="error"><?php echo $err5;?></span>
              </td>
          </tr>
          <tr>
             <td style="font-weight:bolder;"><font color="#0000CC">FIR Description</font></td>
             <td><textarea name="description" rows="7" cols="40" id="t7"></textarea>
             <span class="error"><?php echo $err7;?></span>
             </td>
          </tr>
          <tr>
            <td style="font-weight:bolder;"><font color="#0000CC">FIR Remarks</font></td>
            <td><input type="text" id="t8" name="t8" />
            <span class="error"><?php echo $err8;?></span>
            </td>
          </tr>
          <tr>
             <td style="font-weight:bolder;"><font color="#0000CC">
             <input type="radio" name="gender" value="female" id="t9">female
                 <input type="radio" name="gender" value="male" id="t9">male
                    </font> 
             <span class="error"><?php echo $err9;?></span>
             </td>
          </tr>
          </tbody>
          </table>
          </center>
          <center>
          <table>
          <tbody bgcolor="#CCCCCC">
          <tr>
             <td><input type="submit" id="s11" name="s11">
             </td>
            <td><input type="reset" id="reset" name="reset">
            </td>
          </tr>
          </tbody>
          </table>
          </center>
          </fieldset>
          </form>
        
</body>
</html>