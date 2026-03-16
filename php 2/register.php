<?php require './layout/head.php'; ?>

<h1>Create an Account</h1>
<form action="#" method="POST">
    <div class="form-group">
        <label>Full Name:</label>
        <input type="text" name="name" required>
    </div>
    <div class="form-group">
        <label>Age:</label>
        [cite_start]<input type="number" name="age" required> [cite: 11]
    </div>
    <div class="form-group">
        [cite_start]<label>Gender:</label> [cite: 11]
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>
    <div class="form-group">
        <label>Email:</label>
        [cite_start]<input type="email" name="email" required> [cite: 12]
    </div>
    <button type="submit">Register</button>
</form>

<?php require './layout/foot.php'; ?>