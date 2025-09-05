<?php
//this is how to connect in to your database
$conn = mysqli_connect("localhost", "root", "", "rdbms_db");

//this is to check if the database is connected or not
if (!$conn) {
    echo "db not connected";
}

//this is to check if the submit botton was click
if (isset($_POST['submit'])) 

{
    //this is to get the form values
    $name = $_POST['user'];
    $pass = $_POST['pass'];

    //this is to hash the pass
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    //this is to insert the form data into db client_login table
    $insert = "INSERT INTO client_login (user_name, user_pass) VALUES ('$name', '$hash')";

    //this to run the  ("$insert") to record the data into the database
    $run = mysqli_query($conn, $insert);

    //this is to check if the client login successfully it will be redirect into home page or dashboard
    if ($run) {
        header("location: ./views/index.php");
    }
    //else if the client failed to login it shows the error ("echo "failed to login";")
    else {
        echo "failed to login";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/custom.css">
    <title>Document</title>
</head>

<body id="body">
    <form action="" method="post">

        <h1>Client User Account</h1>
        <p>Please login to view the dashboard</p>
        <hr><br><br><br>

        <label id="label-form" for="">User Name:</label>
        <br>
        <input id="input-form" type="text" name="user" placeholder="Username..." required>
        <br>

        <label id="label-form" for="">User Password:</label>
        <br>
        <input id="input-form" type="password" name="pass" placeholder="Userpass..." required>
        <br><br>
        <hr><br><br>

        <input name="submit" type="submit">
        <br><br>
    </form>
</body>

</html>
