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
    <title>Document</title>
</head>
<style>
    /*===Client Login Form===*/
#body{
    background-image: url('https://wallpapers.com/images/hd/silver-aesthetic-car-wash-av2eptgo6na7ybh8.jpg');
    background-repeat: no-repeat;
    background-position: cover;
}
#index{
    border: 3px solid #f1f1f1;
    width: 19%;
    margin: auto;
    margin-top: 13%;
    padding: 10px;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
    border-radius: 7%;
}
#input-form{
    width: 90%;
    padding: 12px 20px;
    margin: 8px 18px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

}
#label-form{
    font-weight: bold;
    margin-left: 5%;
}









</style>
<body id="body">
    <form id="index" action="" method="post">

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
