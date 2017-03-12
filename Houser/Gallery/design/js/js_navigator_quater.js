// JavaScript Document
window.onload = initFormQuater;
//window.onunload = function() {};

function initFormQuater() {
	initAllDiv();
	document.getElementById("newLocation").selectedIndex = 0;
	document.getElementById("newLocation").onchange = jumpPage;
}

function jumpPage() {
	var newLoc = document.getElementById("newLocation");
	var newPage = newLoc.options[newLoc.selectedIndex].value;

	if (newPage != "") {
		window.location = newPage;
	}
}

/*function toggle(div_id) {
    var el = document.getElementById(div_id);
    if ( el.style.display == 'none' ) { el.style.display = 'block';}
    else {el.style.display = 'none';}
}
function blanket_size(popUpDivVar) {
    if (typeof window.innerWidth != 'undefined') {
        viewportheight = window.innerHeight;
    } else {
        viewportheight = document.documentElement.clientHeight;
    }
    if ((viewportheight > document.body.parentNode.scrollHeight) && (viewportheight > document.body.parentNode.clientHeight)) {
        blanket_height = viewportheight;
    } else {
        if (document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight) {
            blanket_height = document.body.parentNode.clientHeight;
        } else {
            blanket_height = document.body.parentNode.scrollHeight;
        }
    }
    var blanket = document.getElementById('blanket');
    blanket.style.height = blanket_height + 'px';
    var popUpDiv = document.getElementById(popUpDivVar);
    popUpDiv_height=blanket_height/2-200;//200 is half popup's height popUpDiv.style.top = popUpDiv_height' + 'px';
}
function window_pos(popUpDivVar) {
    if (typeof window.innerWidth != 'undefined') {
        viewportwidth = window.innerHeight;
    } else {
        viewportwidth = document.documentElement.clientHeight;
    }
    if ((viewportwidth > document.body.parentNode.scrollWidth) && (viewportwidth > document.body.parentNode.clientWidth)) {
        window_width = viewportwidth;
    } else {
        if (document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth) {
            window_width = document.body.parentNode.clientWidth;
        } else {
            window_width = document.body.parentNode.scrollWidth;
        }
    }
    var popUpDiv = document.getElementById(popUpDivVar);
    window_width=window_width/2-200;//200 is half popup's width popUpDiv.style.left = window_width' + 'px';
}

function takeValue()
{
var change = document.getElementById('imgID');
var src = change.getAttribute('src');
 src = src.substring(src.indexOf("/")+1,src.indexOf("."))
  alert (src);
  return src;
}


function showHint()
{
var xmlhttp;
var str = takeValue();

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	 images = new Array();
	  count = 0;
	// get the different images send from the database by the php 
	var list = xmlhttp.responseText;
	alert(list);
	while(list.length > 0)
	{
	  //taking each image an putting it in an array
	  var subList = list.substring(0, list.indexOf(":"));
	  images [count] = subList;
	  
	  if(list.lastIndexOf(":") != list.indexOf(":"))
	  {
	  list = list.substring(list.indexOf(":")+1,list.length);
	  count++;
	  }
	  else 
	  {
	    list = "";
	  }
	}
	
	 var container = document.getElementById("photos");
     for (var i=0; i<images.length; ++i) 
	 {
	 
     var img = new Image();
     img.src = 'images/'+images[i];
	 img.setAttribute('onclick', 'func(this);');
     img.setAttribute('id', 'imgSize');	 
     container.appendChild(img);
	 }
	 
    //change = document.getElementById('set');
	//alert(images[]);
    //src = change.getAttribute('src');
    //change.setAttribute('src', 'images/'+images[i]);
    }
  }
xmlhttp.open("GET","design/js/getHint.php?q="+str,true);
xmlhttp.send();
}
	
function popup(windowname) {
    blanket_size(windowname);
    window_pos(windowname);
    toggle('blanket');
    toggle(windowname);
    showHint();	
}

function func(control)
{

var A = control.getAttribute('src');
var change = document.getElementById('try');
    var src = change.getAttribute('src');
    $("#try").css("display","none");
   change.setAttribute('src', A);
    $("#try").slideDown(1000);
	
}  */