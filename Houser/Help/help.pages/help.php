<div id="DisplayCadreHLP">
	<script type="text/javascript">
		function showAnswer()
		{
			var qs = document.getElementById('quest').value;
			if( qs == 'a1' )
				document.getElementById('rnse1').style.display = "block";
			else
				document.getElementById('rnse1').style.display = "none";
				
			if( qs == 'a2' )
				document.getElementById('rnse2').style.display = "block";
			else
				document.getElementById('rnse2').style.display = "none";
			
			if( qs == 'a3' )
				document.getElementById('rnse3').style.display = "block";
			else
				document.getElementById('rnse3').style.display = "none";
			
			if( qs == 'a4' )
				document.getElementById('rnse4').style.display = "block";
			else
				document.getElementById('rnse4').style.display = "none";
			
			if( qs == 'a5' )
				document.getElementById('rnse5').style.display = "block";
			else
				document.getElementById('rnse5').style.display = "none";
			
			if( qs == 'a6' )
				document.getElementById('rnse6').style.display = "block";
			else
				document.getElementById('rnse6').style.display = "none";
			
			if( qs == 'a7' )
				document.getElementById('rnse7').style.display = "block";
			else
				document.getElementById('rnse7').style.display = "none";
			
			if( qs == 'a8' )
				document.getElementById('rnse8').style.display = "block";
			else
				document.getElementById('rnse8').style.display = "none";
			
			if( qs == 'a9' )
				document.getElementById('rnse9').style.display = "block";
			else
				document.getElementById('rnse9').style.display = "none";
			
			if( qs == 'a10' )
				document.getElementById('rnse10').style.display = "block";
			else
				document.getElementById('rnse10').style.display = "none";
			
			if( qs == 'a11' )
				document.getElementById('rnse11').style.display = "block";
			else
				document.getElementById('rnse11').style.display = "none";
			
			if( qs == 'a12' )
				document.getElementById('rnse12').style.display = "block";
			else
				document.getElementById('rnse12').style.display = "none";
				
			if( qs == 'a13' )
				document.getElementById('rnse13').style.display = "block";
			else
				document.getElementById('rnse13').style.display = "none";
				
			if( qs == 'a14' )
				document.getElementById('rnse14').style.display = "block";
			else
				document.getElementById('rnse14').style.display = "none";
				
			if( qs == 'a15' )
				document.getElementById('rnse15').style.display = "block";
			else
				document.getElementById('rnse15').style.display = "none";
				
			if( qs == 'a0' )
			{
				document.getElementById('rnse1').style.display = "none";
				document.getElementById('rnse2').style.display = "none";
				document.getElementById('rnse3').style.display = "none";
				document.getElementById('rnse4').style.display = "none";
				document.getElementById('rnse5').style.display = "none";
				document.getElementById('rnse6').style.display = "none";
				document.getElementById('rnse7').style.display = "none";
				document.getElementById('rnse8').style.display = "none";
				document.getElementById('rnse9').style.display = "none";
				document.getElementById('rnse10').style.display = "none";
				document.getElementById('rnse11').style.display = "none";
				document.getElementById('rnse12').style.display = "none";
				document.getElementById('rnse13').style.display = "none";
				document.getElementById('rnse14').style.display = "none";
				document.getElementById('rnse15').style.display = "none";
			}
		}
	</script>
	<div id="help">
    	<h1> User service </h1>
        <span> 
        	Dear user, welcome to our User service. For any question or inquiry, feel free to contact
        	us by filling the form below. You will be contacted back in the next 24 hours.
        </span>
        <h3> Here are some selected subjects. Browse and see proposed answers: </h3>
        
        <h6><strong>Subject:</strong></h6> 
        <select name="subject" id="quest" onchange="showAnswer()">
       		<option value="a0" selected="selected"> -- select -- </option>
       		<option value="a1" > My announcement has been cancelled </option>
      		<option value="a2" > I can't find my announcement on the web site </option>
     		<option value="a3" > I can't publish an announcement </option>
      		<option value="a4" > I am not comfortable with an announcement </option>
      		<option value="a5" > I can't delete an announcement </option>
           	<option value="a6" > I can't update or modify an announcement </option>
        	<option value="a7" > I have some problems with paiement sections </option>
     		<option value="a8" > I can't contact an advertiser </option>
        	<option value="a9" > I can't log in and enter my space </option>
           	<option value="a10" > I can't add or upload pictures </option>
            <option value="a11" > I have a suggestion or an offer for partnership </option>
          	<option value="a12" > I would like to delete my account or update some information</option>
        	<option value="a13" > I received an undesirable e-mail or SMS </option>
        	<option value="a14" > I have a problem with an advertiser </option>
        	<option value="a15" > I have another problem, not in the list </option>
        </select>
        
        <div id="pQ">
            <p id="rnse1">
            	Your announcement can be cancelled for many reasons:<br />
                - The first time you post an announcement, this one has a period of 75 days
                on the website, after that it will be automatically cancelled.<br />
                - Each seller has a limitted number of post, which is 4 posts.
                Exceeded that, you can not more post an announcement. But please,
                notice that if you need more anouncement as well as more time on the website,
                you will have to pay or choose among our proposed packs.<br />
                - You have to be aware that, somebody can signal an abuse from your anouncement.
                In this case, your anouncement will be checked up, and if there is a fraud, you
                will be informed and given at most 3 days to rectify, otherwise your anouncement 
                will be automatically deleted even if you have paid.
                 
            </p>
            <p id="rnse2"> 
            	Pour retrouver votre annonce, cliquez sur le lien contenu dans 
                l'email que vous avez reçu lors de la mise en ligne de votre annonce. 
                Vous pouvez également recevoir toutes vos annonces par email en renseignant 
                votre adresse email dans la rubrique "Mes annonces". Si vous pouvez consulter 
                votre annonce par ce biais, c'est qu'elle figure sur le site.
				<br />
				Si vous ne la retrouvez pas par le moteur de recherche, vérifiez d'abord le type 
                (offre ou demande), la catégorie et le département indiqués en haut de votre annonce 
                pour savoir où la rechercher. Vérifiez également que le mot-clé que vous avez saisi 
                figure bien dans le texte de votre annonce.
            </p>
            <p id="rnse3">
            </p>
            <p id="rnse4"> answer4 </p>
            <p id="rnse5"> answer5 </p>
            <p id="rnse6"> answer6 </p>
            <p id="rnse7"> answer7 </p>
            <p id="rnse8"> answer8 </p>
            <p id="rnse9"> answer9 </p>
            <p id="rnse10"> answer10 </p>
            <p id="rnse11"> answer11 </p>
            <p id="rnse12"> answer12 </p>
            <p id="rnse13"> answer13 </p>
            <p id="rnse14"> answer14 </p>
            <p id="rnse15"> answer15 </p>
        </div>
        
        <h4> If you need more information, fill the form below: </h4>
        <div id="qtform">
        	<p class="jlbform"> Name: </p>
            <p class="inpform"> <input type="text" name="name" maxlength="100" /> </p>
            <p class="jlbform"> Email: </p>
            <p class="inpform"> <input type="text" name="email" maxlength="100" /> </p>
            <p class="jlbform"> Message: </p>
            <p class="inpform"> <textarea name="mesge" rows="10" cols="40"></textarea> </p>
            <p id="butsend"> <input type="submit" name="send" value="send"  /> </p>
     	</div>
    </div>    		
    <a href="?ans=advises"> Get some advises </a>
</div>
