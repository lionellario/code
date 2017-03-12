<div id="DisplayCadreGAL">
<?php
	include("gallery_handler.php");
	$chk = new Gallery;
	
	//variables
	@$tp_tmp = $_GET['load'];
	@$rf_tmp = $_GET['ref'];
	
	//substring the reference for checking
	$refce = strtoupper( $rf_tmp );
	$ref = substr( $refce, 4, (strlen($refce) - 1) );
	$cod = substr( $refce, 0, 3 );
	
	$tp = $chk->checkType($ref);
	$rf = $chk->checkReference($ref);
	$code = $chk->checkCode($cod);
	$h = $chk->checkCodeReference($cod, $ref);
	
	if( isset( $tp_tmp ) && isset( $rf_tmp ) )
	{
		//lengths
		if( strcmp($tp, $tp_tmp) != 0  || $rf == 0 || $code == 0 || $h == 0 )
			include("../hts-error-cache/error.htm");
		else
		{
						$price = $chk->getItemPrice($ref);
						$Reference = $rf_tmp;
						$Town = $chk->getItemTown($ref);
						$Quarter = $chk->getItemQuater($ref);
						$Address = $chk->getItemAddress($ref);
						$Type = $chk->getItemType($ref);
						$Room = $chk->getItemRoom($ref);
						$Surface = $chk->getItemSurface($ref);
						$desc = $chk->getItemEtq($ref);
			echo 
				'
					<div id="item_displayer">
						<div id="wind_left">
							<h5>SALE - #'.$Reference.'</h5>
							<h4> Contact the Announcer </h4>
							<form method="post" action="">
							<table  border="0">
							  <tr>
								<td>&nbsp;</td>
								<td>&nbsp;* required field</td>
							  </tr>
							  <tr>
								<td>&nbsp;*Title: </td>
								<td>
									<select class="fieldOption" name="gender">
										<option selected="Mr. " >Mr. </option>
										<option value="Mme. ">Mme. </option>
										<option value="Miss. ">Miss. </option>
									</select>
								</td>
							  </tr>
							  <tr>
								<td>&nbsp;*Name: </td>
								<td>&nbsp;<input type="text" name="nme" maxlength="50" class="wind_fld" Value="sarah"/></td>
							  </tr>
							  <tr>
								<td>&nbsp;*Phone: </td>
								<td>&nbsp;<input type="text" name="tel" maxlength="50" class="wind_fld" Value=""/></td></td>
							  </tr>
							  <tr>
								<td>&nbsp;*Email: </td>
								<td>&nbsp;<input type="text" name="eml1" maxlength="50" class="wind_fld" Value=""/></td></td>
							  </tr>
							  <tr>
								<td>&nbsp;*Confirm:</td>
								<td>&nbsp;<input type="text" name="eml2" maxlength="50" class="wind_fld" Value=""/></td></td>
							  </tr>
							</table>
							<table border="0">
								<tr>
									<td>&nbsp;*Message: </td>
								</tr>
								<tr>
									<td>&nbsp;<textarea name="msg" class="wind_textArea" cols="30" rows="5"></textarea></td>
								</tr>
							</table>
							<table border="0">
							  <tr>
								<td>&nbsp;<input type="submit" name="butint"  class="wind_but" Value="Send"/></td>
							  </tr>
							</table>
						</form>
						<h4> Announcer Details </h4>
						<table border="0">
							<tr>
								<td>&nbsp;Email:</td>
								<td>&nbsp; XXXXX@yaho..com</td></td>
							</tr>
							<tr>
								<td>&nbsp;Phone:</td>
								<td>&nbsp; 94651297</td></td>
							</tr>
						</table>
							';
			echo	   '</div>
						<div id="wind_view">';
							//echo $code;
							echo '<div style="width:100%; height:28px; margin-top: 15px;">
									<div class="bot_met_crit">Signal </div>
									<div class="bot_met_crit"> Save </div>
									<div class="bot_met_crit">Propose </div>
									<div class="bot_met_crit">Share </div>
								  </div>';
			echo		'</div>';
			echo		'
					</div>
					<div id="wind_img">';
						$string = $chk->imageDetailArray($ref);
						$token = strtok($string, ",");
						$i = 0;
						while( $token )
						{
							print("<img src='images/".$token."' class='imgIDsp' />");
							$token = strtok(",");
							$i++;
						}
					
			echo   '</div>
					'.$i.' Images available
					<div id="item_descript">';
			echo		'<div class="main_text_box"> 
							<h1> Description </h1>
							<p> '.$desc.'</p>
						</div>
						<div class="detl"> Details: </div>
						<div class="details_list">
							<ul>
								<li><strong>Price:</strong> '.$price.' </li>
								<li><strong>Reference:</strong> #'.$Reference.' </li>
								<li><strong>Town:</strong> '.$Town.' </li>
								<li><strong>Quarter:</strong> '.$Quarter.' </li>
								<li><strong>Address:</strong> '.$Address.' </li>
								<li><strong>Type:</strong> '.$Type.' </li>
								<li><strong>Room:</strong> '.$Room.' </li>
								<li><strong>Surface:</strong> '.$Surface.' </li>
							</ul>
						</div>
						<div class="but_form"><a href="formulaire.php?query='. $rf_tmp.'" > I am interested </a> </div>';
			echo	'</div>';
			echo	'<div class="sug_tsp_met"> Suggestion on the same item reference </div>';
					$chk->selectSpecificHouse( $Quarter );
		}
	}
	
	else
	{
		include("../hts-error-cache/error.htm");
	}
?>

</div>