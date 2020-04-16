<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

<?php
<h1>Generátor produktů</h1>
$randomProducts = file('random_products.txt');
$randomProductCount = count($randomProducts);

$data = array(
    0 => array(
        'name' => 'Zlatý prsten rytmuse',
        'short_description' => 'blalba'
        'description' => 'blablabaasf'
    ),
    1 => array(
        'name' => 'Becherovka milovaneho prezidenta',
        'short_description' => 'alkohol'
        'description' => 'alkohoool'
    ),
);

for ($i=0; $i < 500; $i++) {
    $price = rand(100,60000) / 100;
    $weight = rand(1,50);
    $width = rand(20,200);
    $height = rand(5,40);
    $length = rand(20,200);

    $sql = (INSERT INTO `products` (`id_product`, `name`, `price`, `description`, `short_description`, `weight`, `width`, `height`, `length`) VALUES
    ('%s', '%f', '%s', '%s', '%f', '%f', '%f', '%f');";);
    )

    $query = sprintf(
        $sql,
    $randomProducts[rand(0, $randomProductCount - 1], $price, $product['description'], $product['short_description'], $weight, $width, $height, $length
);

echo $query . "<br>";
}