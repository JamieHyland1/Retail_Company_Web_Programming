<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Book
 *
 * @author jamie
 */
class Book
{
    private $id;
    private $authorName;
    private $bookTitle;
    private $costPrice;
    private $sellPrice;
    
    public function __construct($id, $an, $bn, $cp, $sp) 
    {
        $this->id = $id;
        $this->authorName = $an;
        $this->bookTitle = $bn;
        $this->costPrice = $cp;
        $this->sellPrice = $sp;
        
    }
    
    public function getID() 
    {
        return $this->id;
    }
     public function getAuthor() 
    {
        return $this->authorName;
    }
     public function getBookTitle() 
    {
        return $this->bookTitle;
    }
     public function getCostPrice() 
    {
        return $this->costPrice;
    }
     public function getSellPrice() 
    {
        return $this->sellPrice;
    }
}
