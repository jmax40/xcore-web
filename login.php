<?php
session_start();
include('connection.php');

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM outaccount WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        if ($row['password'] === $password) { // Check if the passwords match
            $_SESSION['id'] = $row['id'];
            header('Location: pos/index.php');
            exit();
        } else {
            echo "<script>alert('Invalid Password');</script>";
        }
    } else {
        echo "<script>alert('Invalid Username');</script>";
    }
}
?>


<html>
<head>
    <link href="stylelogin.css" rel="stylesheet" />
    <link rel="shortcut icon" href="css/webicon.ico" type="image/x-icon">
</head>

<body>
<div class="form-wrapper">
    <form action="" method="post">
       <h3 style="text-align: center;">WELCOME!</h3>
        <div class="form-item">
            <input type="text" name="username" required="required" placeholder="Username" autofocus required></input>
        </div>
        <div class="form-item">
            <input type="password" name="password" required="required" placeholder="Password" required></input>
        </div>
        <div class="button-panel">
            <input type="submit" class="button" title="Log In" name="login" value="login">
        </div>
        <div class="reminder">
            <p><a>Become an agent?</a> <a href="#">Sign up now</a></p>
            <p><a href="#">Forgot password?</a></p>
        </div>
    </form>
</div>

</body>
</html>
