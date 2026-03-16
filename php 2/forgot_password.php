<?php require './layout/head.php'; ?>

<h1>Reset Password</h1>
<p>Enter your email address to receive a reset link.</p>
<form action="#" method="POST">
    <div class="form-group">
        <label>Email Address:</label>
        <input type="email" name="reset_email" required>
    </div>
    <button type="submit" style="background: #dc3545;">Send Link</button>
</form>

<?php require './layout/foot.php'; ?>