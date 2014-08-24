<html>
<head>
<script type ="text/javascript">
	function load(thediv, thefile){
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp= new XMLHttpRequest();
	}
	else{
		xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function(){
	
	//CHECK IF THE REQUEST IS COMPLETE AND RESPONSE IN READY
	
		if(xmlhttp.readyState== 4 && xmlhttp.status== 200){    
			document.getElementById(thediv).innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET",thefile,true);
	xmlhttp.send();
	}
</script>
</head>
<body>

	<input type= "submit" onclick= "load('adiv','containsText.php');">
	<div id= "anotherdiv"></div>
	
</body>
</html>