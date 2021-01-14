<?php

$data=array();
include("lib.php");
$file=fopen("users.txt","r") or die("file error"); ///it opens the text file and reads  if it cant find it it says file error
while($c=fgets($file)){   // gets the file and stores it in a variable c
	
	$ar=explode("-",$c); // explode function seperates the text in the c variable where there is a "-" and which is the text from the user.
	$users[$ar[0]]=$ar[5];  // stores the value of array index 5 to the array of "users" of index/key "username"
} 

$flag=0;
session_start();  // session is started
foreach($users as $key=>$value){ //loop is run for all the data in the users array with key to value
	if($_REQUEST["uname"]==$key && ($_REQUEST["pass"])==$value){// checks if the uname and password in "request" array matches the key and value of the "users" array.
		echo "Login success"; 
		$_SESSION["valid"]="yes"; // the session is valid and is yes if matches
		$_SESSION["uname"]=$_REQUEST["uname"];// the username from the "request" array is set to the "session" array
		$flag=1; // flag is turned on
		break;
	}
}
if($flag==0){
	echo "<p style='color:red'>Invalid User</p>";
}
if($flag==1){
	
	if(isset($_POST["remember"])) {
		setcookie ("username",$_POST["uname"],time()+ 3600);
		setcookie ("password",$_POST["pass"],time()+ 3600);
	} else {
		setcookie("username","");
		setcookie("password","");
		
	}
	header("Location:Home.php");
}

?>