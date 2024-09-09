<?php
include "db.php";
$errMsg = '';
$regStatus = '';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);



    if ($login === '' || $email === '' || $passF === '') {
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($login, 'UTF8') < 4) {
        $errMsg = "Логин должен быть более 4 символов";
    }elseif ($passF !== $passS) {
        $errMsg = "Пароли в обеих полях должны соответствовать!";
    }else{
        $existence = selectOne('user', ['email' => $email]);
//        tt($existence);
//        exit();
        if($existence['email'] === $email) {
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        }else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];

            $id = inserted('users', $post);
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            if ($_SESSION['admin']){
                header('Location: ' . BASE_URL . 'admin.php');
            }else{
                header('Location: index.php');
            }
        }
    }
}else{
    echo 'GET';
    $login = '';
    $email = '';
}
?>