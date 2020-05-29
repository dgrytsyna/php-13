<?php
class PaintProduct extends ShopProduct{
    public $size;

    public function __construct($title, $authorName, $authorSurName, $price, $size)
    {
        parent::__construct(
            $title, $authorName, $authorSurName, $price
        );

        $this->size = $size;
    }
    public function getSummaryLine()
    {
        $summary = parent::getSummaryLine();
        $summary .= ' <small style="color:blue;">Size: ' .$this->getSize(). ' </small> ';
        
        return $summary;
    }

    public function getSize()
    {
        return $this->size;
    }
}