<?php 

$id = $_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "live_search");
$query = "SELECT * FROM tbl_customer WHERE productID='$id'";
$result=mysqli_query($connect,$query);
$row=mysqli_fetch_array($result);


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>

 	<script src="app.js"></script>
  <link href="app.css" rel="stylesheet" />
 </head>
 <body>

 <div class="container">
 	<h1 class="" style="text-align: center; color: blue">Product Details</h1><br>
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div style="margin-top: 50px" class="tab-pane active" id="pic-1"><img src="flower.jpg" height="275" width="360"></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252"></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252"></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252"></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252"></div>
						</div>
						<!-- <ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126"></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126"></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126"></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126"></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126"></a></li>
						</ul> -->
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title" style="color: green"><b><?php echo$row['productName']; ?></b></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no"><?php echo$row['review']; ?> reviews</span>
						</div>
						<p class="product-description"><?php echo$row['pDetails']; ?></p>
						<h4 class="price">current price: <span><?php echo$row['price']; ?> TK</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<button class="add-to-cart btn btn-success" type="button">add to cart</button>
							<button class="like btn btn-primary" type="button">Buy<span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 </html>