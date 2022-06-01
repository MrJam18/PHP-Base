<?php
declare(strict_types=1);
require_once 'Product.php';
require_once 'countSum.php';


class Cart
{
    public function __construct($product)
    {
        $this->sum = countSum($product, $this->sum);
        $this->products = $this->products + $product;
    }
    function addProduct(Product $product){
        $this->products[] = $product;
        $this->countSum($product->getPrice());
    }
    function deleteProduct(Product $product) {
        $this->products = array_filter($this->products, function(Product $el)use($product){
            if($product->title == $el->title){
                $this->countSum(-$product->getPrice());
                return false;
            }
            return true;
        });
    }
    private function countSum(float $sum){
        $this->sum += $sum;
    }



    private function checkProduct($product): bool {
        if(!($product instanceof Product)) throw new Error('продукт должен быть массивом либо объектом класса Product!');
        return true;
    }


    private array $products = [];
    private float $sum = 0;

}

