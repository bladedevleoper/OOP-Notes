<?php
require 'classes/DatabaseConnection.php';

$database = new DatabaseConnection();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Database Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   <?php 

        // we can now query the database after setting the class up.
        //this is passing the query to the query method
        $database->query('SELECT * FROM posts WHERE id = :id');

        //since we are now using the WHERE clause, we therefore needto find our data, so that id is binded to :id.
        //we therefore call our bind method and pass in the parameter of :id which is picked up by $param and then 2 is picked up by $value
        // we can also randomise this by putting rand(1, 2) which randomises between post 1 and 2.
        $database->bind(':id', 2);

        $rows = $database->resultSet();
        //display the database results in a pre tag array
        //$database->dd($rows);
?>

        <h1>Posts</h1>
        <div>
            <?php 
            
                // We are using the $rows variable which is set to the resultSet() method from the class 
                // as we are returning an associative array, we need a foreach loop to do this and then access the table columns
            ?>
            <?php foreach($rows as $row): ?>
                    <div>
                        <h3><?= $row['title']; ?></h3>
                        <p><?= $row['body']; ?></p>

                    </div>
            <?php endforeach ?>
        </div>
    
</body>
</html>