<?php
include 'config.php';
include 'functions.php';
session_start();

if (isset($_POST['loginForm'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (validate_user_creds($username, $password)){
        $_SESSION['username'] = $username;
        header('location: admin.php');
    }else{
        $status = 'Incorrect login credentials';
    }
}
?>

<!doctype html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <h1>login</h1>
        <form action='login.php' method='post'>
            <ul>
                <li>
                    <label for='username'>Username: </label>
                    <input type='text' name='username'>
                </li>
                <li>
                    <label for='password'>Password: </label>
                    <input type='text' name='password'>
                </li>
                <li>
                    <input type='submit' value='login' name='loginForm'>
                </li>            
            </ul>
            <?php if (isset($status)) : ?>
                <p><?php echo $status; ?></p>
            <?php endif; ?>
        </form>
    </body>
</html>