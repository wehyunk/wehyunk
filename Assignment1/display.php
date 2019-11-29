<?php
    $product = filter_input(INPUT_POST, 'product');
    $quantity = filter_input(INPUT_POST, 'quantity');
    $unit_price = filter_input(INPUT_POST, 'unit_price', FILTER_VALIDATE_FLOAT);
    $name = filter_input(INPUT_POST, 'name');
    $shipping_address = filter_input(INPUT_POST, 'shipping_address');
    $card_number = filter_input(INPUT_POST, 'card_number', FILTER_VALIDATE_INT);
    $card_number2 = filter_input(INPUT_POST, 'card_number2', FILTER_VALIDATE_INT);
    $choices = filter_input(INPUT_POST, 'choices');
    $unit_price_formated = "$".number_format($unit_price, 2);
    
    
    //validate unit price
    if($unit_price === FALSE) {
        $error_message = 'Must enter a valid price.';
    } else if ($unit_price <=0) {
        $error_message = 'Must enter a valid price.';
   
    //validate card number
    } else if ($card_number === FALSE) {
        $error_message = 'Credit card numbers do not match.';
    } else if ($card_number2 === FALSE) {
        $error_message = 'Credit card numbers do not match.';
    } else if ($card_number != $card_number2) {
        $error_message = 'Credit card numbers do not match.';
    } else {
        $error_message = '';
    }
    if ($error_message != '') {
        include('index.php');
        

        exit();
    }
    
?> 
   

<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        
        <?php echo $name; ?>, you placed an order with <?php echo $choices; ?>
        for a total of <?php echo $unit_price_formated; ?> <br /> Your order will be
        shipped to <?php echo $shipping_address; ?>
        
        
    </main>
</body>
</html>