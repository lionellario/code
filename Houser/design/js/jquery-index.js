// JavaScript Document
/*$(document).ready(function(){
	$('#menu_info').hide();
	$('#mnudrl').toggle(function(){
		document.getElementById('active').style.backgroundColor = "#50757C";
		$('#menu_info').slideDown(1000,'easeOutBounce');
		
	},
	function() {
		$('#menu_info').slideUp(1000,'easeOutBounce');
		document.getElementById('active').style.backgroundColor = "#";
	});

});
*/
function dropMenuInfo()
{
	if( document.getElementById('menu_info').style.display == "none" )
	{
		$('#menu_info').slideToggle(1000);
		document.getElementById('active').style.backgroundColor = "#50757C";
	}
	else
	{
		$('#menu_info').slideToggle(1000);
		document.getElementById('active').style.backgroundColor = "#50757C";
	}
}