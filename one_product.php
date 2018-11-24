<?php  ?>
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$('.image-product-small').click(function(event) {
			$('.image-product-small').removeClass('do');
			$(this).toggleClass('do');
		});
	});
</script>

		<?php include('header.php'); ?>
		<!-- mainpic -->
	
		<!-- end_mainpic -->
		<!-- product -->
		<div class="one-product">
			<div class="one-product-wrapper">
				<!-- pictrai -->
			<div class="picture-product-one">
			
				<div class="image-product">
					<div class="arrow-left"></div>
					<a href=""><img src="https://www.titan22.com/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/6/864501-497-a.png" alt=""></a>
					<div class="arrow-right"></div>
				</div>
				<div class="image-product-small-wrapper">
				<div class="image-product-small">
					<img src="https://www.titan22.com/media/catalog/product/cache/thumbnail/88x110/beff4985b56e3afdbeabfc89641a4582/8/6/864501-497-a.png" alt="">
				</div>
				<div class="image-product-small">
					
					<img src="https://www.titan22.com/media/catalog/product/cache/thumbnail/88x110/beff4985b56e3afdbeabfc89641a4582/8/6/864501-497-a.png" alt="">
					</div>
				</div>
			</div>
			<!-- end pictrai -->
			<!-- information -->
			<div class="information-product">
				<div class="page-title-wrapper">
					<h1>Nike NBA Icon Edition Swingman Jersey - Joel Embiid Philadelphia 76ers</h1>
				</div>
				<div class="product-attribute-brand">
					Nike NBA
				</div>
				<div class="price-box">
					<span class="price">3,900.000VND</span>
				</div>
				<div class="detail-product">
					<ul class="attribute-detail-top">
						<li><span>Based on the authentic NBA jersey, the Icon Edition Swingman (Philadelphia 76ers) Men's Nike NBA Connected Jersey lets you rep your team while helping keep you cool and comfortable through every move.</span></li>
					</ul>
				</div>
				<!-- size -->
				<div class="size-product">
					<select name="" id="">
						<option value="">Size</option>
						<option value="">S</option>
						<option value="">M</option>
						<option value="">L</option>
						<option value="">XL</option>
					</select>
				</div>
				<!-- end_size -->
				<div class="quantity-product">
					<input type="number" class="input-quantity" min="1" maxlength="12" placeholder="SL">
				</div>
				<!-- soluong -->
				<div style="clear:both"></div>
				<div class="box-tocart">
					<button type="submit">
						<img src="images/add-to-cart.png" alt="">
					</button>
				</div>
				<!-- end_soluong -->
			</div>
			<!-- end_information -->
			</div>
		</div>
		<!-- end product -->
		<div style="clear:both;"></div>

		<div class="related-products">
			<strong>RELATED PRODUCTS</strong>
		</div>
		<!-- 	item-relate-product	 -->
		<div class="relate-one-product">
			<ul>
				<?php for($i=1;$i<=4;$i++) {?>
				<li class="slick-slide-item-product" ">
					<div class="product-item-info">
						<a href="">
							<span class="product-image-container" style="width: 152px">
								<img src="https://www.titan22.com/media/catalog/product/cache/small_image/152x190/beff4985b56e3afdbeabfc89641a4582/a/o/ao5709-010.png" alt="">
							</span>
						</a>
						<div class="product-item-details">
							<strong class="product-item-name">
								<a href="#">Nike Dry NBA Tee - Joel Embiid Philadelphia 76ers Nike NBA</a>
							</strong>
							<p class="product-text">Nike NBA</p>
						<span class="getFinalPrice-ss"><span class="price">1,999.000VND</span></span>
					</div>
					</div>
				</li>
		<?php } ?>
			</ul>
		</div>
		<!-- 	item-relate-product	 -->
		<div style="clear:both;"></div>
		<?php include('footer.php') ?>
<?php ?>