<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>
    <style>

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #081F37;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        fieldset {
            border: 2px solid #008080;
            border-radius: 8px;
            width: 400px;
            padding: 20px;
            background-color: #0d2a4a;
        }
        legend {
            color: #00cbcb;
            font-weight: bold;
            padding: 0 10px;
        }
        table { width: 100%; }
        td { padding: 8px 0; }
        input[type="text"], input[type="email"], input[type="number"], input[type="tel"], select {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #008080;
            background: #081F37;
            color: white;
        }
        .btn-submit {
            background-color: #008080;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-reset {
            background-color: #444;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>PHP Output No. 1</h1>
    
    <fieldset>
        <legend>Registration Form (POST)</legend>
        <form action="redirect.php" method="POST">
        <table>
            <tr><td>First Name</td><td><input type="text" name="fname" required /></td></tr>
            <tr><td>Middle Name</td><td><input type="text" name="mname" required /></td></tr>
            <tr><td>Last Name</td><td><input type="text" name="lname" required /></td></tr>
            
            <tr><td>Age</td><td><input type="number" name="age" min="1" max="120" required /></td></tr>
            <tr><td>Gender</td><td>
                <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </td></tr>
            <tr><td>Email</td><td><input type="email" name="email" placeholder="example@email.com" required /></td></tr>
            <tr><td>Address</td><td><input type="text" name="address" required /></td></tr>
            <tr><td>Contact No.</td><td><input type="tel" name="contact" placeholder="09XXXXXXXXX" required /></td></tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="btn-submit" value="Submit Data">
                    <input type="reset" class="btn-reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>
</body>
</html>