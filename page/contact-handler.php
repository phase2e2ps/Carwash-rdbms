<?php
    include "../model/db_connection.php";
    include "../model/contact-class.php";

    $db = (new Database())->connect();
    $contact = new Contact($db);


    //this is to get the form data
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];


        // Validate input (basic example)
        if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
            $database = new Database();
            $db = $database->connect();

            $contact = new Contact($db);
            if($contact->add($name, $email, $subject, $message)){
                echo "<script>alert('Message sent successfully!')</script>";
            } else {
                echo "<script>alert('Failed to send message. Please try again later.')</script>";
            }
        } else {
            echo "<script>alert('All fields are required!')</script>";
        }

        if($contact->add($name, $email, $subject, $message)){
            echo "<script>alert('Message sent successfully!')</script>";
            header("location: ../views/index.php");
            exit;
        } else {
            echo "<script>alert('Failed to send message. Please try again.')</script>";   
        }
    }
?>
