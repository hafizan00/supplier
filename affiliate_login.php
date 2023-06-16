<?php
$page_title = 'Affiliate Registration';
require_once('includes/load.php');
?>

<?php
if (isset($_POST['affiliate'])) {

    validate_fields(array(
        'name', 'email', 'phone', 'password',
        // 'instagram', 'twitter', 'facebook', 'other'
    ));

    if (empty($errors)) {
        $name   = remove_junk($db->escape($_POST['name']));
        $username   = remove_junk($db->escape($_POST['email']));
        $email   = remove_junk($db->escape($_POST['email']));
        $phone   = remove_junk($db->escape($_POST['phone']));
        $password   = sha1(remove_junk($db->escape($_POST['password'])));
        $user_level = (int) 4; // Affiliate category
        $instagram   = remove_junk($db->escape($_POST['instagram']));
        $twitter   = remove_junk($db->escape($_POST['twitter']));
        $facebook   = remove_junk($db->escape($_POST['facebook']));
        $other   = remove_junk($db->escape($_POST['other']));
        $code = (string) randString(7);
        $query = "INSERT INTO users (";
        $query .= "name,username,email,phone,password,user_level,";
        $query .= "image,status,code,instagram,twitter,facebook,other";
        $query .= ") VALUES (";
        $query .= " '{$name}', '{$username}', '{$email}', '{$phone}', '{$password}', '{$user_level}',";
        $query .= " 'no_image.png','1','{$code}','{$instagram}','{$twitter}','{$facebook}','{$other}'";
        $query .= ")";
        if ($db->query($query)) {
            //sucess
            $session->msg('s', "User account has been created! ");
            redirect('index.php', false);
        } else {
            //failed
            $session->msg('d', ' Sorry failed to create account!');
            redirect('affiliate_login.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('affiliate_login.php', false);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo (string) $page_title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-12">
                <?php echo display_msg($msg); ?>
            </div>
        </div>

        <div class="card">
            <form class="clearfix" method="post" action="affiliate_login.php">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <h4 class="mb-3">Information Details</h4>
                            <div class="">
                                <label for="name" class="form-label"></label>
                                <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name">
                            </div>
                            <div class="">
                                <label for="email" class="form-label"></label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="">
                                <label for="phone" class="form-label"></label>
                                <input type="phone" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" placeholder="Phone Number">
                            </div>
                            <div class="">
                                <label for="password" class="form-label"></label>
                                <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" placeholder="Password">
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="mb-3">Social Media Link</h4>
                            <div class="">
                                <label for="instagram" class="form-label"></label>
                                <input type="instagram" class="form-control" id="instagram" name="instagram" aria-describedby="emailHelp" placeholder="Instagram">
                            </div>
                            <div class="">
                                <label for="twitter" class="form-label"></label>
                                <input type="twitter" class="form-control" id="twitter" name="twitter" aria-describedby="emailHelp" placeholder="Twitter">
                            </div>
                            <div class="">
                                <label for="facebook" class="form-label"></label>
                                <input type="facebook" class="form-control" id="facebook" name="facebook" aria-describedby="emailHelp" placeholder="Facebook">
                            </div>
                            <div class="">
                                <label for="other" class="form-label"></label>
                                <input type="other" class="form-control" id="other" name="other" aria-describedby="emailHelp" placeholder="Other">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="affiliate" class="btn btn-info text-white mt-4">Join as an affiliate</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>