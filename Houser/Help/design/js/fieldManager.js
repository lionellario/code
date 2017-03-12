function submitManager(stt)
{
   document.getElementById('subm').disabled=stt;
	//var att = sel.getAttribute('disabled');
	//sel.setAttribute('disabled', stt);
	}

function cont(frms, toFind){
	     var result = frms.search(toFind);
	     if (result == -1)
	       return false;
		   else 
		     return true;
	  }
	  
function goodPass(frm){
   	  word = frm.pwd.value;
	  var digit = ["1","2","3","4","5","6","7","8","9"];
 	  var res = false;
	  
	 // alert(word.length);
	  if (word.length == 0)
	    {document.getElementById('spa').innerHTML = '';}
	  
	    for(var i=0; i<digit.length; i++){
			  if (cont(word,digit[i])){
				    res = true;
					i=digit.length;
				  }
			}
			
			//if(res == true)
			  // alert ("true");
			    //else 
				 //alert("false");
			
	  if (word.length > 6){
	      if(res == true)
		     {
			   document.getElementById('spa').innerHTML = 'strong';
			     document.getElementById('spa').style.color = 'green';
			   }
	         else{
		          document.getElementById('spa').innerHTML = 'moderate';
				    document.getElementById('spa').style.color = 'red';
				}
		}  
		
	    
					     else if (word.length <=  4 && word.length > 0){
						     document.getElementById('spa').innerHTML = 'weak';
							 //submitManager(false);
						}	 
	}
	
	function validEmail(frm){
    word =  frm.eml.value;
    if (!(cont(word, "@"))){
       document.getElementById('spanE').innerHTML = 'not a valide email';
	   document.getElementById('spanE').style.color = 'red';
	   submitManager(true);
	   }
	     else{
	         document.getElementById('spanE').innerHTML = '';
			 submitManager(true);
		  }
}

function sameEmail(frm){
	  eml = frm.eml.value;
	  reml = frm.emlrpt.value;
	  
	  if(eml == reml){
	                document.getElementById('spanEr').innerHTML = '';
					submitManager(false);
     }			 
              else{
                   document.getElementById('spanEr').innerHTML = 'emails are not the same';
				   document.getElementById('spanEr').style.color = 'red';
                    submitManager(true);				   
                 }				 
	}
	
	function samePass(frm){
	  pass = frm.pwd.value;
	  passc = frm.pwdc.value;
	  
	  if (passc.length == 0){
	         document.getElementById('spanp').innerHTML = '';
			 submitManager(true);
          }			 
		  else
		  {
	        if(pass == passc){
	           document.getElementById('spanp').innerHTML = '';
			   submitManager(false);
         }			   
                else{
                  document.getElementById('spanp').innerHTML = 'passwords are not the same';
				  document.getElementById('spanp').style.color = 'red';
				  submitManager(true);
				}  
        }				  
	}