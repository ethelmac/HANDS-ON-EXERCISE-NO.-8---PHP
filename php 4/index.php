<?php 
require_once("dbcontroller.php");
$db_handle = new DBController();
include './layout/head.php'; 
?>

<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">

<div class="container">
    <h1>PHP Output 3 & 4</h1>
    
    <form action="redirect.php" method="POST">
        <h2>Register Person</h2>
        <table cellpadding="10">
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" required></td>
                <td>Age:</td>
                <td><input type="number" name="age" required></td>
            </tr>
            <tr>
                <td>Middle Name:</td>
                <td><input type="text" name="mname"></td>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male" required> Male
                    <input type="radio" name="gender" value="Female"> Female
                </td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname" required></td>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" required></td>
                <td>Contact:</td>
                <td><input type="tel" name="contact" required></td>
            </tr>
            <tr>
                <td colspan="4">
                    <button type="submit" name="submit">Save Record</button>
                    <button type="reset">Clear Form</button>
                </td>
            </tr>
        </table>
    </form>

    <hr>

    <h2>List of Registered Persons</h2>
    <table id="personTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM persons ORDER BY id DESC";
            $results = $db_handle->runQuery($query);
            if (!empty($results)) {
                foreach ($results as $row) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['fname']} {$row['lname']}</td>
                            <td>{$row['age']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['contact_number']}</td>
                          </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>

<script src="jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="DataTables/datatables.min.js"></script>

<script>
$(document).ready(function() {
    $('#personTable').DataTable();
});
</script>

<?php include './layout/foot.php'; ?>