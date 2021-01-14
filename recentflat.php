<?php
$recentProperties= array();
 
  
  //print_r($recentProperties);
  include("lib.php");
  //recenttext();
  
  $sql="select * from advertisement";
  recentdb($sql);
  //print_r($recentProperties);
?>


 <link rel="stylesheet" type="text/css" href="recent1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<section id="featured">
<div class="container">
<h2>Recent Listings</h2>
<?php for( $i=0;$i<count( $recentProperties);$i++){
	?>

	
	
<div class="col-md-12 featured-pic text-center">

<div class="img-box"></br></br>
<?php
$ul= $recentProperties[$i]["url"];
if(!file_exists($ul)){
	$ul="Flat/flat5.jpg";
}
?>
<img  weidth="300px"height="300px" src="<?php echo $ul;?>" class="img-responsive">
<!---
<ul>
<a href="#"> <li><i class="fa fa-building"><p><?php// echo $recentProperties[$i]["image"];?></p></i> </li></a>
<a href="#"> <li><i class="fa fa-bed"><p>4</p></i> </li></a>
<a href="#"> <li><i class="fa fa-bath"><p>4</p></i> </li></a>

</ul>
--->


<h1><?php echo $recentProperties[$i]["flatname"];?></h1>
<h3><?php echo $recentProperties[$i]["price"];?></h3>
<h4><?php echo $recentProperties[$i]["adress"];?></h4>
<h4><?php echo $recentProperties[$i]["phone"];?></h4>
<ul>

<li><i class="fa fa-bed"><p><?php echo $recentProperties[$i]["bed"];?></p></i> </li>
<li><i class="fa fa-bath"><p>4</p></i> </li>

</ul>

</div>
</div>

<?php }?>

</div>


</section>



