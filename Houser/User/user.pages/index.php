<div id="DisplayCadrePRT">
    <div id="authentif">
        <div id="auth_sinup">
            <h4> Sign up as a seller: </h4>
            <h5> Creating your account is fast and easy. </h5>
            <p> 
                This allows you to easily find and manage your
                announcements. Make more announcement faster and 
                control them on the same place.
            </p><br />
            <a href=""> Create a seller account </a>
            
            <h4> Sign up as a Client: </h4>
            <h5> Here also, creating your account is fast and easy. </h5>
            <p> 
                While browsing through the gallery,
                you can save, manage or control the announcements at the same time on the same place.
            </p><br/>
            <a href=""> Create a client account </a>
        </div>
        <div id="auth_login">
        	<script type="text/javascript">
				function slidelogopt1()
				{
					//check first if the first is out
					if(document.getElementById('aa2').style.display == 'block')
						$("#aa2").slideToggle(600);
						
					if(document.getElementById('aa1').style.display == 'none')
						$("#aa1").slideToggle(600);
					else
						$("#aa1").slideToggle(600);
				}
				
				function slidelogopt2()
				{
					if(document.getElementById('aa1').style.display == 'block')
						$("#aa1").slideToggle(600);
						
					if(document.getElementById('aa2').style.display == 'none')
						$("#aa2").slideToggle(600);
					else
						$("#aa2").slideToggle(600);
				}
			</script>
			<?php
			
				echo '<div>';
				echo '
				<div id="authlogbut"> <strong>Connect as: </strong><br/><br/>
					<span onclick="slidelogopt1()"> Seller </span>
					<span onclick="slidelogopt2()"> Client </span>
				</div>
				
				<!--this is the login form for the sellers-->
				<div class="authfieldlog" id="aa1">
					<form action="?gwd=tn_p" method="post">
						<table >
							<tr>
								<td align="right"> Email:</td>
								<td><input type="text" name="admail" value=""  maxlength="80" /></td> </tr>
							<tr>
								<td align="right">Password: </td>
								<td><input type="password" name="pass" value=""  maxlength="80" /> </td>
							</tr>
							<tr>
								<td></td>
								<td >
									<input type="submit" value="Connect as seller" name="sbt1" class="button1" /> 
								</td> 
						   </tr>
						</table>
					</form>
					<br/>
					<a href="" >Cannot access my account.</a>
				</div>
				
				<!--this is the login form for the visitors-->
				<div class="authfieldlog" id="aa2">
					<form action="?gwd=tn_p" method="post">
						<table>
							<tr>
								<td align="right"> Email:</td>
								<td><input type="text" name="admail" value=""  maxlength="80" /></td> </tr>
							<tr>
								<td >Password: </td>
								<td><input type="password" name="pass" value=""  maxlength="80" /> </td>
							</tr>
							<tr>
								<td></td>
								<td >
									<input type="submit" value="Connect as client" name="sbt2" class="button1" /> 
								</td> 
						   </tr>
						</table>
					</form>
					<br/>
					<a href="" >Cannot access my account.</a>
				</div>
				<br>';
				
					// on teste si le visiteur a soumis le formulaire de connexion
					@$sbmt1 = $_POST['sbt1'];
					@$sbmt2 = $_POST['sbt2'];
					@$adm = $_POST['admail'];
					@$pwsd = $_POST['pass'];
					
					//check up of a seller which number 1
					if (isset($sbmt1)) {
					   if ((isset($adm) && !empty($adm)) && (isset($pwsd) && !empty($pwsd))) 
					   { 
						  // on teste si une entrée de la base contient ce couple login / pass
						  $sql = "SELECT email, password FROM registers WHERE email= '$adm' AND password = '$pwsd'"; 
						  $req = mysql_query($sql);
						  
						  // si on obtient une réponse, alors l'utilisateur est un membre
						  if (mysql_num_rows($req) == 1)
						  { 
								 mysql_free_result($req);
								 session_start();
								 $sql = "SELECT fname FROM registers WHERE email='$adm'"; 
								 $rar = mysql_query($sql);
								 if($row = mysql_fetch_array($rar))
								 {
									$rqs = $row['fname'];
								 }
								$_SESSION['logHR'] = $rqs;
								header("location: ?gwd=tn_p");
								exit();
						  } 
						  // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
						  elseif (mysql_num_rows($req) == 0) {
							  echo "<br/>";
							  echo '<div id="errcrt">
										<h5> ERROR: either your email address or your password is wrong, please just retype.</h5>
									</div>';
						  } 
						  // sinon, alors la, il y a un gros problème :)
						  else { 
							 $erreur = "Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion."; 
						  } 
					   } 
					   else {
							echo "<br/>";
							echo '<div id="errcrt">
									<h5> Sorry, there is at least one empty field, check the fields please.</h5>
									</div>'; 
					   } 
					}
					
					//check up of a client which number 2
					if (isset($sbmt2)) {
					   if ((isset($adm) && !empty($adm)) && (isset($pwsd) && !empty($pwsd))) 
					   { 
						  // on teste si une entrée de la base contient ce couple login / pass
						  $sql = "SELECT email, password FROM registers WHERE email= '$adm' AND password = '$pwsd'"; 
						  $req = mysql_query($sql);
						  
						  // si on obtient une réponse, alors l'utilisateur est un membre
						  if (mysql_num_rows($req) == 1)
						  { 
								 mysql_free_result($req);
								 session_start();
								 $sql = "SELECT fname FROM registers WHERE email='$adm'"; 
								 $rar = mysql_query($sql);
								 if($row = mysql_fetch_array($rar))
								 {
									$rqs = $row['fname'];
								 }
								$_SESSION['logHR'] = $rqs;
								header("location: ?gwd=tn_p");
								exit();
						  } 
						  // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
						  elseif (mysql_num_rows($req) == 0) {
							  echo "<br/>";
							  echo '<div id="errcrt">
										<h5> ERROR: either your email address or your password is wrong, please just retype.</h5>
									</div>';
						  } 
						  // sinon, alors la, il y a un gros problème :)
						  else { 
							 $erreur = "Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion."; 
						  } 
					   } 
					   else {
							echo "<br/>";
							echo '<div id="errcrt">
									<h5> Sorry, there is at least one empty field, check the fields please.</h5>
									</div>'; 
					   } 
					}
				echo '</div>';
			
			?>
        </div>
    </div>
    <div id="slideimg">nkjhBfv hjBhbgz jhzxfh jhziugf zhfgh zhbfgiuhzb fjhzbgf 
            hfhgjhzxf hzfuhbgzd jhzdfh nz fhbvgzdjnbiuzdhbf hzfdhzndbfhbvzdf 
            jhzdfhzjhfbvughzdb zhdbfhg zdfhzdbfgn zidfbgij fgizdbfg zdhfbgnzd fiyzbf zhbf
    </div>
</div>



<!--<div id="DisplayCadrePRT">
	<a href="../user/?action=register"> register </a>
</div>-->