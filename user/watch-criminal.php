<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: CRIME CONTROL Shanti Sewa Nyaya ::</title>
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

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {

    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","criminal-action.php?q="+str,true);
  xmlhttp.send();
}
</script>

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
        <li><a href="user-status.php" data-flexmenu="flexmenu3" stylez="position:relative;left:900px;top:200px" class="">GET YOUR STATUS</a>
        </li>
        <li><a href="#" data-flexmenu="flexmenu4" stylez="position:relative;left:900px;top:200px" class="">VIEW TOP MOST CRIMINAL</a></li>
       

<map name="Map" id="Map">
  <area shape="rect" coords="19,61,129,96" href="login.php" alt="">
  <area shape="rect" coords="152,61,261,96" href="#" alt="">
  <area shape="rect" coords="281,61,388,96" href="#" target="_blank" alt="">
</map>
   <ul id="flexmenu1" class="flexdropdownmenu jqflexmenu" style="display: none; visibility: visible; z-index: 1000;">
        <li><a href="history-police.php">History</a></li>
        <li><a href="citizen-charter.php">Citizens' Charter</a></li>
        <li><a href="medals.php">Medals</a></li>
       </ul>
<ul id="flexmenu2" class="flexdropdownmenu jqflexmenu" style="display: none; visibility: visible; z-index: 1000;">
        <li><a  href="#">Missing Persons</a></li>     
        <li><a href="passport.php">Guidelines / Information in c/w passport verification and registration of Pakistan National</a></li>
        <li><a href="mess-acco.php">Go's Mess Accommodation &amp; Tariff</a></li>
        </ul>
<ul id="flexmenu3" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1003; left: 534px; top: 152px; display: none;">
        <li><a href="user-status.php">get your status</a>
        </li>
  </ul>
<ul id="flexmenu4" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1002; left: 684px; top: 152px; display: none;">
 <li>
 <a href="watch-criminal.php">see criminals</a>
        </li>
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
            <td><a href="#"><img src="image/rti-manual.jpg" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td><a href="user-complain.php"><img src="image/traffic-unit copy.png" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td><a href="#"><img src="image/licensing-unit.jpg" width="242" height="29" alt=""></a></td>
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
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td><a href="ne-resident.php"><img src="image/security-of-ne-res.jpg" width="242" height="29" alt=""></a></td>
          </tr>
        </tbody></table>
      </div>
      
      
          
<div class="right-index-main">
       
 
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

       
       
 <!---Slider is end---->      
       
        <div class="news-flash-heading"><img src="image/help-line-head.png" width="95" height="32" alt=""></div>
        <div class="news-flash">
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="4">
        
        <img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;PCR : <span>100 (24X7) (Toll Free)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Eyes and Ears : <span>1090 (Toll Free)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Women in distress : <span>1091</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Special Cell (North-Eastern States) : <span>1093</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Missing Persons : <span>1094, 23241210</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Traffic : <span>1095, 25844444</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Senior Citizen : <span>1291</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Vigilance : <span>1064</span>
        </marquee>
        </div> 
 <div class="clr"></div>
        
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td align="center" valign="top"><table border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
       <td>
<form>
<select name="users" onChange="showUser(this.value)">
<option value="">Select a criminal name:</option>
<option value="6">surendra gupta</option>
<option value="7">vinesh binesh</option>
<option value="8">Ramnek yadav</option>
<option value="9">Ramnek peela</option>
<option value="10">surendra binesh</option>
</select>
</form>
<br>
<div id="txtHint"><b>your information</b></div>
</td>
    </tr>
          <tr>
            <td height="25">&nbsp;</td>
          </tr>
          <tr>
            <td>
            	<div class="news-flash-bott1">
            	  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tbody><tr>
            	      <td>&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td>&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td height="5"></td>
          	      </tr>
            	    
          	      </tbody></table>
            	</div>
            </td>
          </tr>
        </tbody></table></td>
        <td width="33%" align="right" valign="top"><table border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
           <td>&nbsp;</td>
           </tr>
        </tbody></table></td>
        </tr>
    </tbody></table></td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
</tbody></table>
      </div>
    </div>
  </div>
</div>
<div class="footer-main">
  <div class="footer">
    <table border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td align="center">Copyright©Rajani sharma 2015 All Right Reserved </td>
        <td align="right">&nbsp;</td>
        <td align="right"><a href="#" class="white-link">| Disclaimer</a></td>
      </tr>
    </tbody></table>
  </div>
</div>
 
</body>
</html>