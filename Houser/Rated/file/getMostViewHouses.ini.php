<?php
	echo '
	<div id="win" class="window">
		<div class="Wbody">
			<div class="WbodyL"><img src="../Gallery/images/'.$row["image"].'" class= "imgID" /> </div>
			<div class="WbodyR">
				<h4>SALE - #'.$row["code"].'-'.$row["reference"].'</h4>
				<ul>
					<li><strong>'.$row["domain"].'</strong></li>
					<li style="border:0;">'.$row["quater"].'</li>
				</ul>
				<hr/>
				<p class="petq">'.substr($row["etiquette"], 0, 100).'... </p>
				<p class="pprix"> <strong>Price: '.$row["prix"].' Fcfa / Month </strong> </p>
			</div>
		</div>
		<div class="Wfooter"> 
			<span>
				<a href="../Gallery/?/u/h/token='.$row["domain"].'&ref='.$row["code"].'-'.$row["reference"].'"> 
				<img src="../Gallery/images/more.png" />
				MORE</a>
			</span>
			<span>
				<img src="../Gallery/images/save.png" class="rezimg" />
				SAVE
			</span>
			<span>
				<img src="../Gallery/images/bottom-share-facebook.png" class="rezimg" />
				LIKE
			</span>
		</div>
	</div>
   ';
?>