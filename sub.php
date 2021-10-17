
<html>
<head>

</head>
<body>
<form action="onsubmit.html" id="form-submit" >
NAME: <input type="text" id="name" onkeyup="valid()" /><br/><br/>
</form>
<script>
function valid() {
	var submit =document.getElementById("form-submit");
	var name =document.getElementById("name").value;
	if(name.length == 6) {
		submit.submit();
	}
 
}

</script>

</body>
</html>