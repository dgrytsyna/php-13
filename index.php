<?php

require_once __DIR__.'/../functions.php';

require_once 'ShopProduct.php';
require_once 'BookProduct.php';
require_once 'CdProduct.php';
require_once 'PaintProduct.php';
require_once 'ShopProductWriter.php';

$book = new BookProduct(
    "PHP 7 for Begginers",
    "John", "Bridge",
    59.11,
    1121
); 

$cd = new CdProduct(
    "Dark Paradise",
    "Lana", "Del Ray",
    29.99,
    52
    
); 
$painting = new PaintProduct(
    "UNFINISHED SYMPHONY",
    "David", "Kracov",
    3253, "64x68"
);
echo $book->getSummaryLine();
echo "<br>";
echo $cd->getSummaryLine();
echo "<br>";
echo $painting->getSummaryLine();
echo "<br><br>";

echo ShopProductWriter::write($book);
echo "<br>";
echo ShopProductWriter::write($cd);
echo "<br>";
echo ShopProductWriter::write($painting);
ShopProductWriter::writeInFile($book);
ShopProductWriter::writeInFile($cd);
ShopProductWriter::writeInFile($painting);