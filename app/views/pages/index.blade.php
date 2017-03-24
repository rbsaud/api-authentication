@extends('layouts.default')
@section('content')

<div class="container"> 
<div class="row mbtwenty">

<div class="tb">Featured Products in BuySellNP </div>

 
<div id="owl-demo" class="owl-carousel owl-theme">
<a>
  <div class="item">
<img src="/products/ft.jpg" class="img-responsive">
<span class="prn">Shoes on sale for Kayamu </span> <br>
<span class="price"> Rs . 2000 </span>
 </div>

 </a>

<a>
   <div class="item">
<img src="/products/ft.jpg" class="img-responsive">
Item name<br>
Rs . 2000 
 </div>
 </a>

   <div class="item">
<img src="/products/ft.jpg" class="img-responsive">
Item name<br>
Rs . 2000 
 </div>

   <div class="item">
<img src="/products/ft.jpg" class="img-responsive">
Item name<br>
Rs . 2000 
 </div>

   <div class="item">
<img src="/products/ft.jpg" class="img-responsive">
Item name<br>
Rs . 2000 
 </div>
   <div class="item">
<img src="/products/ft.jpg" class="img-responsive">
Item name<br>
Rs . 2000 
 </div>

 
  <div class="item"><h1>16</h1></div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
 
  var owl = $("#owl-demo");

  owl.owlCarousel({
  	   autoPlay: 2500,
  	   stopOnHover:true,
  	   slideSpeed:200,
  	   rewindNav:true

  });

  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
 
});

</script>

</div>
</div>

<div class="container">
<div class="row">

<div class="tb" style="margin-bottom:10px;">To Buy or Find anything select any category below: </div>

<div class="col-lg-8">


<div class="row">

<a>
<div class="col-sm-3 col-xs-4  text-center">
<div class="cathome">
<img src="/images/appearel.png" class="img-responsive">
<h3 >Appearales  & Accessories</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-3 col-xs-4  text-center">
<div class="cathome">
<img src="/images/mobile-tablet.png" class="img-responsive">
<h3 >Mobile Tablets</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-3 col-xs-4  text-center">
<div class="cathome">
<img src="/images/computer.png" class="img-responsive">
<h3 >Computer Laptops</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-3 col-xs-4  text-center">
<div class="cathome">
<img src="/images/auto.png" class="img-responsive">
<h3 >Car Bike Auto</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-3 col-xs-4  text-center">
<div class="cathome">
<img src="/images/electronics.png" class="img-responsive">
<h3 >Electronics</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-3 col-xs-4  text-center">
<div class="cathome">
<img src="/images/furniture.png" class="img-responsive">
<h3 >Furniture</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-3 col-xs-4  text-center">
<div class="cathome">
<img src="/images/realestate.png" class="img-responsive">
<h3 >Real Estate</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-3 col-xs-4  text-center">
<div class="cathome">
<img src="/images/others.png" class="img-responsive">
<h3 >Others</h3>
</div>
</div>
</a>






</div>
</div>

<div class="col-lg-4 sell" >
<div class="sellhead text-center">
Sell your New or Used PRODUCTS 
</div>
<div class="text-center">
Easy | Fast | and FREE
</div>
<hr>
<div class="text-center" style="padding-bottom:20px;">
<button class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-plus"></span> Post a New AD</button>
</div>

BuySellNP!!  is a free local classifieds website where you can post free advertisements related a business, product and service offered in Nepal!!.

</div>


</div>
</div>


<div class="container">
<div class="row">
<div class="tb" style="margin-bottom:10px;">Latest Ads on Buy Sell Nepal </div>
<a>
<div class="col-sm-2 col-xs-6 text-center">
<div class="cathome">
<img src="/images/mobiles.jpg" class="img-responsive">
<h3 >Home Applicances</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-2 col-xs-6 text-center">
<div class="cathome">
<img src="/images/mobiles.jpg" class="img-responsive">
<h3 >Home Applicances</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-2 col-xs-6 text-center">
<div class="cathome">
<img src="/images/mobiles.jpg" class="img-responsive">
<h3 >Home Applicances</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-2 col-xs-6 text-center">
<div class="cathome">
<img src="/images/mobiles.jpg" class="img-responsive">
<h3 >Home Applicances</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-2 col-xs-6 text-center">
<div class="cathome">
<img src="/images/mobiles.jpg" class="img-responsive">
<h3 >Home Applicances</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-2 col-xs-6 text-center">
<div class="cathome">
<img src="/images/mobiles.jpg" class="img-responsive">
<h3 >Home Applicances</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-2 col-xs-6 text-center">
<div class="cathome">
<img src="/images/mobiles.jpg" class="img-responsive">
<h3 >Home Applicances</h3>
</div>
</div>
</a>

<a>
<div class="col-sm-2 col-xs-6 text-center">
<div class="cathome">
<img src="/images/mobiles.jpg" class="img-responsive">
<h3 >Home Applicances</h3>
</div>
</div>
</a>
</div>

</div>
@stop

