<form method="post" action="#launch?search">
    <div id="mesg">
        <h2> Search and Get your property in a click </h2>
        <h5> We work with you, just enter exactly or approximately what you need </h5>
    </div>
    <div id="maincd">
		<strong>Category:</strong> &nbsp;&nbsp;&nbsp;
    	<span id="buy" onclick="flipB()"> Buying </span>
    	<span id="rent" onclick="flopR()"> Renting </span><br/>
    	<table width="200" border="0">
      		<tr>
        		<td>&nbsp;
        			<select name="town" />
                        <option value="none" style="color:#FFF;">Select a town</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                	</select>
        		</td>
                <td>&nbsp;
                    <select name="quarter" />
                        <option value="none" style="color:#FFF;">Select a quarter</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                    </select>
                </td>
                <td>&nbsp;
                    <select name="category" />
                        <option value="none" style="color:#FFF;">Category</option>
                        <option value="house">House / Villa</option>
                        <option value="Appartment">Appartment</option>
                        <option value="bureau">Bureau & commerce</option>
                        <option value="land">Land</option>
                        <option value="hotel">Hotel</option>
                        <option value="restaurant">Restaurant</option>
                        <option value="studio">studio flat</option>
                    </select>
                </td>
                <td>&nbsp;
                    <input type="text" name="keysch" maxlength="50" placeholder="key word"  id="inputqs" />
                </td>
              </tr>
              <tr>
                <td>&nbsp;
                    <select name="piece" />
                        <option value="none" style="color:#FFF;">piece</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="more">more</option>
                    </select>
                </td>
                <td>&nbsp;
                    <select name="minprice" />
                        <option value="none" style="color:#FFF;">Min. price</option>
                        <?php
                            $min = 0;
                            $max = 65000000;
                            while($min <= $max)
                            {
                                $formt = number_format($min, 0);
                                echo '<option value="'.$min.'">'.$formt.'</option>';
                                $min = $min + 25000;
                            }
                        ?>
                    </select> <h6 class="indfc">Fcfa</h6>
                </td>
                <td>&nbsp;
                    <select name="maxprice" />
                        <option value="none" style="color:#FFF;">Max. price</option>
                        <?php
                            $min = 0;
                            $max = 65000000;
                            while($min <= $max)
                            {
                                $formt = number_format($min, 0);
                                echo '<option value="'.$min.'">'.$formt.'</option>';
                                $min = $min + 25000;
                            }
                        ?>
                    </select> <h6 class="indfc">Fcfa</h6>
                </td>
                <td>&nbsp;
                    <input type="submit" value="search" name="buton" id="butqs" />
                </td>
     		</tr>
		</table>
        
    </div>
</form>

