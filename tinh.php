<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        body{
            display:block;
        }
        #so1,#so2,button,#kq:focus{
            outline: none;
        }
        li{
            list-style-type: none;
            margin-top: 20px;
        }
        .nut{
            cursor: pointer;
            width: 50px;
            height: 50px;
            margin-right: 10px;
            background-color: white;
            border: 1px solid #dddddd;
        }
        .nut:hover{
            -webkit-transform: scale(1.2);
        }
        span{
            margin-right: 32px;
        }
        input{
            width: 300px;
            font-size: 25px;
            height: 50px;
        }
    </style>
</head>
<body>
<form action = "tinh.php" method = "post">
    <ul>
        <li>
            <label for="so1" style="margin-right: 20px">Nhập số thứ nhất</label>
            <input type="text" name="so1" id="so1">
        </li>
        <li>
            <label for="so1" style="margin-right: 30px">Nhập số thứ hai</label>
            <input type="text" name="so2" id="so2">
        </li>
        <li>
            <span>Chọn phép toán</span>
            <input type="submit" class="nut"name="+" value="+"/>
            <input type="submit" class="nut"name="-" value="-"/>
            <input type="submit" class="nut"name="*" value="*"/>
            <input type="submit" class="nut"name="/" value="/"/>
            <input type="submit" class="nut"name="^" value="^"/>
        </li>
    </ul>
</form>
<?php
$result = "";
if(isset($_POST)){
    $so1 = 0;
    $so2 = 0;
    if(isset($_POST['so1'])){
        $so1 = $_POST['so1'];
    }
    if(isset($_POST['so2'])){
        $so2 = $_POST['so2'];
    }
    if(is_numeric($so1) && is_numeric($so2)){
        if(isset($_POST['+'])){
            $result = $so1 + $so2;
        }
        elseif(isset($_POST['-'])){
            $result = $so1 - $so2;
        }
        elseif(isset($_POST['*'])){
            $result = $so1 * $so2;
        }
        elseif(isset($_POST['/'])){
            $result = $so1 / $so2;
        }
        elseif(isset($_POST['^'])){
            $result = pow($so1, $so2);
        }
        echo '<span style="margin-right: 85px;margin-left: 40px">Kết quả</span>';
        echo '<input type = "text" readonly value = "'.$result.'" >';
    }else{
        echo 'Bạn đã nhập sai số';
    }
}
?>
</body>
</html>
