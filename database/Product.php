<?php

// Use to fetch product data 
class Product 
{
    public $db = null; 
    

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch producct data using getData Method 
    public function getData($table = 'product') {
        $result = $this->db->con->query("SELECT * FROM {$table}");
//         print_r($result);
        $resultArray = array();
        
        // fetch product data one by one
        while ($items = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray [] = $items;
            // die(var_dump($resultArray));
        }
        // die(print_r($resultArray));
        return $resultArray;

    }
    
    // get product using item id 
    public function getProduct($item_id = null, $table ='product') {
        if(isset($item_id)){
            $result =$this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($items = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray [] = $items;
            }
        }
        return $resultArray;
    }
    public function getFilterData($filter_field = null, $table = 'product') {

        $result = $this->db->con->query("SELECT DISTINCT({$filter_field}) FROM {$table} ORDER BY item_id DESC");
//        if (isset($result)){
//            echo "hello";
//        }
//        die();

        $resultArray = array();

        // fetch product data one by one
        while ($items = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray [] = $items;
            // die(var_dump($resultArray));
        }
        // die(print_r($resultArray));
        return $resultArray;

    }

    
}