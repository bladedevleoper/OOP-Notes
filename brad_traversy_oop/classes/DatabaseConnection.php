<?php

/*
    This will be our database class to connect to the database.
*/

class DatabaseConnection
{
    /* this is where the properties with the database connections */

    //Connection and Authentication
    private $host = 'localhost';
    private $user = 'root'; //database username
    private $password = 'root'; //database password
    private $dbname = 'a_blog'; //databasename

    //Database Handler
    private $dbh;
    //to store our errors with connecting to the database
    private $error;
    //We will need a statement property to handle our prepared statements
    private $stmt;

    //this will be used to open the connection each time the class is instantiated.
    public function __construct()
    {
        //Need to set a DSN (connection string)
        $dsn = 'mysql:host='. $this->host .  '; dbname='.$this->dbname;

        //Then we need to set our options (PDO Options)
        $options = [

                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

        ];

        //we need to create a new PDO connection with a try catch block

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
            // echo 'Connection Success';
        } catch(PDOEception $e){
            $this->error = $e->getMessage();
        }
    }

    public function query($query)
    {
        //Here we are using the propery of stmt(statement for short) and setting it to property dbh(database handler) and then passing it to the PDO prepare statement method and passing $query to it.
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
        //for us to do anything we need to create an execute method

      return $this->stmt->execute();
    }


    public function resultSet()
    {
        //in this method, if we want to display any results then we need to create a method that handles this.
        //we call our execute method
        $this->execute();
        //then return the stmt with a call using a PDO fetch all method and make sure it fetches it back as an associative array
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function dd($data)
    {
        //this is my die and dump method to test results
        echo'<pre>';
        print_r($data);
        echo'</pre>';
        exit;
    
    }

    public function lastInsertId()
    {
        //this will bring back the last inserted Id.
        $this->dbh->lastInsertId();
    }

}