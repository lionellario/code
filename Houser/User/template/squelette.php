		<?php  
			include("template/header_Manager.php");
			include($pages);
		?>
		<div id="log_an_right">
        	
            <!--<div id="field_log">
                <?php
                    /*include("../Houser_pages/main_log.php");
                                
                    if( !empty($so) )
                        echo '<div id="'.$st.'"><a href="../Houser_pages/sign_out.php">'.$so.'</a></div>';*/
                ?>
            </div>-->
            
            <div id="new">
                <br/><br/>
                <div id="band">
                	<center><b>
						<img src="../houser_design/images/bg-ll.png" style="float:left;" />Announcement
						<img style="float:right;" src="../houser_design/images/bg-rr.png" /></b>
                 	</center>
				</div>
                    <?php
						include("user_handler.php");
						$an = new User;
						$an->getAnnonce();
					?>
                 <br/>
                 <a href="#" id="lk"><div id="view">View more</div></a>
            </div>
        </div>
     </div>
	<div id="footer"> this is the footer</div>
</body>
</html>
