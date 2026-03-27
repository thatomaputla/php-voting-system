<?php
    require_once 'includes/configsession-inc.php';
    require_once 'includes/signup_view-inc.php';
    require_once 'includes/login_view-inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Login</h1>

</br>

    <form action="includes/login-inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>login</button>
    </form>

    <?php
    check_login_errors();
    ?>

</br>

    <h1>Sign Up</h1>

</br>

    <form action="includes/signup-inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <button>Sign Up</button>
    </form>

    <?php
        check_signup_errors();
    ?>
    
</body>
</html>