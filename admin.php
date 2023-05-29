<?php
$page_title = 'Admin Home Page';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(1);
?>
<?php
$c_categorie     = count_by_id('categories');
$c_product       = count_by_id('products');
$c_sale          = count_by_id('sales');
$c_user          = count_by_id('users');
$products_sold   = find_higest_saleing_product('10');
$recent_products = find_recent_product_added('5');
$recent_sales    = find_recent_sale_added('5')
?>
<?php include_once('layouts/header.php'); ?>



<body style="background-color:rgb(237,237,237)">
  <div class="wrapper">
    <main class="page-main ">
      <div>
        <h1 style="color: black; font-size:40px; margin-right: 100px;" class="h1">Welcome To My Supplier</h1>
      </div>
    </main>
  </div>

  <div class="row">
    <div class="col-md-6">
      <?php echo display_msg($msg); ?>
    </div>
  </div>
  <div class="row">
    <a href="users.php" style="color:black;">
      <div class="col-md-4">
        <div class="panel panel-box clearfix" style="height: 200px;">
          <div class="panel-icon pull-left bg-secondary1">
            <i class="glyphicon glyphicon-user"></i>
          </div>
          <div class="panel-value pull-right">
            <h2 class="margin-top"> <?php echo $c_user['total']; ?> </h2>
            <p class="text-muted">Users</p>
          </div>
        </div>
      </div>
    </a>

    <a href="categorie.php" style="color:black;">
      <div class="col-md-3">
        <div class="panel panel-box clearfix" style="height: 200px;">
          <div class="panel-icon pull-left bg-red">
            <i class="glyphicon glyphicon-th-large"></i>
          </div>
          <div class="panel-value pull-right">
            <h2 class="margin-top"> <?php echo $c_categorie['total']; ?> </h2>
            <p class="text-muted">Categories</p>
          </div>
        </div>
      </div>
    </a>

    <a href="product.php" style="color:black;">
      <div class="col-md-4">
        <div class="panel panel-box clearfix" style="height: 200px;">
          <div class="panel-icon pull-left bg-blue2">
            <i class="glyphicon glyphicon-shopping-cart"></i>
          </div>
          <div class="panel-value pull-right">
            <h2 class="margin-top"> <?php echo $c_product['total']; ?> </h2>
            <p class="text-muted">Products</p>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Highest Selling Products</span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th>Title</th>
                <th>Total Sold</th>
                <th>Total Quantity</th>
              <tr>
            </thead>
            <tbody>
              <?php foreach ($products_sold as  $product_sold) : ?>
                <tr>
                  <td><?php echo remove_junk(first_character($product_sold['name'])); ?></td>
                  <td><?php echo (int)$product_sold['totalSold']; ?></td>
                  <td><?php echo (int)$product_sold['totalQty']; ?></td>
                </tr>
              <?php endforeach; ?>
            <tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>LATEST SALES</span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th>Product Name</th>
                <th>Date</th>
                <th>Total Sale</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($recent_sales as  $recent_sale) : ?>
                <tr>
                  <td class="text-center"><?php echo count_id(); ?></td>
                  <td>
                    <a href="edit_sale.php?id=<?php echo (int)$recent_sale['id']; ?>">
                      <?php echo remove_junk(first_character($recent_sale['name'])); ?>
                    </a>
                  </td>
                  <td><?php echo remove_junk(ucfirst($recent_sale['date'])); ?></td>
                  <td>$<?php echo remove_junk(first_character($recent_sale['price'])); ?></td>
                </tr>

              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Recently Added Products</span>
          </strong>
        </div>
        <div class="panel-body">

          <div class="list-group">
            <?php foreach ($recent_products as  $recent_product) : ?>
              <a class="list-group-item clearfix" href="edit_product.php?id=<?php echo    (int)$recent_product['id']; ?>">
                <h4 class="list-group-item-heading">
                  <?php if ($recent_product['media_id'] === '0') : ?>
                    <img class="img-avatar img-circle" src="uploads/products/no_image.png" alt="">
                  <?php else : ?>
                    <img class="img-avatar img-circle" src="uploads/products/<?php echo $recent_product['image']; ?>" alt="" />
                  <?php endif; ?>
                  <?php echo remove_junk(first_character($recent_product['name'])); ?>
                  <span class="label label-warning pull-right">
                    $<?php echo (int)$recent_product['sale_price']; ?>
                  </span>
                </h4>
                <span class="list-group-item-text pull-right">
                  <?php echo remove_junk(first_character($recent_product['categorie'])); ?>
                </span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


<?php include_once('layouts/footer.php'); ?>

<style scoped>
  @import url("https://fonts.googleapis.com/css?family=Dosis:400,700");

  :root {
    --main-white-color: #f2f2f2;
    --main-black-color: black;
    --main-purple-color: #9e89b8;
  }

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  h1 {
    font-family: "Lucida Console", "Courier New", monospace;

  }

  button {
    background: none;
    outline: none;
    cursor: pointer;
  }

  ul {
    list-style: none;
  }

  a {
    text-decoration: none;
    color: inherit;
  }

  body {
    font: 16px/1.5 "Dosis", sans-serif;
    /*IE FIX*/
    /*display: flex;
  flex-direction: column;*/
  }

  /* CONTAINER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  .wrapper {
    display: flex;
    flex-direction: column;
    min-height: 90vh;
  }

  .wrapper>* {
    padding: 20px;
  }


  /* HEADER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  .page-header {
    background: var(--main-white-color);
  }

  .page-header nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }

  .page-header ul {
    display: flex;
    order: 1;
    width: 100%;
    margin-top: 15px;
  }

  .page-header ul li:not(:last-child) {
    padding-right: 15px;
  }

  .page-header .cta-contact {
    font-family: inherit;
    font-size: 1.2rem;
    padding: 5px 18px;
    border: 1px solid;
    border-radius: 5px;
  }


  /* MAIN
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  .page-main {
    display: flex;
    /* flex-direction: column; */
    justify-content: center;
    /* flex-grow: 1; */
    min-height: 350px;
    min-height: 80vh;

    background: var(--main-white-color) url("main.webp") no-repeat center / cover;
    background-blend-mode: luminosity;
    color: var(--main-white-color);
    margin-top: 0px;
  }

  .page-main div {
    max-width: 500px;
  }

  .page-main h1 {
    margin-bottom: 20px;
  }

  .page-main p+p {
    margin-top: 10px;
  }


  /* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  .page-footer {
    display: flex;
    flex-direction: column-reverse;
    background: var(--main-white-color);
  }

  .page-footer ul {
    display: flex;
    font-size: 1.5rem;
    margin-bottom: 5px;
  }

  .page-footer ul li:not(:last-child) {
    margin-right: 20px;
  }


  /* MQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  @media screen and (min-width: 550px) {
    .page-header ul {
      width: auto;
      margin-top: 0;
    }

    .page-header .cta-contact {
      order: 1;
    }

    .page-footer {
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }

    .page-footer ul {
      margin-bottom: 0;
    }
  }

  @media screen and (min-width: 768px) {
    body {
      font-size: 18px;
    }

    .page-main {
      padding-left: 90px;
    }
  }
</style>