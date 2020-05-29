<?php

class CdProduct extends ShopProduct
{
    public $playTime;

    public function __construct($title, $authorName, $authorSurName, $price, $playTime)
    {
        parent::__construct(
            $title, $authorName, $authorSurName, $price
        );

        $this->playTime = $playTime;
    }

    public function getSummaryLine()
    {
        $summary = "&laquo;<b>{$this->title}</b>&raquo;";
        $summary .= ", <i>" . $this->getAuthor() . '</i>';
        $summary .= sprintf(', <small style="color:green;">Playing Time: %d:00 min</small>', $this->getPlayTime());

        return $summary;
    }

    public function getPlayTime()
    {
        return $this->playTime;
    }
    
}
