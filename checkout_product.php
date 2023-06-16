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
// $users = find_all('users'); 

$form = [
  'quantity' => 1,
  'buy_price' => remove_junk($product['buy_price']),
  'code' => ''
];
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
      <input type="text" hidden name="product_id" value="<?php echo remove_junk($product['id']); ?>">
    </div>

    <div class="panel-body">
      <div class="col-md-7">
        <form method="post" action="purchase.php?id=<?php echo remove_junk($product['id']); ?>">
          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="qty">Quantity</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-shopping-cart"></i>
                    </span>
                    <input type="number" class="form-control" name="quantity" value="<?php echo remove_junk($form['quantity']); ?>">
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
                    <input type="number" class="form-control hidden" name="buy_price" value="<?php echo remove_junk($product['buy_price']); ?>">
                    <input type="number" disabled class="form-control" value="<?php echo remove_junk($product['buy_price']); ?>">
                    <span class="input-group-addon">.00</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="qty">Referal Code</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="code" value="<?php echo remove_junk($form['code']); ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" name="purchase" class="btn btn-primary">Purchase</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include_once('layouts/footer.php'); ?>

<style scoped>
  * {
    box-sizing: border-box;
  }

  html {
    font-size: 12px;
    margin-right: 300px;
  }

  body {
    margin: 20px 0;
    padding: 0;
    font-family: arial, sans-serif;
    overflow: scroll;
  }

  img {
    max-width: 100%;
    vertical-align: middle;
    border-radius: 4px;
  }

  a {
    text-decoration: none;
    color: #333333;
  }

  a:hover {
    color: #f58551;
  }

  button {
    background-color: #16cc9b;
    border: 2px solid #16cc9b;
    color: #ffffff;
    transition: all 0.25s linear;
    cursor: pointer;
  }

  button::after {
    position: relative;
    right: 0;
    content: " \276f";
    transition: all 0.15s linear;
  }

  button:hover {
    background-color: #f58551;
    border-color: #f58551;
  }

  button:hover::after {
    right: -5px;
  }

  button:focus {
    outline: none;
  }

  ul {
    padding: 0;
    margin: 0;
    list-style-type: none;
  }

  input {
    transition: all 0.25s linear;
  }

  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0;
  }

  input {
    outline: none;
  }

  .container {
    width: 90%;
    margin: 0 auto;
    overflow: auto;
  }

  /* --- HEADER --- */
  header.container {
    margin-bottom: 1.5rem;
  }

  header .breadcrumb {
    color: #7d7d7d;
  }

  header .breadcrumb li {
    float: left;
    padding: 0 6px;
    height: 20px;
    line-height: 20px;
  }

  header .breadcrumb li:first-child {
    padding-left: 2px;
  }

  header .breadcrumb li:not(:last-child)::after {
    content: " \276f";
    padding-left: 8px;
  }

  header .count {
    float: right;
    color: #333333;
    height: 20px;
    line-height: 20px;
  }

  /* --- PRODUCT LIST --- */
  .products {
    border-top: 1px solid #ddd;
  }

  .products>li {
    padding: 1rem 0;
    border-bottom: 1px solid #ddd;
  }

  .row {
    position: relative;
    overflow: auto;
    width: 100%;
  }

  .col,
  .quantity,
  .remove {
    float: left;
  }

  .col.left {
    width: 70%;
  }

  .col.right {
    width: 30%;
    position: absolute;
    right: 0;
    top: calc(50% - 30px);
  }

  .detail {
    padding: 0 0.5rem;
    line-height: 2.2rem;
  }

  .detail .name {
    font-size: 1.2rem;
  }

  .detail .description {
    color: #7d7d7d;
    font-size: 1rem;
  }

  .detail .price {
    font-size: 1.5rem;
  }

  .quantity,
  .remove {
    width: 50%;
    text-align: center;
  }

  .remove svg {
    width: 60px;
    height: 60px;
  }

  .quantity>input {
    display: inline-block;
    width: 60px;
    height: 60px;
    position: relative;
    left: calc(50% - 30px);
    background: #fff;
    border: 2px solid #ddd;
    color: #7f7f7f;
    text-align: center;
    font: 600 1.5rem Helvetica, Arial, sans-serif;
  }

  .quantity>input:hover,
  .quantity>input:focus {
    border-color: #f58551;
  }

  .close {
    fill: #7d7d7d;
    transition: color 150ms linear, background-color 150ms linear,
      fill 150ms linear, 150ms opacity linear;
    cursor: pointer;
  }

  .close:hover {
    fill: #f58551;
  }

  /* --- SUMMARY --- */
  .promotion,
  .summary,
  .checkout {
    float: left;
    width: 100%;
    margin-top: 1.5rem;
  }

  .promotion>label {
    float: left;
    width: 100%;
    margin-bottom: 1rem;
  }

  .promotion>input {
    float: left;
    width: 80%;
    font-size: 1rem;
    padding: 0.5rem 0 0.5rem 1.8rem;
    border: 2px solid #16cc9b;
    border-radius: 2rem 0 0 2rem;
  }

  .promotion:hover>input {
    border-color: #f58551;
  }

  .promotion>button {
    float: left;
    width: 20%;
    height: 2.4rem;
    border-radius: 0 2rem 2rem 0;
  }

  .promotion:hover>button {
    border-color: #f58551;
    background-color: #f58551;
  }

  .promotion>button::after {
    content: "\276f";
    font-size: 1rem;
  }

  .summary {
    font-size: 1.2rem;
    text-align: right;
  }

  .summary ul li {
    padding: 0.5rem 0;
  }

  .summary ul li span {
    display: inline-block;
    width: 30%;
  }

  .summary ul li.total {
    font-weight: bold;
  }

  .checkout {
    text-align: right;
  }

  .checkout>button {
    font-size: 1.2rem;
    padding: 0.8rem 2.8rem;
    border-radius: 1.5rem;
  }

  .empty-product {
    text-align: center;
  }

  .empty-product>button {
    font-size: 1.3rem;
    padding: 10px 30px;
    border-radius: 5px;
  }

  /* --- SMALL SCREEN --- */
  @media all and (max-width: 599px) {
    .thumbnail img {
      display: none;
    }

    .quantity>input {
      width: 40px;
      height: 40px;
      left: calc(50% - 20px);
    }

    .remove svg {
      width: 40px;
      height: 40px;
    }
  }

  /* --- MEDIUM & LARGE SCREEN --- */
  @media all and (min-width: 600px) {
    html {
      font-size: 14px;
    }

    .container {
      width: 75%;
      max-width: 960px;
    }

    .thumbnail,
    .detail {
      float: left;
    }

    .thumbnail {
      width: 35%;
    }

    .detail {
      width: 65%;
    }

    .promotion,
    .summary {
      width: 50%;
    }

    .checkout {
      width: 100%;
    }

    .checkout,
    .summary {
      text-align: right;
    }
  }

  /* --- LARGE SCREEN --- */
  @media all and (min-width: 992px) {
    html {
      font-size: 16px;
    }
  }
</style>