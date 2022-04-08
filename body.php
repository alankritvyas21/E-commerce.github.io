<section class="avcodel-grids-hny-2">
	<div class="grids-hny-2-mian py-5">
		<div class="container py-lg-5">
				<div class="welcome-grids row mt-5">
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/grid1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product
								</div>
							</a>
						</div>
						<h4><a href="#URL">Hand Bags</a></h4>

				</div>
				
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/grid3.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">
								Watches</a></h4>

					
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/grid2.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">Shoes</a></h4>

				
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/grid4.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">Suits</a></h4>

				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/grid5.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">
								Accessories</a></h4>

					
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/grid6.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Product</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">
								Fragrances</a></h4>

					
				</div>
			</div>

		</div>
	</div>
</section>
<!-- //content-6-section -->

<section class="avcodel-content-w-photo-6">
	<!-- /specification-6-->
	  <div class="content-photo-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="align-photo-6-inf-cols row">
					
						<div class="photo-6-inf-left col-lg-6">
								<img src="assets/images/1.jpg" class="img-fluid" alt="">
						</div>
					</div>
				 </div>
			 </div>
	 </section>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/abcd.png"  style="width:100%;">
        
      </div>
    </div>

    
  </div>
</div>
		
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
						</div>
					</div>
				
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
						
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										
										<?php
                    include 'db.php';
								                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 1 AND 3";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "				                                                      
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>Rs.$pro_price</h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
		