<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>

<script type="text/javascript">
function second(){
	var un=document.log.uname.value; //document=DOM object
	if(un.length<5){
		document.log.uname.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msg").innerHTML="invalid name";
	}
	else{
		document.log.uname.style.color="black";
		document.getElementById("msg").innerHTML="valid name";
	}
	//alert(un);
}
function first(){
	alert("Hello");
}
</script>



<form id="fm" action="loginValidation.php" name="log" method="post">
<h1>Login</h1>
<p>Username</p>
<input  onkeyup="second()" type="text" name="uname"  id="txt" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" placeholder=""><span id="msg"></span>
<p>Password</p>
<input type="password" name="pass" value= "<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" id="pass" placeholder=""></br>

</p>
<p> <input type="checkbox" name="remember" value="1" id="check"  <?php if(isset($_COOKIE["username"])){ ?> checked <?php }?> /> Remember me</p>

<input type="submit" name="sbt" value="Login"  id="sub"></br></br>
</form>
 <a href="reg.html" id="sign">Don't have an account?</a>
<a href="Homebefore.html" id="home">Home</a><br/><br/><br/>

</body>
</html>


