function getCookie(c_name)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
  {
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
}

function get_visitor(url,ptitle)
{

var divid='tell_fullscreen';	
var xmlhttp;
if (url=="")
  {
  return;
  }
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
    	var status=xmlhttp.responseText;
		if(status=='showpage')
		{
		document.getElementById(divid).style.display='none';
		}
		if(status=='hidepage')
		{
		document.getElementById(divid).style.display='block';
		}
    }
	
	else
	{
	document.getElementById(divid).style.display='block';
	}
  }
xmlhttp.open("GET",url+'?pagetitle='+ptitle,false);
xmlhttp.send();
}

