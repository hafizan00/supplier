<?php

if (isset($_POST['add_referal'])) {
    $req_fields = array('s_id', 'quantity', 'price', 'total', 'date');
    validate_fields($req_fields);
    if (empty($errors)) {
        $p_id      = $db->escape((int)$_POST['s_id']);
        $s_qty     = $db->escape((int)$_POST['quantity']);
        $s_total   = $db->escape($_POST['total']);
        $date      = $db->escape($_POST['date']);
        $s_date    = make_date();

        $sql  = "INSERT INTO referals (";
        $sql .= " user_id,code,date";
        $sql .= ") VALUES (";
        $sql .= "'{$p_id}','{$s_qty}','{$s_total}','{$s_date}'";
        $sql .= ")";

        if ($db->query($sql)) {
            update_product_qty($s_qty, $p_id);
            $session->msg('s', "Referal code added. ");
            redirect('add_referal.php', false);
        } else {
            $session->msg('d', ' Sorry failed to add!');
            redirect('add_referal.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('add_referal.php', false);
    }
}
