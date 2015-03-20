<?php
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 03/19/2015
 * Time: 5:56 PM
 */

class DatabaseConnection {

    private $dbHost = "localhost";
    private $dbName = "socialen_instamgt";
    private $dbUser = "socialen";
    private $dbPassword = "y2QnRqtW";

    public $con = '';

    function Connect()
    {
        $this->$con = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPassword);
    }


}