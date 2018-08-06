<?php

//this will autoload all the files in the classes folder
spl_autoload_register(function($class_name){

    include __DIR__ . '/classes/' . $class_name . '.php';

});

//instantiate the Database class
$database = new DatabaseConnection();

//sanitize the data
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//checking to see if the submit button has been clicked
if(isset($post['submit'])){
    // we don't need to add the super global $_POST as we've set a varaible to obtain the values.
    $title = $post['title'];
    $body = $post['body'];
    
    //using the database object and calling the query method and inserting the values.
    $database->query('INSERT INTO posts (title, body) VALUES (:title, :body)');
    //after VALUES keyword, we need to bind the data :title, :body
    $database->bind(':title', $title); //binding to the $title variable
    $database->bind(':body', $body); //binding to the $body variable
    //once the data is bind to the variables, we need to execute them to the db
    $database->execute();

    // $database->dd($post);
    if($database->lastInsertId()){
        echo '<p>Post Added</p>';
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>How to insert data into a database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Insert Data into a database</h1>
    <?php //in the action atribute we declare the super global $_SERVER['PHP_SELF']; this will make the page submit to itself ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="id">Post Id</label></br>
        <input type="text" name="id" placeholder="Specify ID"></br></br>
        <label for="title">Post Title</label></br>
        <input type="text" name="title" placeholder="Add a title"></br></br>
        <label for="body">Post Body</label></br>
        <textarea name="body"></textarea></br></br>
        <button type="submit" name="submit" id="submit">Post</button>
    </form>
</body>
</html>