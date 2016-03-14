<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author jamie
 */
class product {

    private $id;
    private $authorName;
    private $bookName;
    private $costPrice;
    private $sellPrice;
    private $productCategoryId;

    public function __construct1() {
        //default constructor 
    }

    public function __construct($id, $an, $bn, $cp, $sp, $pc) {

        $this->id = $id;
        $this->authorName = $an;
        $this->bookName = $bn;
        $this->costPrice = $cp;
        $this->sellPrice = $sp;
        $this->productCategoryId = $pc;
    }

    public function getId() {
        return $this->id;
    }

    public function getAuthorName() {
        return $this->authorName;
    }

    public function getBookName() {
        return $this->bookName;
    }

    public function getCostprice() {
        return $this->costPrice;
    }

    public function getSalePrice() {
        return $this->sellPrice;
    }

    public function getProductCatId() {
        return $this->productCategoryId;
    }
}
    