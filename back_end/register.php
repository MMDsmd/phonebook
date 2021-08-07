<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $link = mysqli_connect('localhost:3306', 'root', '');
//    if(!$link) {
//        echo 'could not connect :'.mysqli_connect_error();
//        exit;
//    }else{
//        echo 'connected to db ';
//    }
    $succes = '';
    mysqli_select_db($link , 'mycontact');
    $statement = mysqli_prepare($link,"insert into user ( name , email , password ) values (?,?,?)");
    mysqli_stmt_bind_param($statement,'sss',$name,$email,$password);
        if($result = mysqli_stmt_execute($statement)){
            echo 'با موفقیت ثبت نام شدید';

        }else{
            echo 'error: '.mysqli_error($link);
            exit;
        }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>

   <a href="../front_end/index.php">بازگشت به صفحه ورود</a>

    </body>
</html>


