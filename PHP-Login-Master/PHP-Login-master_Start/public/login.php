<?php
require_once ('config.php');
session_start();

if (isset($_POST['Submit'])) {
    $enteredUsername = htmlspecialchars(trim($_POST['Username']));
    $enteredPassword = htmlspecialchars(trim($_POST['Password']));

    $loginSuccess = false;
    $lines = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        list($savedUser, $savedPass) = explode(',', trim($line));
        if ($enteredUsername === $savedUser && $enteredPassword === $savedPass) {
            $loginSuccess = true;
            break;
        }
    }

    if ($loginSuccess) {
        $_SESSION['Username'] = $enteredUsername;
        $_SESSION['Active'] = true;
        header("location:index.php");
        exit;
    } else {
        $error = 'Incorrect Username or Password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/signin.css">
</head>
<body>
<form method="post" action="login.php">
    <input type="text" name="Username" placeholder="Username" required minlength="3">
    <input type="password" name="Password" placeholder="Password" required minlength="3">
    <button type="submit" name="Submit">Sign in</button>
</form>
    <a href="register.php">Don't have an account? Register here</a>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
