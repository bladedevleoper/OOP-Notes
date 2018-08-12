<?php

abstract class Model
{
    protected $dbh;
    protected $stmt;
    

    public function __construct()
    {
        $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PASS);

    }

    public function query($query)
    {
        //protected stmt is set to dbh property which then is set to prepare method which accepts the query parameter
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        //Here we need to bind our data so its a good idea to create a method to handle this

        if(is_null($type)){
            //we are going to check if our data is either null, integer or a boolean
            switch(true){
                //here we are checking to see the data that is entering our database
                //if its a string then we enter it as a string, and so forth.
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value);
                    $type = PDO::PARAM_NULL;
                    break;
                default:$type = PDO::PARAM_STR;
            }
        }
        //here we are going to then bind our data, by passing parameters from the method.
        $this->stmt->bindValue($param, $value, $type);

    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultsSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}