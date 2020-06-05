<?php
        $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
        $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

        if(mb_strlen($login) < 5 || mb_strlen($login) > 30) {
            echo "Не доупстимая длина логина";
            exit();
        } else if(mb_strlen($name) < 5 || mb_strlen($name) > 30) {
            echo "Не доупстимая длина имени";
            exit();
        } else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 12) {
            echo "Не доупстимая длина пароли";
            exit();
        }
        //$pass = md5($pass."qweqwr8928");
        $mysql = new mysqli('mune.ru', 'mysql', 'mysql', 'register-bd' );
        $mysql->query("INSERT INTO `users` (`login`, `pass`, `name` ) VALUES ('$login', '$pass', '$name')");

        $mysql->close();

        header('Location: /');
?>