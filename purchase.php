<?php include_once('includes/load.php'); ?>

<?php
validate_fields(array('quantity'));
// if (isset($_POST['purchase'])) {
// }

if (empty($errors)) {
    $user_id = (int)$_SESSION['user_id'];
    $product_id = remove_junk($db->escape((int)$_GET['id']));
    $quantity = $_POST['quantity'];
    $buy_price = $_POST['buy_price'];
    $code = $_POST['code'];
    $id = rand();
    $date    = date("Y-m-d");

    $query  = "INSERT INTO purchases (";
    $query .= "user_id,product_id,quantity,buy_price,code,date";
    $query .= ") VALUES (";
    $query .= "'{$user_id}','{$product_id}','{$quantity}','{$buy_price}','{$code}', '{$date}'";
    $query .= ")";

    $result = $db->query($query);

    if ($result && $db->affected_rows() === 1) {
        $session->msg('s', "Product purchased!");
        redirect('popular_products.php', false);
    } else {
        $session->msg('d', ' Sorry failed to updated!');
        redirect("checkout_product.php?id={$product_id}", false);
    }
}
?>