<?php
    $link = mysqli_connect('localhost:3306', 'root', '');
    if(!$link){
        echo 'error';
    }

    mysqli_select_db($link, 'mycontact');

    function get_list($tableName){
        global $link;
        $result = mysqli_query($link, "select * from {$tableName}");

        if(!$result){
            echo 'error';
        }
        return $result;
    }