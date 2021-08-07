<?php

    session_start();
    if ($_SESSION['name']==null) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $link = mysqli_connect('localhost:3306', 'root', '');
        mysqli_select_db($link, 'mycontact');
        $statement = mysqli_prepare($link, "select * from user where email = ?");
        mysqli_stmt_bind_param($statement, 's', $email);
        mysqli_stmt_execute($statement);
        if (($result = mysqli_stmt_get_result($statement)) && $password == $_POST['password']) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $user['name'];

        } else {
            echo 'مشخصات شما در سیستم موجود نیست';
        }
    }

?>

