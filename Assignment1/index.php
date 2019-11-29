
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    if(!isset($product)) {
        $product = ' ';
    }
    if(!isset($unit_price)) {
        $unit_price =' ';
    }
    if(!isset($name)) {
        $name = ' ';
    }
    
   
?>
<html>
    <head>
    <title>Order Form</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>
        <main>
            <h1>Order Form</h1>
            <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo "<span style='color: red'>" . htmlspecialchars($error_message) . "</span>";  ?>
            </p>
            <?php } ?>
            <form action="display.php" method="post">

            <div id="data">
                <label>Product:</label>
                <input type="text" name="product" value="<?php echo htmlspecialchars($product); ?>"><br />
                
                
                <label>Quantity:</label>
                <select name="quantity" size="1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                
                <br><label>Unit Price:</label>
                <input type="text" name="unit_price" value="<?php echo htmlspecialchars($unit_price); ?>"><br />

                <label>Name:</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br />
                
                <label>Shipping Address: </label>
                <textarea cols="50" rows="4" name="shipping_address"></textarea><br>
                
                <label>Credit Card: </label><br />
                <input type="radio" name="choices" value ="Visa"> Visa<br>
                <input type="radio" name="choices" value ="MasterCard"> MasterCard<br>
                <input type="radio" name="choices" value ="American Express"> American Express<br>
                <input type="radio" name="choices" value ="Discover"> Discover<br>
              
                
                <label>Credit Card Number: </label><br />
                <input type="password" name="card_number" />
                <input type="hidden" name="action" value="login" /><br />
                
                <label>Repeat Credit Card Number: </label><br />
                <input type="password" name="card_number2" />
                <input type="hidden" name="action" value="login" />
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="Submit" value="submit"><br>
            </div>

        </form>
        </main>
        <?php
        // put your code here
        ?>
    </body>
</html>
