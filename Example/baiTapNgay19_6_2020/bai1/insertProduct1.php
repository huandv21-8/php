<?php
require_once('manage.php');
$link = $title = $price = $percent = $sql = '';
if (!empty($_POST)) {
    $id = '';

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
    if (isset($_POST['link'])) {
        $link = $_POST['link'];
    }
    if (isset($_POST['title'])) {
        $title = $_POST['title'];
    }
    if (isset($_POST['price'])) {
        $price = $_POST['price'];
    }
    if (isset($_POST['percent'])) {
        $percent = $_POST['percent'];
    }


    if ($link != '' && $title != '' && $percent != '' && $price != '') {
        $link = str_replace('\'', '\\\'', $link);
        $title = str_replace('\'', '\\\'', $title);
        $price  = str_replace('\'', '\\\'', $price);
        $percent = str_replace('\'', '\\\'', $percent);
        if ($id != '') {
            //update
            $sql = "update product set link = '$link', title = '$title', price = '$price' , percent = '$percent' where id = " . $id;
        } else {
            //insert
            $sql = "INSERT INTO `product`( `link`, `title`, `price`, `percent`) VALUES ('$link','$title',',$price','$percent')";
        }
        
        insert_remove($sql);
        header('Location: admin.php');
        die();
    }
}
