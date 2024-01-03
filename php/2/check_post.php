<?php
    // foreach($_POST as $key => $value) {
    //     echo "$key: $value <br>";
    // };

    $name = $_POST['username'];
    $email = $_POST['email'];
    $passw = $_POST['password'];

    if(trim($name) == '') {
        echo'Вы не ввели имя пользователя';
    }
    else if (strlen(trim($name)) <= 1) {
        echo 'Такого имени не существует';
    }
    else if (trim($email) =='' || trim($passw) == '' || trim($_POST['message']) == '') {
        echo 'Введите все данные';
    }
    else {
        // echo "<h1>Все данные</h1>";
        // $_POST['password'] = md5(trim($_POST['password']));
        // foreach($_POST as $key => $value) {
        //     echo "$key: $value <br>";
        // };
        header('Location: about.php');
        exit;
    }