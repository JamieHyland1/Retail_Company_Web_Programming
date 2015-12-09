<?php


class TableGateway
{
    private static $connection;
    
    public function __construct($connect)
    {
       $this -> connection = $connect;
    }
    
    
    public function getBooks()
    {
        $query = "SELECT * FROM product";
        
        $statement = $this->connection->prepare($query);
        $status = $statement->execute();
        
        if(!$status)
        {
            echo 'Could not retrieve books';
        }
        return $statement;
    
    }
    public function getBooksById($id) 
    {
        // execute a query to get the user with the specified id
        $sqlQuery = "SELECT * FROM product WHERE ProductID = :id";
        
        $statement = $this->connection->prepare($sqlQuery);
        $params = ["id" => $id];
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not retrieve Book");
        }
        

        return $statement;
    }
    
     public function insertBook($b)
    {
        $sql = "INSERT INTO product(ProductID, AuthorName, BookName, CostPrice, sellPrice) " .
               "VALUES ( :AuthorName, :BookName, :CostPrice, :sellPrice)";
        
        $statement = $this->connection->prepare($sql);
        $params = array(
            "AuthorName"     => $b->getAuthor(),
            "BookName"       => $b->getBookTitle(),
            "CostPrice"      => $b->getCostPrice(),
            "sellPrice"      => $b-> getSellPrice()
        );
        
         $status = $statement->execute($params);
        
        if (!$status)
        {
            die("Could not insert Book");
        }
        
        $id = $this->connection->lastInsertId();
        
        return $id;
    }
}
