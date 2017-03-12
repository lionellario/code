		<?php  
			include("template/header_Manager.php");
			include($pages);
		?>
		<div id="log_an_right">
        	
            <div id="field_log">
                <?php
                    include("../Houser_pages/main_log.php");
                                
                    if( !empty($so) )
                        echo '<div id="'.$st.'"><a href="../Houser_pages/sign_out.php">'.$so.'</a></div>';
                ?>
            </div>
            <div id="new">
                <br/><br/>
                <div id="band">
                	<center><b>
						<img src="../houser_design/images/bg-ll.png" style="float:left;" />Announcement
						<img style="float:right;" src="../houser_design/images/bg-rr.png" /></b>
                 	</center>
				</div>
                    <?php
                        $an = new Gallery;
                        $an->getAnnonce();
                    ?>
                 <br/>
                 <a href="#" id="lk"><div id="view">View more</div></a>
            </div>
			<!--<div id="new">
				<div class="socialmediacontainer count">
					<div class="tt"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1400006231.html#_=1400579995720&amp;count=horizontal&amp;counturl=http%3A%2F%2Fwww.sothebysrealty.com%2Feng%2Fsales%2Fdetail%2F180-l-562-sn9q5d%2Fluxury-villa-at-the-elbe-hamburg-ha-22765&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fwww.sothebysrealty.com%2Feng%2Fsales%2Fdetail%2F180-l-562-sn9q5d%2Fluxury-villa-at-the-elbe-hamburg-ha-22765&amp;size=m&amp;text=%2C%20Hamburg%2C%20Hamburg%2C%20Germany%20%E2%80%93%20Luxury%20Hom&amp;url=http%3A%2F%2Fwww.sothebysrealty.com%2Feng%2Fsales%2Fdetail%2F180-l-562-sn9q5d%2Fluxury-villa-at-the-elbe-hamburg-ha-22765" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" s7642935217600698973="true" replaced="true" style="width: 110px; height: 20px;"></iframe></div>
					<div class="fb"><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://static.ak.facebook.com/connect/xd_arbiter/dgdTycPTSRj.js?version=41#channel=f239e7a2c&amp;origin=http%3A%2F%2Fwww.sothebysrealty.com" s7642935217600698973="true" replaced="true" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://s-static.ak.facebook.com/connect/xd_arbiter/dgdTycPTSRj.js?version=41#channel=f239e7a2c&amp;origin=http%3A%2F%2Fwww.sothebysrealty.com" s7642935217600698973="true" replaced="true" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div><div class="fb-like fb_iframe_widget" data-href="http://www.sothebysrealty.com/eng/sales/detail/180-l-562-sn9q5d/luxury-villa-at-the-elbe-hamburg-ha-22765" data-layout="button_count" data-width="80" data-show-faces="false" data-colorscheme="light" data-font="arial" data-send="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;font=arial&amp;href=http%3A%2F%2Fwww.sothebysrealty.com%2Feng%2Fsales%2Fdetail%2F180-l-562-sn9q5d%2Fluxury-villa-at-the-elbe-hamburg-ha-22765&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=80"><span style="vertical-align: bottom; width: 78px; height: 20px;"><iframe name="f2c9332ea4" width="80px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/plugins/like.php?app_id=&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FdgdTycPTSRj.js%3Fversion%3D41%23cb%3Df111ac4164%26domain%3Dwww.sothebysrealty.com%26origin%3Dhttp%253A%252F%252Fwww.sothebysrealty.com%252Ff239e7a2c%26relation%3Dparent.parent&amp;color_scheme=light&amp;font=arial&amp;href=http%3A%2F%2Fwww.sothebysrealty.com%2Feng%2Fsales%2Fdetail%2F180-l-562-sn9q5d%2Fluxury-villa-at-the-elbe-hamburg-ha-22765&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=80" s7642935217600698973="true" replaced="true" class="" style="border: none; visibility: visible; width: 78px; height: 20px;"></iframe></span></div></div>
					<div class="gp"><div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background-position: initial initial; background-repeat: initial initial;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1400579995790" name="I0_1400579995790" src="https://apis.google.com/u/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;count=true&amp;origin=http%3A%2F%2Fwww.sothebysrealty.com&amp;url=http%3A%2F%2Fwww.sothebysrealty.com%2Feng%2Fsales%2Fdetail%2F180-l-562-sn9q5d%2Fluxury-villa-at-the-elbe-hamburg-ha-22765&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.PWlY4vucQMc.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Fz%3Dzcms%2Frs%3DAItRSTPNgNtAsHwPrzZ8OrXj9K978uyGFw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1400579995790&amp;parent=http%3A%2F%2Fwww.sothebysrealty.com&amp;pfname=&amp;rpctoken=81414972" data-gapiattached="true" s7642935217600698973="true" replaced="true" title="+1"></iframe></div></div>
				</div>
            </div>-->
        </div>
     </div>
	<div id="footer"> this is the footer</div>
</body>
</html>