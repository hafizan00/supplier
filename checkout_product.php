<?php
$page_title = 'Checkout product';
require_once('includes/load.php');
include_once('checkout.style.php');

// Checkin What level user has permission to view this page
//    page_require_level(2);
?>
<?php
$product = find_by_id('products', (int)$_GET['id']);
$all_categories = find_all('categories');
$all_photo = find_all('media');
// if (!$product) {
//     $session->msg("d", "Missing product id.");
//     redirect('product.php');
// }
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>
</div>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                <span class="glyphicon glyphicon-th"></span>
                <span>Checkout</span>
            </strong>
        </div>

        <div id="product-<?php echo remove_junk($product['id']); ?>" class="jumbotron single-product">
            <h1><?php echo remove_junk($product['name']); ?></h1>
            <h5>Rm<?php echo remove_junk($product['sale_price']); ?></h5>
            <p>Rm<?php echo remove_junk($product['buy_price']); ?></p>
        </div>

        <div class="panel-body">
            <div class="col-md-7">
                <form method="post" action="checkout_product.php?id=<?php echo (int)$product['id'] ?>">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qty">Quantity</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-shopping-cart"></i>
                                        </span>
                                        <input type="number" class="form-control" name="product-quantity" value="<?php echo remove_junk($product['quantity']); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qty">Buying price</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-usd"></i>
                                        </span>
                                        <input type="number" class="form-control" name="buying-price" value="<?php echo remove_junk($product['buy_price']); ?>">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qty">Selling price</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-usd"></i>
                                        </span>
                                        <input type="number" class="form-control" name="saleing-price" value="<?php echo remove_junk($product['sale_price']); ?>">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="product" class="btn btn-primary">Purchase</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>