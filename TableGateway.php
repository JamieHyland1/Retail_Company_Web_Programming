<?php


class TableGateway
{
    private static $connection;
    
    public function __construct($connect)
    {
       $this -> connection = $connect; //constructor that connects to the database
    }
    
    
    public function getCategory()
    {
        //Gets all the data from the product category table
        $query = "SELECT * FROM productcategory";
        
        $statement = $this->connection->prepare($query);  //prepares the sql query to be executed
        $status = $statement->execute(); //executes the query
        
        if(!$status)
        {
            echo 'Could not retrieve Managers'; //error handling
        }
        return $statement;
    
    }
    public function getManagerById($id) 
    {
        // execute a query to get the user with the specified id
        $sqlQuery = "SELECT * FROM productcategory WHERE ID = :id";
        
        $statement = $this->connection->prepare($sqlQuery);
        $params = ["id" => $id];
        
        $status = $statement->execute($params);
        
        if (!$status)
        {
            die("Could not retrieve Manager"); //error handling
        }
        

        return $statement;
    }
    
     public function insert($m)
    {
         //Creates a new row of data in the product category table by using a 
         //category manager object as a reference for the values being submitted
         
         
        $sql = "INSERT INTO productcategory(categoryManager, emailAddress, managerPhoneNum, managerDateAppointed, managerLocation) " .
               "VALUES (:categoryManager, :emailAddress, :managerPhoneNum, :managerDateAppointed, :managerLocation)";
        
        $statement = $this->connection->prepare($sql);
        $params = array
        (
           //gets the manager object's respective values to be added into the SQL query 
            "categoryManager"     => $m->getUserName(),
            "emailAddress"       => $m->getEmail(),
            "managerPhoneNum"       => $m->getPhone(),
            "managerDateAppointed"=> $m->getDate(),
            "managerLocation"      => $m-> getLocation()
        );
        
        echo "<pre>";
        print_r($m);
        print_r($params);
        echo "</pre>";
        
         $status = $statement->execute($params);
         
        if (!$status)
        {
            die("Could not insert Manager"); //error handling
        }
        
        $id = $this->connection->lastInsertId();
        
        return $id;
    }
    
    public function update($m)
    {
        
        //This function will allow a user to edit an existing table row,
        // follows the same steps as the other CRUD functions
 
        $sql = "UPDATE productcategory SET " .
                "categoryManager = :categoryManager, " . 
                "emailAddress =   :emailAddress, " .
                "managerDateAppointed =   :managerDateAppointed, " .
                "managerPhoneNum =  :managerPhoneNum, " .
                "managerLocation =  :managerLocation " .
                " WHERE ID = :id";
        
         $statement = $this->connection->prepare($sql);
         
     echo '<pre>';          //debugging
     print_r($statement);
     echo '</pre>';
         
        $params = 
        [
            "id"             => $m->getID(),
            "categoryManager"     => $m->getUserName(),
            "emailAddress"       => $m->getEmail(),
            "managerPhoneNum"       => $m->getPhone(),
            "managerDateAppointed"      => $m->getDate(),
            "managerLocation"      => $m->getLocation()
        ];
    
        $status = $statement->execute($params);
         echo '<pre>';
     print_r($params);
     echo '</pre>';
        if(!$status)
        {
            die("Could not update user"); //error handling
        }
    }
    
     public function delete($id)
    {
         //This allows a user to delete a specific table row according to its specific ID
         
        $sql = "DELETE FROM productcategory WHERE ID = :id";
        
        $statement = $this->connection->prepare($sql);
        $params = array
        (
            "id" => $id
        );
        $status = $statement->execute($params);
        
        if (!$status) 
        {
            die("Could not delete Manager"); //error handling
        }
    }   

}
