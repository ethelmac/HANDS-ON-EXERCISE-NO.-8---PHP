<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "myfirstdb";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}

$isSuccess = false;

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];


    $sql = "INSERT INTO persons (person_fname, person_mname, person_lname, age, gender, email, address, contact_number) 
            VALUES ('$fname', '$mname', '$lname', '$age', '$gender', '$email', '$address', '$contact')";

    if($conn->query($sql) === TRUE) {
        $isSuccess = true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php include './layout/head.php'; ?>
    <?php if($isSuccess): ?>
        <h3 style="color: green;">Record Successfully Inserted to Database</h3>
    <?php endif; ?>
    <br>
    <a href="./index.php">Back to Main Form</a>
<?php include './layout/foot.php'; ?>