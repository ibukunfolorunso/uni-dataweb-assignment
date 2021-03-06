<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Price high to low | Take2Tech</title>
    <link href="https://fonts.googleapis.com/css?family=Mandali&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/take2tech/assets/styles/styles.css">
</head>
<body>
    <a href="../category/all.php">Back</a>
    <h1>Prices: High to Low</h1>
    <?php
    
        // DB AND CONFIG
        include_once '../../../../classes/Class.Customer.php'; // customer class
        require_once '../../../../config/customer-conf.php'; // db and customer object

        // setting to refurb for switch (filtering)
        $input="price-desc";

        // giving input to showProducts
        $customer->showProducts($input);
    ?>
</body>
</html>