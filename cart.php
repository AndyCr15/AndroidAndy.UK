<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

session_start();

$page = 'shop.php';

if (isset($_POST['discount'])){
    //check what discount they get and store it in session
    $code = $_POST['discount'];
    switch ($code){
        case 'thiswontwork':
            if($_SESSION['discountcode'] < 0.5){
            $_SESSION['discountcode'] = 0.5;
            }
            break;
        case 'thiswontwork':
            if($_SESSION['discountcode'] < 0.25){
            $_SESSION['discountcode'] = 0.25;
            }
            break;
    }
    header('Location:' . $page);
}

if (isset($_GET['discount'])) {
    unset($_SESSION['discountcode']);
    header('Location:' . $page);
}

if (isset($_GET['add'])) {
    include("cart_connection.php");
    
    $item = (int) $_GET['add'];
    
    $query = 'SELECT id, quantity FROM products WHERE id  = '.mysqli_real_escape_string($link, $item);
    $quantity = mysqli_query($link, $query);

    $result = $quantity_row = mysqli_fetch_assoc($quantity);
    
    if(isset($_SESSION['cart_'.$item])){
        if ($result['quantity'] != $_SESSION['cart_'.$item]) {
                $_SESSION['cart_'.$item]+='1';
        }
    } else {
        $_SESSION['cart_'.$item] = 1;
    }
    header('Location:'.$page);
}
if (isset($_GET['remove'])) {
    $_SESSION['cart_' . (int) $_GET['remove']]--;
    header('Location:' . $page);
}

if (isset($_GET['delete'])) {
    $_SESSION['cart_' . (int) $_GET['delete']] = '0';
    header('Location:' . $page);
}

function products() {
    include("cart_connection.php");
    echo('</br>');
    echo('<h2>AVAILABLE PRODUCTS</h2>');
    $query = "SELECT id, name, price, description, image FROM products WHERE quantity > 0 ORDER BY id DESC";
    $get = mysqli_query($link, $query);
    if (mysqli_num_rows($get) == 0) {
        echo 'There are no products to display';
    } else {
        while ($get_row = mysqli_fetch_assoc($get)) {
            include 'cart_item.php';
        }
        echo ('<hr>');
    }
}

function paypal_items() {
    include("cart_connection.php");
    $num = 0;
    foreach ($_SESSION as $name => $value) {
        if ($value = 0) {
            if (substr($name, 0, 5) !== 'cart_') {
                $id = $value;
                $get = mysqli_query('SELECT id, name, price, shipping FROM products WHERE id=' . mysqli_real_escape_string($id));

                while ($get_row = mysqli_fetch_assoc($get)) {
                    $num++;
                    echo '<input type="hidden" name="item_number_' . $num . '" value="' . $id . '">';
                    echo '<input type="hidden" name="item_name_' . $num . '" value="' . $get_row['name'] . '">';
                    echo '<input type="hidden" name="amount_' . $num . '" value="' . $get_row['price'] . '">';
                    echo '<input type="hidden" name="shipping_' . $num . '" value="' . $get_row['shipping'] . '">';
                    echo '<input type="hidden" name="shipping2_' . $num . '" value=0>';
                    echo '<input type="hidden" name="quantity_' . $num . '" value="' . $value . '">';
                }
            }
        }
    }
}

function applyDiscount($cost) {
    if(isset($_SESSION['discountcode'])){
        echo ('<small>Discount of '.($_SESSION['discountcode'] * 100).'% applied. <a href="cart.php?discount=0">Remove Discount</a></small></br>');
        return number_format(($cost * $_SESSION['discountcode']),2);
    } else {
        return 0;
    }
    return $cost;
}

function addShipping($cost, $pp) {
    echo ('Shipping : &pound'.number_format($pp, 2).'</br>');
    echo('<hr>');
    return $cost + $pp;
}

