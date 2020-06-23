
<?php
require_once('a.php');
function select($sql)
{

    //mở kết nối 
    $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //tạo truy vấn
    $resulset = mysqli_query($con, $sql);

    // tạo mảng lưu student
    $studentList = array();

    while ($row = mysqli_fetch_array($resulset, 1)) {
        $studentList[] = $row;
    }
    // đóng kết nối
    mysqli_close($con);
    return $studentList;
}

function insert_remove($sql)
{
    //mở kết nối 
    $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //tạo truy vấn
    mysqli_query($con, $sql);

    // đóng kết nối
    mysqli_close($con);
}


