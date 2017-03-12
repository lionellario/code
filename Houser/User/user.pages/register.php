<div id="DisplayCadrePRT">
	<div id="reg_div">
    <form  action="" method="post" name="register">
 		<fieldset class="rw">
        	<legend> Account Details </legend>
            <table border="0" id="tble">
            	<tr>
                	<td>Type: *</td>
                    <td>
                        <select name="type"  />
                    		<option value="none" style="color:#FFF;">- ---- -</option>
                            <option value="seller">Seller</option>
                            <option value="Client">Client</option>
                   		</select>
                    </td>
                </tr>
             	<tr>
                	<td >Email: *</td>
                    <td >
                    	<input type="text" name="eml" maxlength="50" class="inp" placeholder="Enter your email address" 
                        onblur="validEmail(this.form)"  /><br><span id="spanE"> </span>
                    </td>
                	<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Repeat email: *</td>
                    <td >
                    	<input type="text" name="emlrpt" maxlength="30" class="inp" 
                        placeholder="Retype the email address" onblur="sameEmail(this.form)"><br><span id="spanEr"> </span>
                    </td>
              	</tr>
              	<tr>
                	<td>Password: *</td>
                    <td>
                    	<input type="password" name="pwd" maxlength="50" class="inp" placeholder="Enter your password" 
                        onkeyup="goodPass(this.form)"><br><span id="spa" style="color:red;"> </span>
                    </td>
                	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm: *</td>
                    <td>
                    	<input type="password" name="pwdc" maxlength="50" class="inp" placeholder="Retype the password" 
                        onblur="samePass(this.form)"><br><span id="spanp"> </span>
                    </td>
                	<td> <strong style="color:#900;">* Required field</strong></td>
              	</tr>
            </table>
        </fieldset>
        <fieldset class="rw">
       	  <legend> Personal Details </legend>
            <table  border="0" id="tble">
             	<tr>
              		<td > First Name: * </td>
                    <td> <input type="text" name="fname" class="inp"  placeholder="First name" /></td>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name: * </td>
                    <td> <input type="text" name="lname" class="inp" maxlength="30" placeholder="Last name" /></td>
       	  		</tr>
          		<tr>
                	<td> Profession: * </td>
                    <td> <input type="text" name="prof" class="inp" maxlength="30" placeholder="Profession" /></td>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Compagny: * </td>
                    <td> <input type="text" name="comp" class="inp" maxlength="30" placeholder="Company" /></td>
       	  		</tr>
                <tr>
       		  		<td >Country: *</td>
       		  		<td> <select name="cntry" />
                    		<option value="" style="color:#FFF;">- Country -</option>
                            <option value="Afganistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bonaire">Bonaire</option>
                            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Canary Islands">Canary Islands</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Channel Islands">Channel Islands</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Island">Cocos Island</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote DIvoire">Cote D'Ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaco">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Ter">French Southern Ter</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Great Britain">Great Britain</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea North">Korea North</option>
                            <option value="Korea Sout">Korea South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Midway Islands">Midway Islands</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Nambia">Nambia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherland Antilles">Netherland Antilles</option>
                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                            <option value="Nevis">Nevis</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau Island">Palau Island</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Phillipines">Philippines</option>
                            <option value="Pitcairn Island">Pitcairn Island</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                            <option value="Republic of Serbia">Republic of Serbia</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="St Barthelemy">St Barthelemy</option>
                            <option value="St Eustatius">St Eustatius</option>
                            <option value="St Helena">St Helena</option>
                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                            <option value="St Lucia">St Lucia</option>
                            <option value="St Maarten">St Maarten</option>
                            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Samoa American">Samoa American</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome & Principe">Sao Tome &amp; Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tahiti">Tahiti</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Erimates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States of America">United States of America</option>
                            <option value="Uraguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City State">Vatican City State</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                            <option value="Wake Island">Wake Island</option>
                            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                    </select></td>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City: * </td>
                    <td> <input type="text" name="city" class="inp" maxlength="30" placeholder="City or town" /></td>
            	</tr>
                <tr> 
                	
       	  		</tr>
       	 		<tr> 
                	<td> Address: * </td>
                    <td> <input type="text" name="ads" class="inp" maxlength="30" placeholder="Address" /></td>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telephone: * </td>
                    <td> <input type="text" name="tel" class="inp" maxlength="30" placeholder="Telephone number" /></td>
       	  		</tr>
            </table>
        </fieldset>
        <fieldset class="rw">
       	  <legend> Further information </legend>
            <table  border="0" id="tble">
             	<tr> 
                	<td > CNI/NIC * </td>
                    <td > will be used to upload a photo </td>
       	  		</tr>
				<tr> 
                	<td > Gender: * </td>
                    <td > <input type="radio" name="gend" value="male" checked  /> Male
						 <input type="radio" name="gend" value="female" /> Female </td>
       	  		</tr>
       	 		<tr> 
                	<td > Birthdate: </td>
                    <td> <select name="month">
                             <option>- Month -</option>
                             <option value="January">January</option>
                             <option value="February">February</option>
                             <option value="March">March</option>
                             <option value="April">April</option>
                             <option value="May">May</option>
                             <option value="June">June</option>
                             <option value="July">July</option>
                             <option value="August">August</option>
                             <option value="September">September</option>
                             <option value="October">October</option>
                             <option value="November">November</option>
                             <option value="December">December</option>
    					</select> 
    					<select name="day">
                            <option>- Day -</option>
                            <?php
								$i = 1;
								for( $i; $i <= 31; $i++ )
									echo '<option value="'.$i.'">'.$i.'</option>';
							?>
                       	</select>
						<select name="year">
                        	<option>- Year -</option>
                        	<?php
								$i = date("Y");
								for( $i; $i >= 1900; $i-- )
									echo '<option value="'.$i.'">'.$i.'</option>';
							?>
                        </select></td>
       	  		</tr>
       	  		<tr>
                	<td > Website:  </td>
                    <td> <input type="text" name="web" value="http://" class="inp" maxlength="50" /></td>
       	  		</tr>
            </table>
        </fieldset>
        <fieldset class="rw">
       	  <legend> Terms and Mailing </legend>
            <table border="0" id="tble">
             	<tr>
                	<td ><input type="checkbox" value="accept_ok" name="term" />
                    <label> I have read and I accept the <a href="#">Terms and Conditions</a></label>
                    </td>
               	</tr>
               	<tr>
                	<td ><input type="checkbox" value="email_ok" name="recv" />
                    <label> I want to receive personalized offers by your site</label>
                    </td>
                </tr>
          </table>
          <input type="submit"  id="subm" name="sub"  value="Register &raquo" class="button"  />
        </fieldset>
    </form>
    <?php
	
		@$mail = $_POST['eml'];
		@$pwd = $_POST['pwd'];
		@$fn = $_POST['fname'];
		@$ln = $_POST['lname'];
		@$pf = $_POST['prof'];
		@$cp = $_POST['comp'];
		@$ctr = $_POST['cntry'];
		@$ct = $_POST['city'];
		@$ad = $_POST['ads'];
		@$tl = $_POST['tel'];
		@$gd = $_POST['gend'];
		@$bd = $_POST['month'].', '.$_POST['day'].', '.$_POST['year'];
		@$tm = $_POST['term']; @$rcv = $_POST['recv'];
		@$sub = $_POST['sub'];
		
		if( isset($sub) )
		{
			echo $mail .'<br>'.
				 $pwd .'<br>';
				 
			$quer = "INSERT INTO reg (email, password) VALUES ('$mail', '$pwd')";
			//mysql_query($quer);
			echo "success";
		}
		
	?>
	</div>
</div>