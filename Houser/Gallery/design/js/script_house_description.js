//window.onload = initAllDiv;

function initAllDiv() {
	var allLinks = document.getElementsByTagName("a");
	
	for (var i=0; i<allLinks.length; i++) {
		if (allLinks[i].className.indexOf("menuLink") > -1) {
			allLinks[i].onclick = toggleMenu;
		}
	}
}

function toggleMenu() {
	
	var startMenu = this.href.lastIndexOf("/")+1;
	var stopMenu = this.href.lastIndexOf("u")+2;
	var thisMenuName = this.href.substring(startMenu,stopMenu);
 
	$("#"+thisMenuName).slideToggle(200);
	
	
	return false;
}