<?php include './layout/head.php'; ?>
    <h1>PHP Output 3</h1>
    <p>This output connects to the database and allows the user to save and view records.</p>
    
    <form action="redirect.php" method="POST">
        <h2>Register Person</h2>
        <table>
            <tr>
                <td><label for="fname">First Name</label></td>
                <td><input type="text" name="fname" id="fname" required></td>
            </tr>
            <tr>
                <td><label for="mname">Middle Name</label></td>
                <td><input type="text" name="mname" id="mname"></td>
            </tr>
            <tr>
                <td><label for="lname">Last Name</label></td>
                <td><input type="text" name="lname" id="lname" required></td>
            </tr>
            <tr>
                <td><label for="age">Age</label></td>
                <td><input type="number" name="age" id="age" required></td>
            </tr>
            <tr>
                <td><label>Gender</label></td>
                <td>
                    <input type="radio" name="gender" value="Male" required> Male
                    <input type="radio" name="gender" value="Female"> Female
                </td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td><label for="address">Address</label></td>
                <td><textarea name="address" id="address" required></textarea></td>
            </tr>
            <tr>
                <td><label for="contact">Contact Number</label></td>
                <td><input type="tel" name="contact" id="contact" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
    </form>

    <hr>
    <h2>List of Registered Persons</h2>
    <?php

    $conn = new mysqli("localhost", "root", "", "myfirstdb");
    $result = $conn->query("SELECT * FROM persons");

    if ($result->num_rows > 0) {
        echo "<table border='1' style='width:100%; border-collapse: collapse;'>
                <tr>
                    <th>Name</th><th>Age</th><th>Gender</th><th>Email</th><th>Address</th><th>Contact</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['person_fname']." ".$row['person_lname']."</td>
                    <td>".$row['age']."</td>
                    <td>".$row['gender']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['address']."</td>
                    <td>".$row['contact_number']."</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
    $conn->close();
    ?>
<?php include './layout/foot.php'; ?>