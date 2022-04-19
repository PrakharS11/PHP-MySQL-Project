<?php
class db{
    protected $connection;

    function setconnection(){
        try{
            $this->connection=new PDO("mysql:host=localhost; dbname=employee_manager","root","");
        }
        catch(PDOException $e){
            echo "Error";
        }
    }

}
