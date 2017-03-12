<div id="DisplayCadreGAL">
	<?php
        include("gallery_handler.php");
        $go = new Gallery;
        
        if( isset( $_GET['query'] ) )
            $quartier = $_GET['query'];
            
        $go->selectSpecificHouse( $quartier );
		
    ?>
</div>
