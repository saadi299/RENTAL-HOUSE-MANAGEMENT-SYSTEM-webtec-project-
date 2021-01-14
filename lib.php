<?php

function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","rentalflat");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	while($row = mysqli_fetch_assoc($result)) {
	$data[]=$row;
	}
}
	function insertintosql($sql){
		$conn = mysqli_connect("localhost", "root", "","rentalflat");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	}
	
	
	
	function recenttext(){
		global $temp;
		$myfile = fopen("recentflat.txt", "r") or die("Unable to open file!");
	//$data=array();
	//loads the array with file data
	while($line=fgets($myfile)) {
		//$line=trim($line);
		$ar=explode("-",$line);
		$temp["flatname"]=$ar[0];
		$temp["adress"]=$ar[1];
		$temp["unit"]=$ar[2];
		$temp["bed"]=$ar[5];
		$temp["price"]=$ar[7];
		$temp["phone"]=$ar[8];
				$recentProperties[]=$temp;
	}
	fclose($myfile);
		
		
	}
	
	
	function recentdb($sql){
		global $recentProperties;
		$recentProperties= array();
	$conn = mysqli_connect("localhost", "root", "","rentalflat");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	while($row = mysqli_fetch_assoc($result)) {
		//print_r($row);
	
		$recentProperties[]=$row;
		
	}
	}


?>