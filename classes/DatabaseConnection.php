<?php
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 03/19/2015
 * Time: 5:56 PM
 */

class DatabaseConnection
{

    private $host = 'mysql1005.ixwebhosting.com';
    private $dbname = 'C325018_sociallenavy';
    private $username = 'C325018_social';
    private $password ='Asdf1234';

    public $con = null;

    function __construct(){

        $this->connect();
    }

    function connect(){

        try{

            $this->con = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


        }catch(PDOException $e){

            echo 'We\'re sorry but there was an error while trying to connect to the database';
            file_put_contents('connection.errors.txt', $e->getMessage().PHP_EOL,FILE_APPEND);

        }
    }
}