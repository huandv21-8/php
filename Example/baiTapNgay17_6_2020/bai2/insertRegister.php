<?php
require_once('manage.php');
$name = $email = $phone = $acc = $pass = $sql = '';
if (!empty($_POST)) {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST['acc'])) {
        $acc = $_POST['acc'];
    }
    if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];
    }
    if ($name != '' && $email != '' && $phone != '' && $acc != '' && $pass != '') {
        $name = str_replace('\'', '\\\'', $name);
        $email = str_replace('\'', '\\\'', $email);
        $acc  = str_replace('\'', '\\\'', $acc);
        $pass = str_replace('\'', '\\\'', $pass);
        $phone = str_replace('\'', '\\\'', $phone);

        $sql = "INSERT INTO user(account, email, name, phone, pass) VALUES ('$acc','$email','$name','$phone','$pass')";
        insert_remove($sql);
        setcookie('style', 'success', time() + 100, '/');
    }
}



