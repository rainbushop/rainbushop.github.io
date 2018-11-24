<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RainbuShop</title>
	
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(window).bind("orientationchange", ScaleSlider);
        });

    </script>
</head>
<body id="layout_home">
	<div id="sb-site" class="sb-site-container">
		<header id="elife-header" style="position: relative; top: 0px;">
			<div class="elife-page-wrapper full-width">
				<div class="row font-roboto">
					<div class="header-left elife-left hs1">Everyday 9:00 am -  10 am | Hotline: 0898 668 832 </div>
					<div class="cart-info header-right elife-right hs1">
						<a class="head-status-cart" href="#">
							My cart 
						</a>
					</div>
					<div class="clearer"></div>
				</div>
			</div>
		</header>
		<div id="elife-navigation" >
			<div class="elife-page-wrapper full-width">
				<div id="elife-logo" class="menu-left">
					<a class="elife-inline-block" href="#">
						<img width="66" height="59" src="images/logo.png" alt="logo">
					</a>
				</div>
				<div id="elife-menu" class="menu-center">
					<div class="elife-text-center">
						<ul>
							<li>
								<a  href="index.php">Home</a>
							</li>
							<li>
								<a sitemapid="222" href="About.php">About us</a>
							</li>
							<li>
								<a sitemapid="224" href="product.php">Product</a>
							</li>
							<li>
								<a sitemapid="225" href="contact_us.php">Contact</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="search-section menu-right">
					<div class="search-form ">
						<form action="search.html" method="get">
							<div class="search-form-input elife-right font-roboto hs1">
								<input id="advancesearch-key" class="form-control advancesearch-key" name="key" maxlength="30" placeholder="search">
							</div>
							<div class="search-form-submit elife-left">
								<input class="advancesearch-button" type="submit" value="">
							</div>
							<div class="clearer"></div>
						</form>
					</div>
					<div class="clearer"></div>
				</div>
				<div class="clearer"></div>
			</div>
		</div>