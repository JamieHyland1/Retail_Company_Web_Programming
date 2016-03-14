<?php

class productTable {

    private $connection;

    public function __construct($c) {
        $this->connection = $c;
    }

    function getProduct() {
        $sqlquery = "SELECT * FROM product"
                . " LEFT JOIN productcategory"
                . " ON product.productCatID=productcategory.ID";

        $statement = $this->connection->prepare($sqlquery);
        $status = $statement->execute();

        if (!$status) {
            die("Could not retrieve products");
        }

        return $statement;
    }

    function getProductsByCategoryID($id) {
        $sqlquery = "SELECT p.* "
                . "FROM product p "
                . "WHERE p.productCatID = :productCatID";

        $statement = $this->connection->prepare($sqlquery);

        $params = array(
            "productCatID" => $id
        );
        $status = $statement->execute($params);

        if (!$status) {
            die("Could not retrieve products");
        }

        return $statement;
    }

    function getProductsByID($id) {
        // execute a query to get the product with the specified id
        $sqlQuery = "SELECT * FROM product WHERE productID = :id";

        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );

        $status = $statement->execute($params);

        if (!$status) {
            die("Could not retrieve product");
        }

        return $statement;
    }

    public function insert($authorName, $bookName, $costPrice, $sellPrice, $productCatID) {
        $sql = "INSERT INTO "
                . "`product`(`AuthorName`, `BookName`, `CostPrice`, `sellPrice`, `productCatID`)"
                . " VALUES (,:authorName,:bookName,:costPrice,:sellPrice,:productCatID)";
        $statement = $this->connection->prepare($sql);
        $params = array(
            "authorName" => $authorName,
            "bookName" => $bookName,
            "costPrice" => $costPrice,
            "sellPrice" => $sellPrice,
            "productCatID" => $productCatID
        );
        $status = $statement->execute($params);

        if (!$status) {
            die("Could not insert user");
        }

        $id = $this->connection->lastInsertId();

        return $id;
    }

    public function update($authorName, $bookName, $costPrice, $sellPrice, $productCatID) {

        $sql = "UPDATE `product` "
                . "SET `AuthorName`=:authorName,"
                . "`BookName`=:bookName,`CostPrice`=:costPrice,`sellPrice`=:sellPrice,"
                . "`productCatID`= :productCatID "
                . "WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $params = array(
            "authorName" => $authorName,
            "bookName" => $bookName,
            "costPrice" => $costPrice,
            "sellPrice" => $sellPrice,
            "productCatID" => $productCatID
        );
        $status = $statement->execute($params);

        if (!$status) {
            die("Could not update product");
        }
    }

    public function delete($id) {
        $sql = "DELETE FROM `product` WHERE id = :id";

        $statement = $this->connection->prepare($sql);
        $params = array(
            "id" => $id
        );
        $status = $statement->execute($params);

        if (!$status) {
            die("Could not delete product");
        }
    }

}
