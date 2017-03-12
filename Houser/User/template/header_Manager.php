<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::My space::..Houser.com</title>
<link rel="stylesheet" type="text/css" href="../Houser_design/css/HR_css.css" />
<link rel="stylesheet" type="text/css" href="../houser_design/css/menu.css" />
<link rel="stylesheet" type="text/css" href="../Gallery/design/css/gallery_css.css"  />
<link rel="stylesheet" type="text/css" href="design/css/script_house_description.css" />
<link rel="stylesheet" type="text/css" href="design/css/user_css.css" />
<link rel="stylesheet" type="text/css" href="../search/design/css/search.css" />
<script type="text/javascript" src="design/js/js_navigator_quater.js" ></script>
<script type="text/javascript" src="design/js/script_house_description.js"></script>
<script type="text/javascript" src="design/js/jquery.js"></script>
<script type="text/javascript" src="../Houser_design/js/jquery.min.js"></script>
<script type='text/javascript' src='../Houser_design/js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='../Houser_design/js/jquery.dcmegamenu.1.2.js'></script>
<script type="text/javascript">

$(document).ready(function($){
	$('#mega-menu-tut').dcMegaMenu({
		rowItems: '3',
		speed: 'fast'
	});
});
</script>
<noscript><link rel="stylesheet" type="text/css" href="css/noJ.css" /></noscript>
</head>
<body>
	<div id="main">
     	<div id="header"><center>
			<img src="../houser_design/images/houser_logo&house.png" style="float:left;width:22%;" />
			<img src="../houser_design/images/hd_welcome_text_bar.png" style="float:none;width:50%;" />
			<img src="../houser_design/images/houser_contact.png" style="float:right;width:18%;" /></center>
			<?php	
				include("header.config.php");
			?>	
        </div>
        <br/><br/><br/><br/><br/><br/>
        <div id="navBar">
            <!--<div id="div1"> </div>-->
            <div class="nav_menu">
                <ul id="mega-menu-tut" class="menu">
                    <li><a href="../../houser.com" style="border-left:0;">Home</a></li><!--li home end-->
                    <li><a href="../Gallery">Gallery</a>
                        <ul>
                            <li id="menu-item-1"><a href="#">Buying</a>
                                <ul>
                                    <li><a href="#">All announcement</a></li>
                                    <li><a href="#">New announcement</a></li>
                                    <li><a href="#">Luxurious</a></li>
                                    <li><a href="#">Bureau & Commerce</a></li>
                                    <li><a href="#">foreign real estate</a></li>
                                </ul>
                            </li>
                             <li id="menu-item-1"><a href="#">Renting</a>
                                <ul>
                                    <li><a href="#">All announcement</a></li>
                                    <li><a href="#">New announcement</a></li>
                                    <li><a href="#">Luxurious</a></li>
                                    <li><a href="#">Bureau & Commerce</a></li>
                                    <li><a href="#">foreign real estate</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li><!--li gallery end-->
                    <li><a href="../rated">Top rated</a>
                        <ul>
                            <li><a href="#">All announcement</a></li>
                            <li><a href="#">New announcement</a></li>
                            <li><a href="#">Luxurious</a></li>
                            <li><a href="#">Bureau & Commerce</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Services</a>
                        <ul>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Residency</a></li>
                            <li><a href="#">Restaurant</a></li>
                            <li><a href="#">Estate agency</a></li>
                            <li><a href="#">Rent a car</a></li>
                        </ul>
                    </li>
                    <li><a href="../User">My space</a>
                        <ul>
                            <li><a href="#">Seller</a></li>
                            <li><a href="#">Client</a></li>
                        </ul>
                    </li>
                    <li><a href="../Help">Help</a></li>
                    <li><a onclick="tog_Qsearch()" id="Qtobut">Quick serach</a></li>
                </ul>
            </div>
            <!--<div id="div3" ></div>-->
        </div>
        <br/><br/>
        <div id="tog_search" >
        	<?php
				include("../search/srchOpt.php");
			?>
        </div>
        <div id="mainContent">
            <div id="Qoption" >
                <?php
					include("user.pages/option.php");
				?>
                            
                <noscript>
                    <input type="submit" value="Go There!" />
                </noscript>
            </form>
            </div>
            <br/><br/>