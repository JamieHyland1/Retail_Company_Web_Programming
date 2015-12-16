<?php

class CatManager
{
    //creating instance variables for the Category Manager Object
    private $id;
    private $userName;
    private $phone;
    private $email;
    private $date;
    private $location;
    
    
    public function __construct1()
    {
        //default constructor 
    }
    
    
    public function __construct($id, $mn, $pn, $ea, $d, $l) //accessing the instance variables through the constructor
    {
        $this->id = $id;
        $this->userName = $mn;
        $this->phone = $pn;
        $this->email = $ea;
        $this->date = $d;
        $this->location = $l;
        
    }
    //Making the get methods for each of the instance variables of the manager Object
    public function getID() 
    {
        return $this->id;
    }
     public function getUserName() 
    {
        return $this->userName;
    }
    public function getPhone()
    {
        return $this->phone;
    }
     public function getEmail() 
    {
        return $this->email;
    }
     public function getDate() 
    {
        return $this->date;
    }
     public function getLocation() 
    {
        return $this->location;
    }
}
