<?php
    $errors = [];
    $data = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
        $method = $_SERVER["REQUEST_METHOD"];
        
        // Basic sanitization
        foreach ($_REQUEST as $key => $value) {
            $data[$key] = htmlspecialchars(trim($value));
        }

        // Specific Validation Logic
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        if (!is_numeric($data['age']) || $data['age'] < 1 || $data['age'] > 120) {
            $errors[] = "Please enter a valid age between 1 and 120.";
        }

        if (empty($data['fname']) || empty($data['lname'])) {
            $errors[] = "First and Last names are required.";
        }

        // If there are errors, you could redirect back or show them here
        if (!empty($errors)) {
            echo "<div style='color: #ff4c4c; background: #2a0d0d; padding: 10px; border: 1px solid #ff4c4c; border-radius: 5px;'>";
            foreach ($errors as $error) { echo "<p>$error</p>"; }
            echo "<a href='index.php' style='color: white;'>Go Back</a></div>";
            exit();
        }

        // Assign variables for display if validation passes
        $fname   = $data['fname'];
        $mname   = $data['mname'];
        $lname   = $data['lname'];
        $age     = $data['age'];
        $gender  = $data['gender'];
        $email   = $data['email'];
        $address = $data['address'];
        $contact = $data['contact'];

    } else {
        header("Location: index.php");
        exit();
    }
?>