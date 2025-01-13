<!-- this file will be used to handel the registration and login form -->

<?php

include "connect.php"; // this will include the connect.php file in this file

if (isset($_POST['signUp'])) { // this will check if the signUp button is clicked or not
   $firstName = $_POST['fName']; // this will get the first name from the form
    $lastName = $_POST['lName']; // this will get the last name from the form
    $email = $_POST['email']; // this will get the email from the form
    $password = $_POST['password']; // this will get the password from the form
    $password=md5($password); // this will encrypt the password to two characters of hexadecimal number using md5 function

$checkEmail = "SELECT * FROM users WHERE email='$email'"; // this will check if the email is already in the database or not
$result = $conn->query($checkEmail); // this will execute the query
if ($result->num_rows>0) { // this will check if the email is already in the database or not
    echo "Email Adress already exists!"; // this will show the alert message
} else {
    $insertQuery = "INSERT INTO users (firstName, lastName, email, password) 
    VALUES ('$firstName', '$lastName', '$email', '$password')"; // this will insert the data into the database
    if ($conn->query($insertQuery) == TRUE) { // this will check if the data is inserted or not using the query method of the $conn object of database connection
        header("Location: index.php"); // this will redirect the user to the index.php page
        echo "Registration Successfull"; // this will show the alert message
    } else {
        echo "Error:".$conn->error; // this will show the alert message
    }
}

}

// then we create the login form
if (isset($_POST['signIn'])) { // this will check if the signIn button is clicked or not
    $email = $_POST['email']; // this will get the email from the form
    $password = $_POST['password']; // this will get the password from the form
    $password=md5($password); // this will encrypt the password to two characters of hexadecimal number using md5 function

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'"; // this will check if the email and password is already in the database or not
    $result = $conn->query($sql); // this will execute the query
    if ($result->num_rows>0) { // this will check if the email and password is already in the database or not
        session_start(); // this will start the session
        $row=$result->fetch_assoc(); // this will fetch the data from the database
        $_SESSION['email']=$row['email']; // this will store the email in the session
        header("Location: homepage.php"); // this will redirect the user to the home.php page
        echo "Login Successfull"; // this will show the alert message
        exit();
    } else {
        echo "Email or Password is incorrect"; // this will show the alert message
    }
}

?>