<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Super Utilisateur" />
  <meta name="generator" content="Joomla! 1.7 - Open Source Content Management" />
<title>::Houser.com::.</title>
<link rel="stylesheet" type="text/css" href="Houser_design/css/HR_css.css" />
<link rel="stylesheet" type="text/css" href="Gallery/design/css/gallery_css.css" />
<link rel="stylesheet" type="text/css" href="search/design/css/search.css" />
<script type="text/javascript" src="Houser_design/js/sliderman.1.3.7.js"></script>
<script type="text/javascript" src="Houser_design/js/jquery.js"></script>
<!--<script type="text/javascript" src="Houser_design/js/jquery.min.js"></script>-->
<script type="text/javascript" src="Houser_design/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="Houser_design/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="Houser_design/js/jquery-index.js"></script>
<script type='text/javascript' src='Houser_design/js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='Houser_design/js/jquery.dcmegamenu.1.2.js'></script>
<script type="text/javascript">

$(document).ready(function($){
	$('#mega-menu-tut').dcMegaMenu({
		rowItems: '3',
		speed: 'fast'
	});
});
</script>
<link href="Houser_design/css/menu.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<div id="main_main">
    	<div id="header_main">
        	<div id="divhdnav">
            	<ul id="navhdinfo">
                    <li><img src="houser_design/images/houser_logo.png" /></li>
                    <li><a href="" id="a">Contact us</a></li>
                    <li id="mnudrl" onclick="dropMenuInfo()"><span id="active"> Menu</span>
                        <ul id="menu_info">
                            <li> <a href="../houser.com"> Home </a> </li>
                            <li> <a href="Gallery"> Gallery </a> </li>
                            <li> <a href="Rated"> Top Rated </a> </li>
                            <li> <a href=""> Services </a> </li>
                            <li> <a href="User"> My space </a> </li>
                            <li> <a href="Help"> Help </a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="mspce"> <a href="" >Manage / Upload property</a> </div>
        	
			<?php	
				include("houser_pages/header.config.php");
			?>	
        </div>
		<br/><br/><br/><br/><br/><br/><br/>
		
		<div id="mainContentD">
            <?php  include($page); ?> <!--display the pages sent by the controller-->
		</div>
		<div id="footer"> this is the footer</div>
    </div><!--end of main-->
    
</body>
</html>


        
        
        
        