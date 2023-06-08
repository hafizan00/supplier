<?php
$page_title = 'All Product';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
//    page_require_level(2);
$products = join_product_table();
$all_categories = find_all('categories');
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
	<section class="section-products">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-md-8 col-lg-6">
					<div class="header">
						<h3>Featured Product</h3>
						<h2>Popular Products</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single Product -->
				<?php foreach ($products as $product) : ?>
					<div class="col-md-6 col-lg-4 col-xl-3">
						<div id="product-1" class="single-product">
							<div class="part-1">
								<ul>
									<li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
								</ul>
							</div>
							<div class="part-2">
								<h3 class="product-title">Makanan</h3>
								<h4 class="product-old-price">Rm79.99</h4>
								<h4 class="product-price">Rm49.99</h4>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>
<?php include_once('layouts/footer.php'); ?>

<?php include_once('checkout.style.php'); ?>