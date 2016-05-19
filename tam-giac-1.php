<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<script type="text/javascript">
    function ve() {
        var HTML = "";
        var x = document.getElementById("nhap").value;
        if (isNaN(x) || parseInt(x) != parseFloat(x)|| eval(x)<0) {
            alert("Ban can nhap vao mot so nguyen duong");
            return false;
        }
        else {
            for (n = 1; n <= x; n++) {
                for (m = n; m >= 1; m--) {
                    HTML += m % 10 + " ";
                }
                HTML += "<br>";
            }
        }
        document.getElementById("tamgiac").innerHTML = HTML;
    }
</script>
    <form method="POST" action="tam-giac-1.php">
        <input type="text" style="width: 300px;height: 40px; font-size: 20px" name="nhap">
        <button style=" background-color: #1ca8c3;margin-left:20px;width: 100px;height: 40px; color: white" onclick="ve()">Vẽ tam giác</button>
    </form>
    <?php
            if(isset($_POST)) {
            $nhap = 0;
            if (isset($_POST['nhap'])) {
                $nhap = $_POST['nhap'];
            }
            if (is_nan($nhap)|| $nhap < 0||(int)$nhap != floatval($nhap)) {
                echo "Bạn cần nhập vào 1 số nguyên";
            }
            else{
                for($n=1;$n<=$nhap;$n++){
                    for ($m = $n; $m >= 1; $m--) {
                        $x = $m%10;
                        echo "$x";
                    }
                    ?>
                    <br>
                    <?php

                }
            }
        }
?>

    <img id=" logo" src="logo.png" style="width: 33px;height: 33px; margin:20px 0 0 140px "/>
</body>
</html>