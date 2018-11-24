
<?php  ?>
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<style>
	.info-checkout-wrapper{
		width:90%;
		margin:0 auto;
	}
	.info-checkout{
		width: 50%;

		min-height: 800px;
		float:left;

	}
	.info-product{
		width: 50%;
		min-height: 800px;
		float:left;
	}
	.Name-rainbu2 h2 {
		text-transform:none;
	    letter-spacing: 3px;
	    font-family: Tungsten;
	    color: #000;
	    padding-top: 20px;
	    font-size: 5rem;
	}
	.info-block{
		background: white;
    	box-shadow: 0 5px 5px 5px rgba(0,0,0,0.15);
   		padding: 24px 12px;
    	margin: 7px 9px 32px;
    	transition: box-shadow .5s;
    	font-family: Vitesse-Book;
	}
	.checkout-block{
		background: white;
    	box-shadow: 0 2px 2px 2px rgba(0,0,0,0.15);
   		padding: 24px 12px;
    	margin: 7px 9px 32px;
    	transition: box-shadow .5s;
    	font-family: Vitesse-Book;
	}
	.step-title{
		border-bottom: 1px solid #ccc;
		    padding-bottom: 10px;
   		 font-size: 1.6rem;
	}
	.step-title2{
		    padding-bottom: 10px;
   		 font-size: 1.6rem;
	}
	.shipping-adress-form{
		
	}
	.control input {
    width: 100%;
	}
	input[type="text"], input[type="email"], input[type="password"] {
    border-color: #000;
    font-family:Lato;
    font-size: 14px;
    height: 37px;
	}
	.info-wrapper-detail{
		margin-bottom:20px;
		padding:0 7px;
	}
	.product-detail{

		padding:15px;
	}
	.title-order-summary span{
		   padding-bottom: 10px;
  		  color: #333;
		font-weight: 300;
   		 font-size: 2.6rem;
	}
	.total-item {
    font-size: 1rem;
    border-bottom: 1px solid #ccc;
    padding: 10px 0;
    color: #000;
	}
	.minicart-items {
    margin: 0;
    padding: 0;
    list-style: none none;
	}
	.product-item-minicart{
	}
	.product-item-detail-minicard{
		padding-left: 118px;
	}
	.minicart-items .product-item-detail-minicart{
		text-align: left;
		float: left;
		padding: 15px;
		width: 79%;
	}
	.product-item-inner{
		display:table;
		width: 100%;
	}
	.product-item-name-block{
		display:table-cell;
		text-align:left;
		width: 75%;
	}
	.subtotal{
		display:table-cell;
	}
	.btn-order{
		background-color: #000;
		color:white;
  	  	border-radius: 2px;
		float:right;
		padding: 15px 36px;
	}
	.btn-order span{
		font-size: 1.4rem;
		font-family: Vitesse-Light;

	}
	
</style>
		<?php include('header.php'); ?>
		<div class="info-checkout-wrapper">
		<div style="text-align:center;" class="Name-rainbu2"><h2 style="padding-left: 10px">Checkout</h2></div>
		<div class="info-checkout" >
				<div class="info-block">
					<div class="step-title">Shipping Adress</div>
					<li style="list-style: none;margin-top:24px">
						<!-- form thong tin -->
						<form action="" method="post">
							<div class="shipping-adress-form">
								<div class="info-wrapper-detail">
									<label for="">Name  <span style="color:red">*</span></label>
									<div class="control">
										<input class="input-text" name="name-rainbu" type="text">
									</div>
								</div>
								<div class="info-wrapper-detail">
									<label for="">Phone Number  <span style="color:red">*</span></label>
									<div class="control">
										<input class="input-text" type="text" name="phone-rainbu">
									</div>
								</div>
								
								<div class="info-wrapper-detail">
									<label for="">Adress <span style="color:red">*</span></label>
									<div class="control">
										<input class="input-text" type="text" name="adress-rainbu">
									</div>
								</div>
								<div class="info-wrapper-detail">
									<label for="">Email  <span style="color:red">*</span></label>
									<div class="control">
										<input class="input-text" type="email" name="email-rainbu">
									</div>
								</div>
							</div>
						</form>
						<!-- end form thong tin -->
					</li>
				</div>
		</div>
	<!-- 	form-san pham -->
		<div class="info-product">
				<div class="checkout-block">
					<div class="product-detail">
						<div class="step-title" style="border:none">Order Summary</div>
						<div class="total-item">
							<span>5</span>
							<span>items in cart</span>
						</div>
						<div class="minicart-items-wrapper">
							<ol class="minicart-items">
								<?php for($i=1;$i<5;$i++){ ?>
								<li class="product-item-minicart" style="display: block">
									<div class="product-minicart" style="width: 100%;height: 190px;border-bottom:1px solid #ccc;">
										<span style="width: 100px;margin-left:15px;float:left">
											<img src="https://www.titan22.com/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/b/q/bq0199-494-a_1.png" alt="" style="max-width: 100%">
										</span>
											<div class="product-item-detail-minicart">
										<div class="product-item-inner">
											<div class="product-item-name-block">
												<div style="display:block;width: 67%;">
												Nike Kobe 1 Protro 'Black Out'</div>
												<div class="detail-sl">
												<span class="label">Qty</span>
												<span>2</span>
												</div>
												<div class="detail-sl">
												<span class="label">Size</span>
												<span>9</span>
												</div>
											</div>
											<div class="subtotal" style="padding-left: 0;">
											<span>17,990.00</span>
											</div>
										</div>
									</div>
									</div>

								
								</li>
								<?php } ?>
							</ol>
						</div>
						<!-- total-price -->
						<div style="width: 100%;height: 100px;padding:24px 0"> 
						<div class="step-title2" style="float:left;"> Order Total</div>
						<div class="step-title2" style="float:right;">17,990.00</div>
						</div>
						
						<!-- end total-price -->
						<div class="">
							<button type="submit" class="btn-order"><span>Order</span></button>
						</div>
						<div class="">
							<a href="product.php"class="btn-order" style="margin-right:10px;"> <span>HOME</span></a>
						</div>
					</div>
			</div>
		</div>
		<!-- 	form-san pham -->
		</div>
		<?php include('footer.php') ?>
<?php ?>