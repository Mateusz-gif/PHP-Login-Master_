<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['Username']);
    $password = trim($_POST['Password']);

    if (!empty($username) && !empty($password)) {
        file_put_contents('users.txt', "$username,$password\n", FILE_APPEND);
        echo "Registered successfully! <a href='login.php'>Login</a>";
    } else {
        echo "All fields are required.";
    }
} else {
    header("location:register.php");
    exit;
}
?>
