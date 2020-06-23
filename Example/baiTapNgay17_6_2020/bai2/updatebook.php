<?php
if (isset($_GET['no'])) {
    

    $xoa = "UPDATE `book` SET `name_book`='',`author`='',`price`='',`producer`='' WHERE no =".$_GET['no'];
    insert_remove($xoa);
}