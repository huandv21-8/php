<?php
$a = $b = $cal = '';
$ketqua = 0;

if (isset($_POST['a'])) {
    $a = $_POST['a'];
}
if (isset($_POST['b'])) {
    $b = $_POST['b'];
}
if (isset($_POST['cal'])) {
    $cal = $_POST['cal'];
}

switch ($cal) {
    case '+':
        $ketqua = $a + $b;
        break;
    case '-':
        $ketqua = $a - $b;
        break;
    case 'x':
        $ketqua = $a * $b;
        break;
    case '/':
        $ketqua = $a / $b;
        break;
    case '%':
        $ketqua = $a % $b;
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <title>Calculator</title>
    <style>
        table {
            margin: auto;
            margin-top: 50px;
            background: #BBBBBB;
        }

        .pheptinh {
            background: orange;
        }

        #c {
            width: 100px;
            height: 40px;
        }

        .btn {
            width: 50px;
            height: 40px;
        }

        .calcu {
            width: 200px;
            height: 30px;
        }
    </style>

</head>

<body>
    <form method="post" name="form">
        <input type="text" name="a" id="a" class="a" value="<?=$ketqua?>" style="display: none;">
        <input type="text" name="b" id="b" class="b"style="display: none;">
        <input type="text" name="cal" id="cal" class="cal"style="display: none;">
        <p id="z"></p>
    </form>

    <table>
        <tr>
            <td colspan="4"><input class="calcu" id="calcu" type="text" value="<?=$ketqua?>"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" onclick="reset()" value="AC"></td>
            <td><input type="button" class="btn" value="+/-"></td>
            <td><input type="button" class="btn" onclick="setPhepTinh('%')" value="%"></td>
            <td><input type="button" class="btn pheptinh" onclick="setPhepTinh('/')" value="/"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" onclick="setValue(7)" value="7"></td>
            <td><input type="button" class="btn" onclick="setValue(8)" value="8"></td>
            <td><input type="button" class="btn" onclick="setValue(9)" value="9"></td>
            <td><input type="button" class="btn pheptinh" onclick="setPhepTinh('x')" value="x"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" onclick="setValue(4)" value="4"></td>
            <td><input type="button" class="btn" onclick="setValue(5)" value="5"></td>
            <td><input type="button" class="btn" onclick="setValue(6)" value="6"></td>
            <td><input type="button" class="btn pheptinh" onclick="setPhepTinh('-')" value="-"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" onclick="setValue(1)" value="1"></td>
            <td><input type="button" class="btn" onclick="setValue(2)" value="2"></td>
            <td><input type="button" class="btn" onclick="setValue(3)" value="3"></td>
            <td><input type="button" class="btn pheptinh" onclick="setPhepTinh('+')" value="+"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" class="btn" id="c" onclick="setValue(0)" value="0"></td>
            <td><input type="button" class="btn" value="."></td>
            <td><input type="submit" class="btn pheptinh" onclick="submit()" value="="></td>
        </tr>
    </table>
    <script type="text/javascript">
        var option = 1;

        function reset() {
            option = 1;
            $(".a").val('');
            $(".b").val('');
            $(".cal").val('');
            ghi();
        }

        function setValue(number) {
            if (option == 1) {
                $(".a").val($(".a").val() + number);
            } else {
                $(".b").val($(".b").val() + number);
            }
            ghi();
        }

        function setPhepTinh(pheptinh) {
            if ($(".a").val() == '') {
                return;
            }
            $(".cal").val(pheptinh);
            option = 2;
            ghi();
        }

        function ghi() {
            $(".calcu").val($(".a").val() + $(".cal").val() + $(".b").val());
        }

        function submit() {
            $('[name = form]').submit();
        }
    </script>


</body>

</html>