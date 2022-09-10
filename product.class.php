<?php

class Product
{
    protected int $prixHt;
    protected int $tva;
    protected int $prixTtc;
    protected string $name;
    protected string $cat;
    protected int $stock;
    protected string $description;


    public function __construct($prixHt,$tva,$prixTtc,$name,$cat,$stock,$description)
    {
        $this->prixHt=$prixHt;
        $this->tva=$tva;
        $this->prixTtc=$tva*$prixHt;
        $this->name=$name;
        $this->cat=$cat;
        $this->stock=$stock;
        $this->description=$description;


    }

}