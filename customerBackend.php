<?php
$username = $_POST["username"];
$password = $_POST["password"];
$banana = $_POST["yes"];
$bread = $_POST["man"];
$soda = $_POST["soda"];
$shipping = $_POST["Shipping"];

echo "Welcome, your username is:" . "<br>";
echo $username . "<br>";
echo "Your password is: " . "<br>";
echo $password . "<br>";

echo"Bananas: 4$ Amount bought: " . $banana . "<br>";
echo"Bread: 3$ Amount bought: " . $bread . "<br>";
echo"Soda: 1$ Amount bought: " . $soda . "<br>";
echo"Shipping Choice: " . $shipping . "<br>";

$total = $banana * 4 + $bread * 3 + $soda;
if($shipping == "Free")
{
    $total = $total;
}
else if($shipping == "Express")
{
    $total = $total + 5;
}
else if($shipping == "Instant")
{
    $total = $total + 20;
}

echo"Total: " . $total . "<br>";