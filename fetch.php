<?php
$data=array();
include("lib.php");
$sql="select * from users where emailid='".$_REQUEST["emailid"]."'";
//$sql = "SELECT * FROM $usertable WHERE PartNumber = '$partid' ";
//echo $sql;
loadFromMySQL($sql);
//loadFromText($sql);
//print_r($data);
foreach($data as $v){
	if($v["emailid"]==$_REQUEST["emailid"]){
		//echo "<p>";
	    echo "Email already exists ";
	   // echo "</p>";
	}else{
		echo "ok";
	}
}
if(sizeof($data)==0)
	echo "Not found";
//print_r($data);


?>