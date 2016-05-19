<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bai 5</title>

    <style type="text/css">
        body {
            text-align: center;
        }
    </style>


</head>
<body>
<form method="POST" action="tam-giac-2.php">
    <input type="text" style="width: 300px;height: 40px; font-size: 20px" name="nhap">
    <button style=" background-color: #1ca8c3;margin-left:20px;width: 100px;height: 40px; color: white">Vẽ tam giác</button>
</form>
<br>
<?php
if(isset($_POST)) {
    $nhap = 0;
    if (isset($_POST['nhap'])) {
        $nhap = $_POST['nhap'];
    }
    if (is_nan($nhap) || $nhap < 0||(int)$nhap != floatval($nhap)) {
        echo "Bạn cần nhập vào 1 số nguyên";
    } else {
        for ($i = 1; $i <= $nhap; $i++) {
            $t = $i / 2;
            for ($j = $i; $j > $t; $j--) {
                $x = $j % 10;
                echo "$x";
            }
            if ($i % 2 == 1)
                $j += 2;

            else
                $j++;
            while ($j <= $i) {
                $x = $j % 10;
                echo "$x";
                $j++;
            }
            ?>
            <br>
            <?php
        }
    }
}
?>

</body>
</html>