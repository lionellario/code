		<?php  
			include("template/header_Manager.php");
			include($pages);
		?>
		<div id="log_an_right">
        	
            <div id="field_log">
                <?php
                    include("../Houser_pages/main_log.php");
                                
                    if( !empty($so) )
						echo '	<form method="post" action="../Houser_pages/sign_out.php">
									<input type="submit" name="logout" value="'.$so.'" id="'.$st.'" />
								</form>';
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
						include("help_handler.php");
						$ace = new Help;
						$ace->getAnnonce();
					?>
                 <br/>
                 <a href="#" id="lk"><div id="view">View more</div></a>
            </div>
        </div>
     </div>
	<div id="footer"> this is the footer</div>
</body>
</html>
