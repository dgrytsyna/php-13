<?php

class ShopProductWriter
{
    public static function write(ShopProduct $product)
    {
        return sprintf('%s: %s; Price: <span style="color:green">%01.2f$</span>',
            $product->title,
            $product->getAuthor(),
            $product->price
        );
    }
    public static function writeInFile(ShopProduct $product){
      $write = $product->getSummaryLine();
       if($product instanceof BookProduct){
         $fileName = 'book.txt';
         self::save($write, $fileName);
       } else if($product instanceof CdProduct){
        $fileName = 'cd.txt';
        self::save($write, $fileName);
       }else if($product instanceof PaintProduct){
         $fileName = 'painting.txt';
         self::save($write, $fileName);
    }
    }
    private static function save($info, $file){
       file_put_contents($file, $info, FILE_APPEND | LOCK_EX);
    }
}