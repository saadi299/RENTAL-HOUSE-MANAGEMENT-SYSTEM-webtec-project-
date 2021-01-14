<!DOCTYPE html>

<html>

<head>

</head>

<body>

<?php
 
  $data=array();
   include("lib.php");
	
	if(strlen($_POST["firstname"])==0)
	{
		echo "<p style='color:red'>Pls fill up First Name.</p>";
	}
	else if(strlen($_POST["lastname"])==0)
	{
		echo "<p style='color:red'>Pls fill up Last Name.</p>";
	}
	else if(strlen($_POST["dob"])==0)
	{
		
		echo "<p style='color:red'>Pls Provide Date Of Birth.</p>";
	}
	else if(strlen($_POST["gender"])==0)
	{
		
		echo "<p style='color:red'>Pls check gender.</p>";
	}
	else if(strlen($_POST["phone"])==0)
	
	{
		
		echo "<p style='color:red'>Pls Provide Phone Number.</p>";
	}
	else if(strlen($_POST["phone"])!=11)
	
	{
		
		echo "<p style='color:red'>Pls Provide Phone Number.</p>";
	}
	
	else if(strlen($_POST["emailid"])==0)
	
	{
		
		echo "<p style='color:red'>Pls fill up Email.</p>";
	}
	else if(strlen($_POST["pass"])<8)
	{
		
		echo "<p style='color:red'>valid  Password length.</p>";
	}
	else if(strlen($_POST["confirmpass"])==0)
	
	{
		
		echo "<p style='color:red'>Pls fill up Confirm Password.</p>";
	}
	
	else{
		$sql="INSERT INTO users(firstname,lastname,dob,gender,phone,emailid,pass,confirmpass) VALUES ('".$_REQUEST["firstname"]."','".$_REQUEST["lastname"]."','".$_REQUEST["dob"]."','".$_REQUEST["gender"]."','".$_REQUEST["phone"]."','".$_REQUEST["emailid"]."','".md5($_REQUEST["pass"])."','".md5($_REQUEST["confirmpass"])."')";
		insertintosql($sql);
		
		echo "Registration Complete";
		
	}
		
		
		$file=fopen('users.txt','a') or die("fle open error");
$c=0;
if($_REQUEST["pass"]==$_REQUEST["confirmpass"]){
	$c=$c+fwrite($file,"\r\n");
	$c=$c+fwrite($file,$_REQUEST["firstname"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["lastname"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["gender"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["phone"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["emailid"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,($_REQUEST["pass"]));
}

//echo $c." charactes appended";
	

//echo "<br/>I am from PHP";
		
		
	?>
	<!--<table border="1px">
	<tr>
		<td><?php //echo $_POST["firstname"]; ?></td>
		<td><?php //echo $_POST["lastname"]; ?></td>
		<td><?php //echo $_POST["dob"]; ?></td>
		<td><?php //echo $_POST["gender"]; ?></td>
		<td><?php //echo $_POST["phone"]; ?></td>
		<td><?php //echo $_POST["emailid"]; ?></td>
		
		
		
	</tr>
	</table>-->
 

   
</body>






























</html>