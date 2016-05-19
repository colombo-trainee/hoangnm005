
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        body{
            padding: 40px 0 0 200px;
        }
        button{
            margin-left: 20px;
            float: left;
            margin-top: 20px;
            width: 100px;
            height: 40px;
            clear: both;
            background-color: #1ca8c3;
        }
        .nhap{
            margin-left: 20px;
        }
        #subject{
            width: 200px;
            height: 50px;
            font-size: 25px;
        }
        #table{
            clear: both;
            float: left;
        }
        .nuoc{
            float: left;
        }
        ul{
            clear: both;
            padding-left: 20px;
        }
        .gia_tri {
            float: left;
            margin: 0;
        }
        input{
            margin: 0;
        }
        #graph{
            clear: both;
            margin-left: 20px;
        }
        input:focus,button:focus{
            outline: none;
        }
    </style>
</head>
<body>
<?php
    echo '<form method="post" action="ve-do-thi.php">';
    echo '<div style="width: 500px">';
    echo '<label for="subject">Nhập số đối tượng</label><input class="nhap" id="subject" name="soluong" type="number" />';
    echo '</div>';
    echo '<input type="submit" value="Nhập số" style="margin-top: 20px;height: 40px;width:100px;background-color: white; border: 1px solid #dddddd"/>';
    echo '</form>';
    $soluong = 0;
    if(isset($_POST['soluong'])) {
        $soluong = $_POST['soluong'];
    }
    if($soluong>0) {
        echo '<form method = "post" action ="">';
                for ($i = 0; $i <= $soluong - 1; $i++) {
                echo "<ul style='margin-top: 20px'>";
                echo "<li class='nuoc'>";
                echo '<input type="text" name="name[]" style = "width: 200px;height: 40px;font-size: 20px;" placeholder = "Nước">';
                echo "</li>";
                echo "<li class='gia_tri'>";
                echo '<input type="number" name="value[]" style = "width: 200px;height: 40px;font-size: 20px;" placeholder = "Giá trị">';
                echo "</li>";
                echo "</ul>";
            }
            echo '<input  type="submit" style="margin-top: 20px;height: 40px;width:100px;background-color: white; border: 1px solid #dddddd; clear: both;float: left" value="vẽ đồ thị"/>';
        echo '</form>';
    }
    elseif($soluong<0){
        echo 'Bạn nhập sai giá trị';
    }
    if(isset($_POST['name']) && isset($_POST['value'])) {
        $names = $_POST['name'];
        $values = $_POST['value'];
        echo '<table border="1" width="500" height="auto">';
            for($i=0;$i<sizeof($names);$i++) {
                if ($values[$i] < 0 || $values[$i] >= 100) {
                    echo 'Bạn nhập sai';
                }
                else{
                        echo '<tr>';
                        echo '<td style="width: 50px;height: 40px;">';
                        echo $names[$i];
                        echo '</td>';
                        echo '<td>';
                        echo '<div style="border: 1px solid red;height: 15px;width: ' . $values[$i] . '%;background-color: red;float: left">';
                        echo '</div>';
                        echo $values[$i];
                        echo '%';
                        echo '</td>';
                        echo '</tr>';
                    }
                }
        echo '</table>';
    }
?>
</body>
</html>