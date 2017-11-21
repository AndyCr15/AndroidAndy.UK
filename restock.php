<?php

include("cart_connection.php");

$query = "UPDATE `products` SET `quantity` = '1' WHERE `products`.`id` != 3";
mysqli_query($link, $query);
$query = "UPDATE `products` SET `quantity` = '2' WHERE `products`.`id` = 3";
mysqli_query($link, $query);

echo 'Done!';

?>
