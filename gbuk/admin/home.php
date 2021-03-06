<?php
    // DB AND CONFIG
    require_once '../../config/admin-conf.php'; // db and admin object

    if(!$admin->isLoggedIn())
    {
        $admin->redirect('./login.php');
    }  

    // making userID variable with session
    $userID = $_SESSION['user_session'];

    // query DB function (in user class), passing in above userID, saving returned $userRow (result)
    // as $userRow to use in this file.
    $userRow = $admin->getUserID($userID);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css" type="text/css"  />
    <title>Admin - <?php print($userRow['Username']); ?> | T2T</title>
    <link href="https://fonts.googleapis.com/css?family=Mandali&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/take2tech/assets/styles/styles.css">
</head>

<body>
    <div class="header">
        <div class="right">
            <label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
        </div>
    </div>
    <div class="content">
        Welcome <?php print($userRow['Username']); ?> :)
        <a href="./create-product.php">Create Product(s)</a>
        <a href="./reservations.php">Reservations</a>

        <?php 
            $admin->showProducts();
        ?>
    </div>
</body>
</html>