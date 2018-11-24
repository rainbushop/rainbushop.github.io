<?php  ?>
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$('.brand-rainbu').next().slideUp(0);
		$('.brand-rainbu').click(function(event) {
			/* Act on the event */
			$(this).next().slideToggle(500);
		});
	});
</script>
		<?php include('header.php'); ?>
		<!-- mainpic -->
		<div class="main-picture" style="background-image:url('images/0.png');width: 100%;height: 558px;background-size: cover;"></div>
		<!-- end_mainpic -->
		<!-- product -->
		<div id="homeproduct" class="elife-dashboard">
		    <div class="elife-page-wrapper full-width">
		        <div class="home-product-list">
		            <h4 class="color-black text-hot-product"><span class="color-yellow"> Products</span></h4>
		            <div class="menu-products-wrapper-rainbu">
		            <div class="menu-product-rainbu">
		            	<h3>PRODUCTS</h3>
		            	<hr>
		            	<ul>
		            		<li>
		            			<a href="#">Footwear</a>
		            		</li>
		            		<li>
		            			<a href="#">Clothing</a>
		            		</li>
		            		<li>
		            			<a href="#">Accessories</a>
		            		</li>
		            		<li>
		            			<a href="#">Nike Basketball</a>
		            		</li>
		            	</ul>
		            	<h3 style="padding-top:10px;border-bottom: 1px solid #ccc;">FILTER BY</h3>
		            		<div class="brand-rainbu"><h3 style="padding-top:10px">BRAND</h3></div>
		            	<ul class="item-menu-rainbu">
		            		<li>
		            			<a href="#"><span class="label">Nike(12)</span></a>
		            		</li>
		            		<li>
		            			<a href="#"><span class="label">adidas(50)</span></a>
		            		</li>
		            		<li>
		            			<a href="#"><span class="label">Converse(50)</span></a>
		            		</li>
		            		<li>
		            			<a href="#"><span class="label">Jordan(20)</span></a>
		            		</li>
		            		<li>
		            			<a href="#"><span class="label">Peak(56)</span></a>
		            		</li>
		            	</ul>

		            		<div class="brand-rainbu"><h3 style="padding-top:10px;">SIZE</h3></div>
		            	<ul class="item-menu-rainbu">
		            		<li>
		            			<a href="#"><span class="label">6(10)</span></a>
		            		</li>
		            		<li>
		            			<a href="#"><span class="label">7(20)</span></a>
		            		</li>
		            		<li>
		            			<a href="#"><span class="label">8(40)</span></a>
		            		</li>
		            		<li>
		            			<a href="#"><span class="label">9(15)</span></a>
		            		</li>
		            		<li>
		            			<a href="#"><span class="label">10(10)</span></a>
		            		</li>
		            	</ul>

		            </div>
		            <div class="product-list-wrapper2">
		            	<?php $i = 0; while ($i < 8) { $i++; ?>
		                <div class="content-product">
		                    <div class="item-product">
		                        <a class="no-link" href="one_product.php" title="">
		                            <div class="product-image">
		                                <img class="lazy" width="262" height="262" src="http://www.sendoushop.com/fileserver/images/smartweb_sendou/resizepng-262x262/eupload_clothing/nikeelite-15-1-(1).jpg" style="display: inline-block;">
		                            </div>
		                            <div class="home-product-name font-roboto" title="Nike Elite 2018 Shorts">
		                                <div class="name">Nike Elite 2018 Shorts</div>
		                                <div class="sale-price font-roboto">
		                                    <span>280,000 VND</span>
		                                </div>
		                                <div class="color">
		                                    2 colors
		                                </div>
		                            </div>
		                        </a>
		                    </div>
		                    
		                </div>
		                <?php }  ?>
		                <div class="clearer"></div>
		            </div>
		            </div>
		            <div class="clearer"></div>
		        </div>
		    </div>
		</div>
		<!-- end product -->
		<?php include('footer.php') ?>
<?php ?>