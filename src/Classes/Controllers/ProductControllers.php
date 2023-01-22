<?php

namespace App\Controllers;

use App\Config\Database;

class ProductControllers
{
    private Database $database;
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getLatestProduct($count): array
    {
        $db = $this->database->getConnection();
        $productList = array();
        $result = $db->query("SELECT ID,name,price,image,is_new FROM product WHERE status=1 LIMIT {$count}");
        $i = 0;
        while($row = $result->fetch())
        {
            $productList[$i]['ID'] = $row['ID'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['image'] = $row['image'];
            $productList[$i]['is_new'] = $row['is_new'];
            $i++;

        }
        return $productList;
    }
}