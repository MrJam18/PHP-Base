<?php
declare(strict_types=1);
require_once 'Product.php';
function countSum($product, ?float $init){
    if(is_array($product)) return $sum = array_reduce( $product, fn(int $sum, Product $el) => $sum += $el->getPrice(), $init);
    else if($product instanceof Product) $sum = $init + $product->getPrice();
}

