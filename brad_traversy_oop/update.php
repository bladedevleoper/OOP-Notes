<<<<<<< HEAD
<?php

//this will autoload all the files in the classes folder
spl_autoload_register(function($class_name){

    include __DIR__ . '/classes/' . $class_name . '.php';

});

//instantiate the Database class
$database = new DatabaseConnection();

/*DELETE POST */

if(isset($_POST['delete'])){
    //test to see if we can return the id from the item
    // echo $_POST['delete_id'];
    $delete_id = $_POST['delete_id'];

    $database->query('DELETE FROM posts WHERE id = :id');
    $database->bind(':id', $delete_id);
    $database->execute();

}

/* END DELETE POST */

/* UPDATE THE POST */
//sanitize the data
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//checking to see if the submit button has been clicked
if(isset($post['submit'])){
    // we don't need to add the super global $_POST as we've set a varaible to obtain the values.
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    
    //using the database object and calling the query method adding the Update query.
    $database->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
    //after VALUES keyword, we need to bind the data :title, :body
    $database->bind(':title', $title); //binding to the $title variable
    $database->bind(':body', $body); //binding to the $body variable
    $database->bind(':id', $id); //binding to the $id variable
    //once the data is bind to the variables, we need to execute them to the db
    $database->execute();

}

/* END FOR UPDATE POST */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update a record in the database</title>
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

    <h1>Posts from the database</h1>
    <?php
        $database->query('SELECT * FROM posts');
        $rows = $database->resultSet();
        ?>

        <?php foreach($rows as $row) : ?>
            <div>
                <h3><?= $row['title']; ?></h3>
                <p><?= $row['body']; ?></p></br>
                <?php //we can now set a delete button to go next to each post ?>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="delete_id" value="<?= $row['id']; ?>">
                <button type="submit" name="delete" value="delete" id="delete">Delete</button>
                </form>
            </div>
        <?php endforeach; ?>
</body>
=======
<?php

//this will autoload all the files in the classes folder
spl_autoload_register(function($class_name){

    include __DIR__ . '/classes/' . $class_name . '.php';

});

//instantiate the Database class
$database = new DatabaseConnection();

/*DELETE POST */

if(isset($_POST['delete'])){
    //test to see if we can return the id from the item
    // echo $_POST['delete_id'];
    $delete_id = $_POST['delete_id'];

    $database->query('DELETE FROM posts WHERE id = :id');
    $database->bind(':id', $delete_id);
    $database->execute();

}

/* END DELETE POST */

/* UPDATE THE POST */
//sanitize the data
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//checking to see if the submit button has been clicked
if(isset($post['submit'])){
    // we don't need to add the super global $_POST as we've set a varaible to obtain the values.
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    
    //using the database object and calling the query method adding the Update query.
    $database->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
    //after VALUES keyword, we need to bind the data :title, :body
    $database->bind(':title', $title); //binding to the $title variable
    $database->bind(':body', $body); //binding to the $body variable
    $database->bind(':id', $id); //binding to the $id variable
    //once the data is bind to the variables, we need to execute them to the db
    $database->execute();

}

/* END FOR UPDATE POST */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update a record in the database</title>
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

    <h1>Posts from the database</h1>
    <?php
        $database->query('SELECT * FROM posts');
        $rows = $database->resultSet();
        ?>

        <?php foreach($rows as $row) : ?>
            <div>
                <h3><?= $row['title']; ?></h3>
                <p><?= $row['body']; ?></p></br>
                <?php //we can now set a delete button to go next to each post ?>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="delete_id" value="<?= $row['id']; ?>">
                <button type="submit" name="delete" value="delete" id="delete">Delete</button>
                </form>
            </div>
        <?php endforeach; ?>
</body>
>>>>>>> 856b620add46b8e685e5835c6ca7028944b9d602
</html>