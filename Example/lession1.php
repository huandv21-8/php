<?php
//phan 1: các cách hiện thị trong php
//c1
echo "hello world";
//c2
print '<h2 style = "color: blue">Hello world </h2>';
//c3


//phan 2:  nối chuỗi trong php
echo '<h3>huan</h3>' . '<h4>ha</h4>';

// phan 3: khai bao bien
$str = 'hello'; //biến là string
echo $str;

$str = 3; // biến là int
echo $str;

$str = true; //bien là boolen
echo $str;

//phan 4: cách hiển thị giá trị php vào html
/*<h2 style = "color: blue"> <?=$str?> </h2>*/

//phan 5: khai bao hang so => bien có giá trị ko thay đổi
const BASE_URL = ' abc';
echo BASE_URL;

// phan 6 :biến môi trường => lưu thông tin browser
var_dump($_SERVER);
var_dump($_GET);
var_dump($_REQUEST);
var_dump($_COOKIE);

if ($str == 1) {
    echo $str;
}


//phan 7: khai bao mang rong
//c1
$arr = [];
//c2
$arr = array();

//phan 8 :khai bao 1 mảng có phần tử sẵn
$arr2 = [1, 2, 3];
$arr2 = array(2, 3, 4);

//phan 9: thêm 1 phẩn tử vào mảng:
//c1
array_push($arr2, 100);
//c2
$arr2[] = 111;


//phan 10:  lấy phẩn tử trong 
$leng = count($arr2);   // số phần tử trong mảng
echo $arr2[2];  // lấy giá trị vị trí thứ 2


//xóa phần tử trong mảng
array_splice($arr2, 2, 1); // 2 là vị trí bắt đầu xóa còn 1 là số phần tử cần xóa.


// Mảng key và value
$dog = [
    'name'    => 'ABC',
    'address' => 'Ha Noi',
    'eye'     => 2
];
//name, address, eye => key
//ABC, Ha Noi, 2 => gia tri
//voi key = name => gia tri tuong ung la ABC
print('<br/>');
print $dog['name'];
// add them 1 key moi vao mang $dog
$dog['foodtype'] = 'Xuong';
print('<br/>');
print $dog['foodtype'];

$dogList = [
    [
        'name'     => 'ABC',
        'address'  => 'Ha Noi',
        'eye'      => 2,
        'foodType' => ['Xuong', 'Com', 'Rau']
    ], [
        'name'     => 'ABC',
        'address'  => 'Ha Noi',
        'eye'      => 2,
        'foodType' => ['Xuong', 'Com', 'Rau']
    ]
];
$dog1 = $dogList[0];
print($dog1['name']);
