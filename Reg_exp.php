<?php
$pri = "Rs.165.20";
preg_match('/\d+\.?\d*/', $pri, $matches);
$price = $matches[0];
echo $price;
?>