<?php
namespace advweb;

class Database {
    protected $connection;

    public function __construct(){


        $this -> connection = mysqli_connect('localhost','nirvik','password','advwebpractise');

        


    }


}
?>