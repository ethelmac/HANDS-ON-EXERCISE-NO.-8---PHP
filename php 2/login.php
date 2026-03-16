<?php require './layout/head.php'; ?>

<h1>Login</h1>
<form action="#" method="POST">
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="user_email" required>
    </div>
    <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit" style="background: #007bff;">Sign In</button>
</form>

<?php require './layout/foot.php'; ?>