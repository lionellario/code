
<h3> Login </h3>
	<div id="login">
		<form action="?gwd=tn_p" method="post">
			<table>
				<tr>
					<td> Username:</td>
				</tr>
				<tr>
					<td><input type="text" name="admail" value=""  maxlength="80" class="loginfield" /></td> </tr>
				<tr>
					<td>Password: </td>
				</tr>
				<tr>
					<td><input type="password" name="pass" value=""  maxlength="80" class="loginfield" /> </td>
				</tr>
				<tr>
					<td><p>Please note your username and password are case sensitive. </p> </td>
				</tr>
				<tr>
					<td><input type="submit" value="login" name="sbt_as_seller" class="logbut" /> </td> 
				</tr>
			</table>
		</form>
		<a href="" style="text-decoration:none;">Forgot password?</a>
	</div>

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

<div id="int_div_login">

	<p id="p_int_div">  Create an account for  more services </p>
		<ul id="ullog">
			<li> Sign up free, simple and fast </li>
			<li> Get closer to the anouncer </li> 
			<li> save your favourite anouncements </li>
			<li> Manage your space and anouncements </li>
		</ul>
    <hr/>
    
	<div id="pshopt"> Connect as: <br/><br/>
		<span onclick="slidelogopt1()"> Seller </span>
		<span onclick="slidelogopt2()"> Client </span>
	</div>
    
    <div class="logfm1" id="aa1">
		<form action="?gwd=tn_p" method="post">
			<table style="font-family:Candara;font-size:16px;">
				<tr>
					<td align="right"> Email:</td>
					<td><input type="text" name="admail" value=""  maxlength="80" class="field_log" /></td> </tr>
				<tr>
					<td align="right">Password: </td>
					<td><input type="password" name="pass" value=""  maxlength="80" class="field_log" /> </td>
				</tr>
                <tr>
                	<td></td>
                    <td>
                    	<input type="checkbox" value="remember_me_as_sel" name="rembmesel" />
                    	<label> Remember me</label>
                    </td>
                </tr>
				<tr>
					<td></td>
					<td align="right">
						<input type="submit" value="Connect as seller" name="sbt_as_seller" class="button1" /> 
					</td> 
			   </tr>
			</table>
		</form>
		<a href="" style="text-decoration:none;">Any problem ?</a>
	</div>
	
	<!--this is the login form for the visitors-->
	<div class="logfm2"  id="aa2">
		<form action="?gwd=tn_p" method="post">
			<table style="font-family:Candara;font-size:16px;">
				<tr>
					<td align="right"> Email:</td>
					<td><input type="text" name="admail" value=""  maxlength="80" class="field_log" /></td> </tr>
				<tr>
					<td align="right">Password: </td>
					<td><input type="password" name="pass" value=""  maxlength="80" class="field_log" /> </td>
				</tr>
                <tr>
                	<td></td>
                    <td>
                    	<input type="checkbox" value="remember_me_as_clt" name="rembmeclt" />
                    	<label> Remember me</label>
                    </td>
                </tr>
				<tr>
					<td></td>
					<td align="right">
						<input type="submit" value="Connect as client" name="sbt_as_client" class="button1" /> 
					</td> 
			   </tr>
			</table>
		</form>
		<a href="" style="text-decoration:none;">Any problem ?</a>
	</div>
    
	<br>
	<span id="crt">
		<a href="http://localhost/Houser.com/partner/?action=register">Create an Acccount</a>
	</span><br>
    
    <?php
		
		$so = ""; //sign out
		$st = ""; // style css
		
		@$adm = $_POST['admail'];
		@$pwsd = $_POST['pass'];
		@$a = $_POST['rembmesel'];
		@$b = $_POST['rembmeclt'];
		
		@$sbmtsel = $_POST['sbt_as_seller'];
		@$sbmtclt = $_POST['sbt_as_client'];
		
		if( isset($sbmtsel) )
		{
			$lgin->loginWithPostData($adm, $pwsd, 1);
			//echo "you have: ".$a;
		}
		
		elseif( isset($sbmtclt) )
		{
			$lgin->loginWithPostData($adm, $pwsd, 2);
		}
	
	?>

    
</div>
