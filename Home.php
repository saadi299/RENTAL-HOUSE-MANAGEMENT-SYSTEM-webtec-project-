<!DOCTYPE html>
<?php 
session_start();
if(!isset($_SESSION["uname"])){
	header("Location:login.php");
	
}else{
	
	
/**
* Website: www.TutorialsClass.com
**/
 

 

//echo $_SESSION["uname"];
?>
<html>
<head>
 <title>RentalFlat.com </title>
 <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</head>
<body>


  <section id="nav-bar">
 <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><img src="logo1.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="featured.html">Featured Listings</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="recentflat.php">Recent Flat</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="about.html">About Us</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="Owner advertisement1.html">Advertisement</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="login.php">Search Flat</a>
		
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
		
      </li>
	   </ul>
	  <!--<li class="nav-item">
        <a class="nav-link" href="reg.html">Signup</a>
      </li>  -->
      <!--
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
	  
	  -----Search------
	  
	  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search ">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	  
	  
	  -->
   
    
  </div>
</nav>
  </section>
  
  
  <!----Slider----> 
  <div id="slider">
   <div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
	<img class="d-block img-fluid" src="slide1.jpg">
     <div class="carousel-caption"> 
	 <h1>Discover Your New Home</h1>
	  </div>
	  
    </div>
    <div class="carousel-item">
	<img class="d-block img-fluid" src="slide2.jpg">
     <!-- <img src="..." class="d-block w-100" alt="..."> -->
	  <div class="carousel-caption"> 
	 <h1>Discover Your New Home</h1>
	  </div>
    </div>
    <div class="carousel-item">
     <img class="d-block img-fluid" src="slide3.jpg">
	  <div class="carousel-caption"> 
	 <h1>Discover Your New Home</h1>
	  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>

<!------Fetured Listings----->
<section id="featured">
<div class="container">
<h2>Featured Listings</h2>
<div class="row">
<div class="col-md-6 featured-pic text-center">

<div class="img-box"></br></br>
<img src="Flat/flat5.jpg" class="img-responsive">
<ul>
<a href="#"> <li><i class="fa fa-building"><p>2000Sq.ft.</p></i> </li></a>
<a href="#"> <li><i class="fa fa-bed"><p>4</p></i> </li></a>
<a href="#"> <li><i class="fa fa-bath"><p>4</p></i> </li></a>

</ul>
</div>
<h3>BDT 50,000</h3>
<h4>Gulshan1,Gulshan,Dhaka.</h4>
</div>
<div class="col-sm-6 featured-pic text-center">

<div class="img-box"></br></br>
<img src="Flat/flat5.jpg" class="img-responsive">
<ul>
<a href="#"> <li><i class="fa fa-building"><p>2000Sq.ft.</p></i> </li></a>
<a href="#"> <li><i class="fa fa-bed"><p>4</p></i> </li></a>
<a href="#"> <li><i class="fa fa-bath"><p>4</p></i> </li></a>

</ul>
</div>
<h3>BDT 50,000</h3>
<h4>Gulshan1,Gulshan,Dhaka.</h4>
</div>

<div class="col-sm-6 featured-pic text-center">

<div class="img-box"></br></br>
<img src="Flat/flat5.jpg" class="img-responsive">
<ul>
<a href="#"> <li><i class="fa fa-building"><p>2000Sq.ft.</p></i> </li></a>
<a href="#"> <li><i class="fa fa-bed"><p>4</p></i> </li></a>
<a href="#"> <li><i class="fa fa-bath"><p>4</p></i> </li></a>

</ul>
</div>
<h3>BDT 50,000</h3>
<h4>Gulshan1,Gulshan,Dhaka.</h4>
</div>


<div class="col-sm-6 featured-pic text-center">

<div class="img-box"></br></br>
<img src="Flat/flat5.jpg" class="img-responsive">
<ul>
<a href="#"> <li><i class="fa fa-building"><p>2000Sq.ft.</p></i> </li></a>
<a href="#"> <li><i class="fa fa-bed"><p>4</p></i> </li></a>
<a href="#"> <li><i class="fa fa-bath"><p>4</p></i> </li></a>

</ul>
</div>
<h3>BDT 50,000</h3>
<h4>Gulshan1,Gulshan,Dhaka.</h4>
</div>




</div>
</div>


</section>

<!----About--->

<section id="about">

<div class="container">
<div class="row">
<div class="col-sm-8">
 
<h2>About Us</h2>
<div class="about-content">
Home Rental is a leading, online search engine for rental housing. Founded in 2019, the site was developed in response to a gap in the market: there was no simple, pain-free way of finding all rental housing listings in one spot. Home Rental set out to fix this, making it our mission to help apartment hunters and managers navigate through the online "jungle" of rental housing and finally get connected easily.

Searching for Rental properties:
Homerental.com is our answer to the problem of easily finding a place to rent. It makes searching for rental housing as easy as using booking.com for travel deals and bdjobs.com to find jobs. We pull listings from over 12,000 property management and owner websites and add them to our search database on a nightly basis. At any given time, we have anywhere from 700,000 to 1 million active listings - that's more than any other site.
Furthermore, we developed our website to be a complete decision-making resource. We list profiles for every neighborhood in the country so you can decide if it's a place you want to live. You can search by map or through lists. You can filter your search by property features and amenities. And once you find a listing you're interested in, you can go directly to the property's site to make inquiries.
So, if you're ready to see just about every available apartment, townhouse, condo and single or multifamily rental property out there, you've found the right search engine. Welcome to Home Rental, The Housing Search Engine.

</div>
<button type="button" class="btn btn-primary">Read more>>
</button>
</div>

<div class="col-md-4 skills-bar">
<p>Html </p>
<div class="progrss">
<div class ="progress-bar" style="width:80%;">80%</div>
<p>Css </p>
<div class="progrss">
<div class ="progress-bar" style="width:100%;">100%</div>
<p>Php </p>
<div class="progrss">
<div class ="progress-bar" style="width:70%;">70%</div>
<p>Java Script </p>
<div class="progrss">
<div class ="progress-bar" style="width:85%;">85%</div>
</div>
</div>



</div>
</div>


</section>	  
</body>
</html>

<?Php }?>