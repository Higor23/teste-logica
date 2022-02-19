<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
       $products = ProductStructure::products;
       $result = [];
 
       foreach($products as $product){
           $color = explode('-', $product);
           $result[$color[0]][] = $color[1];
        }
        return self::countSize($result); 
    }

    public static function countSize($sizes){
        $result = [];

        foreach($sizes as $key => $size){
            $result[$key] = array_count_values($size);
        }
        return $result;
    }
}