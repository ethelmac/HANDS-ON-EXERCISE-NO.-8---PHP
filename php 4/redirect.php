<?php
require_once("dbcontroller.php");
$db_handle = new DBController();

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO persons (fname, mname, lname, age, gender, email, address, contact_number) 
              VALUES ('$fname', '$mname', '$lname', '$age', '$gender', '$email', '$address', '$contact')";
    
    $success = $db_handle->executeUpdate($query);

    if ($success) {
        header("Location: index.php?status=success");
    } else {
        echo "Error saving record.";
    }
}
?>