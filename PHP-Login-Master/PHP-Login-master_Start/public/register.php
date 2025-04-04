<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
</head>
<body>
<form action="save_user.php" method="post">
    <label>Username:</label>
    <input type="text" name="Username" required minlength="3"><br>

    <label>Password:</label>
    <input type="password" name="Password" required minlength="3"><br>

    <button type="submit">Register</button>
</form>
</body>
</html>
