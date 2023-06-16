<?php
$page_title = 'Enterepreneur` Registration';
require_once('includes/load.php');
?>

<?php
if (isset($_POST['enterepreneur`'])) {
    $req_fields = array(
        'name', 'email', 'phone', 'password',
        'instagram', 'twitter', 'facebook',
        'other'
    );
    validate_fields($req_fields);

    if (empty($errors)) {
        redirect('index.php', false);
    } else {
        $session->msg("d", $errors);
        redirect('enterepreneur_login.php', false);
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
        <form class="clearfix" method="post" action="enterepreneur_login.php">

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
                    <div class="">
                        <button type="button" name="enterepreneur" class="btn btn-info text-white mt-4">Join as an entrepreneur</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</body>

</html>