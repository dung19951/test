<?php


namespace App\Model;

use PDOException;

class ProductModel
{
    private $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }


    public function getAll()
    {
        try {
            $sql = "SELECT * FROM `products` ";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }

    }
    public function search($resutl)
    {
        try {
            $sql = "SELECT * FROM `products` WHERE `sectors`='$resutl'";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }

    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM `products` where `id`= $id";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertToObject($stmt->fetch());
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }

    }

    public function create($request)
    {
        try {
            $sql = "INSERT INTO `products`(`product_name`,`sectors`,`amount`,`date_created`,`describe`) VALUES (?,?,?,?,?)";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $request['sec']);
            $stmt->bindParam(3, $request['amount']);
            $stmt->bindParam(4, $request['date']);
            $stmt->bindParam(5, $request['des']);
            $stmt->execute();
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }

    }

    public function update($request)
    {

        try {
            $sql = "UPDATE `products` SET `product_name`=?,`sectors`=?,`amount`=?,`date_created`=?,`describe`=? WHERE `id`=" . $request['id'];
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $request['sec']);
            $stmt->bindParam(3, $request['amount']);
            $stmt->bindParam(4, $request['date']);
            $stmt->bindParam(5, $request['des']);
            $stmt->execute();
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `id` = $id";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }

    public function convertToObject($data)
    {
        $product = new Products($data['name'], $data['sectors'], $data['amount'], $data['date'],$data['describe']);
        $product->setId($data['id']);
        return $product;
    }

    public function convertAllToObj($data)
    {
        $objs = [];
        foreach ($data as $item) {
            $objs[] = $this->convertToObject($item);
        }
        return $objs;
    }
}