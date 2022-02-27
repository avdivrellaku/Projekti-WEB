<?php

class Product{
    private $id;
    private $productName;
    private $type;
    private $indexCategory;
    private $imageName;
    private $price;


    function __construct($id,$productName,$type,$indexCategory,$imageName,$price){
            $this->id= $id;
            $this->productName = $productName;
            $this->type = $type;
            $this->indexCategory = $indexCategory;
            $this->imageName = $imageName;
            $this->price = $price;
            
    }


    function getProductId(){
        return $this->id;
    }
    function getProductName(){
       return $this->productName;
    }
    function getType(){
        return $this->type;
    }
    function getIndexCategory(){
        return $this->indexCategory;
    }
    function getImageName(){
        return $this->imageName;
    }
    function getPrice(){
        return $this->price;
    }
}
