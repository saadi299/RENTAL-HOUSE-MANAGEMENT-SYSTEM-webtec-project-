<!DOCTYPE html>
<?php 
session_start();
if(!isset($_SESSION["uname"])){
	header("Location:login.php");
	
}else{
//echo $_SESSION["uname"];
}
?>

<html>

<head>

</head>

<body>

<?php

    
   $data=array();
   include("lib.php");
	
	if(strlen($_REQUEST["flatname"])==0)
	{
		echo "<p style='color:red'>Please fill up Flat Name.</p>";
	}
	else if(strlen($_REQUEST["adress"])==0)
	{
		echo "<p style='color:red'>Please fill up Address.</p>";
	}
	else if(strlen($_REQUEST["unit"])==0)
	{
		
		echo "<p style='color:red'>Please Provide Floor or Unit Number.</p>";
	}
	
	else if(strlen($_REQUEST["description"])==0)
	{
		
		echo "<p style='color:red'>Please add some description or facilities.</p>";
	}
	else if(strlen($_REQUEST["size"])==0)
	{
		
		echo "<p style='color:red'>Please fill up the siza of the flat in (SQ.Ft).</p>";
	}
	else if(strlen($_REQUEST["bed"])==0)
	
	{
		
		echo "<p style='color:red'>Pls Provide Phone Number.</p>";
	}
	else if(strlen($_REQUEST["bath"])==0)
	
	{
		
		echo "<p style='color:red'>Please fill up Email.</p>";
	}
	else if(strlen($_REQUEST["price"])==0)
	
	{
		
		echo "<p style='color:red'>Please fill up Price.</p>";
	}
	else if(strlen($_REQUEST["phone"])==0)
	
	{
		
		echo "<p style='color:red'>Please fill up Phone.</p>";
	}
	else if(strlen($_REQUEST["phone"])!=11)
	
	{
		
		echo "<p style='color:red'>Pls Provide Phone Number.</p>";
	}
	else if(strlen($_REQUEST["emailid"])==0)
	
	{
		
		echo "<p style='color:red'>Please fill up Email.</p>";
	}
	
	else{
		
		//$sql="INSERT INTO flatdata(flatname,address,unit,description,size,bed,bath,price,phone,emailid) VALUES ('".$_REQUEST["flatname"]."','".$_REQUEST["address"]."','".$_REQUEST["unit"]."','".$_REQUEST["description"]."','".$_REQUEST["size"]."','".$_REQUEST["bed"]."','".$_REQUEST["bath"]."','".$_REQUEST["price"]."','".$_REQUEST["phone"]."','".$_REQUEST["emailid"]."'";
		
		
		print_r($GLOBALS);
$errors=0;
$source=$_FILES['fileToUpload']['tmp_name'];
$target="Flat/".$_FILES['fileToUpload']['name'];
if(file_exists($target)){
	$errors=1;
	echo "File exists";
}
else{
	if(move_uploaded_file($source,$target)){
		echo "File uploaded:".$target;
		$sql="insert into advertisement( flatname ,adress ,unit ,description, size, bed, bath, price, phone, emailid, url ) values('".$_REQUEST["flatname"]."','".$_REQUEST["adress"]."','".$_REQUEST["unit"]."','".$_REQUEST["description"]."','".$_REQUEST["size"]."','".$_REQUEST["bed"]."','".$_REQUEST["bath"]."','".$_REQUEST["price"]."','".$_REQUEST["phone"]."','".$_REQUEST["emailid"]."','".$target."')";
		//$sql="insert into advertisement(flatname,adress,unit,description,size,bed,bath,price,phone,emailid) values('".$_REQUEST["flatname"]."','"$_REQUEST["adress"]"','".$_REQUEST["unit"]."','".$_REQUEST["description"]."','".$_REQUEST["size"]."','".$_REQUEST["bed"]."','".$_REQUEST["bath"]."','".$_REQUEST["price"]."','".$_REQUEST["phone"]."','".$_REQUEST["emailid"]."')";
		echo $sql;
		insertintosql($sql);
		header("Location:Home.php");
		
	}
	
	/*$sql="update advertisement set url='".$target."' where emailid='".$_POST['emailid']."'";
	echo $sql;
	$conn = mysqli_connect("localhost", "root", "","rentalflat");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn)){
		echo "File uploaded";
	}*/
}
		
	}
	
	
	?>
	


</body>


</html>