function calculate() {
    include("cart_connection.php");
    $total = 0;
    $_SESSION['toPay'] = 0;
    $_SESSION['shipping'] = 0;
    $toPay = 0;
    $_SESSION['items'] = 0;
    foreach ($_SESSION as $name => $value) {
        $sub = 0;
            if (substr($name, 0, 5) == 'cart_') {
                if ($value > 0) {
                    $id = substr($name, 5, strlen($name) - 5);
                    $query = 'SELECT id , name , price , shipping FROM products WHERE id = '.$id;
                    $get = mysqli_query($link, $query);
                    if (!$get) { 
                        echo 'MySQL Error: ' . mysqli_error($link); 
                    }
                    while ($get_row = mysqli_fetch_assoc($get)) {
                        $sub = $get_row['price'] * $value;
                        echo $get_row['name'] . ' x ' . $value . ' = &pound;' . number_format($sub, 2) . ' <a href="cart.php?remove=' . $id . '">[-]</a> <a href="cart.php?add=' . $id . '">[+]</a> <a href="cart.php?delete=' . $id . '">Delete</a></br>';
                        
                        $_SESSION['shipping'] += $get_row['shipping'];
                    }
                }
            $total += $sub;
        }
    }
    $_SESSION['shipping'] = number_format($_SESSION['shipping'],2);
    $_SESSION['items'] = number_format($total,2);
    $_SESSION['discount'] = applyDiscount($_SESSION['items']);
    $toPay = ($total - $_SESSION['discount']) + $_SESSION['shipping'];
    $_SESSION['toPay'] = number_format($toPay, 2);
}

function cart() {
    echo('<h2 style="margin-top: 0px;">YOUR SHOPPING CART</h2>');
    calculate();
    echo('<hr>');
    if ($_SESSION['toPay'] == 0) {
        echo 'Your cart is empty';
    } else {
        echo '<p><Strong>Items: &pound' . $_SESSION['items'] .'</Strong></p>';
        if($_SESSION['discount']>0){
            echo '<p><Strong>Discount: &pound' . $_SESSION['discount'] .'</Strong></p>';
        }
        echo '<p><Strong>Shipping: &pound' . $_SESSION['shipping'] .'</Strong></P>';
        echo '<p><Strong>Total: &pound' . $_SESSION['toPay'] .'</Strong></P>';
        echo('<hr>');
    }
}

function confirmOrder() {
    include("cart_connection.php");
    $orderString = "";
    foreach ($_SESSION as $name => $value) {
        if (substr($name, 0, 5) == 'cart_') {
            if ($value > 0) {
                $id = substr($name, 5, strlen($name) - 5);
                $query = 'SELECT id , name , quantity FROM products WHERE id = '.$id;
                $get = mysqli_query($link, $query);
                if (!$get) { 
                    echo 'MySQL Error: ' . mysqli_error($link); 
                }
                while ($get_row = mysqli_fetch_assoc($get)) {
                    $stockHolding = $get_row['quantity'];
                    $remaining = $stockHolding - $value;
                    
                    $thisItem = $get_row['name'] . ' x ' . $value;
                    echo $thisItem;
                    $orderString = $orderString.$thisItem.".";
                    
                    // TODO remove this item from the database
                    
                    $query = 'UPDATE products SET quantity = '.$remaining.' WHERE id = '.$id;
                    mysqli_query($link, $query);
                    
                }
            }
        }
    }
    $orderString = $orderString." Total: £".$_SESSION['toPay'];
    mailOrder($orderString);
}

function mailOrder($order){
    
    $emailTo = 'mail@androidandy.uk';
				
	$subject = "An Order Has Been Placed for £".$_SESSION['toPay'];

	$message = '
	<html>
		<head>
		  <title>Someone Has Bought Something From Your Shop on AndroidAndy.UK</title>
		</head>
		<body>
			<p>'.$order.'</p>
            <p>Go to www.paypal.com to check the details.</p>
            </p>IP Address : '.$_SESSION['ipAddress'].'<p>
		</body>
	</html>
	';
	
	// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: AndroidAndyUK <mail@androidandy.uk>';

// Mail it
mail($emailTo, $subject, $message, implode("\r\n", $headers));
    
}

function getRealIpAddr(){
    // https://stackoverflow.com/questions/12553160/getting-visitors-country-from-their-ip

    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
?>
