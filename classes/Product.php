<?php
namespace advweb;
class Product extends Database{

    public function __construct(){

        parent::__construct();


    }

    public function getProducts(){

        $query= "SELECT 
        product.product_id,
        product.name,
        product.price,
        image.image_file_name AS image
        FROM `product`
        INNER JOIN product_image ON product.product_id = product_image.product_id
        INNER JOIN image ON product_image.image_id=image.image_id";

        // sending query to database
        $statement = $this -> connection -> prepare ($query); 

        if($statement -> execute() ){


            $result = $statement -> get_result();

            $product_array=array();

            while($row = $result -> fetch_assoc()){
                array_push($product_array,$row);
            }
            return $product_array;



        }




    }


}



?>