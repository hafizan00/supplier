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
		<div class="container	">
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
						<?php echo remove_junk($product['categorie']); ?>
						<div id="product-<?php echo remove_junk($product['id']); ?>" class="single-product">
							<div class="part-1">
								<ul>
									<li><a href="checkout_product.php?id=<?php echo remove_junk($product['id']); ?>"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
								</ul>
							</div>
							<div class="part-2">
								<h3 class="product-title"><?php echo remove_junk($product['name']); ?></h3>
								<h6 class="text-danger">Damage Protection</h6>
								<h6 class="text">Free Shipping</h6>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
								</svg>
								<h4 class="product-old-price">Rm<?php echo remove_junk($product['sale_price']); ?></h4>
								<h4 class="product-price">Rm<?php echo remove_junk($product['buy_price']); ?></h4>
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
<!-- 
<style scoped>
.box {
	margin-right: 300px;
}
</style> -->