<html>
<head>
    <meta charset = "UTF-8">
    <title>Calendar</title>
    <style type="text/css">
        *{
            font-size: 25px;
            font-family: Roboto;
        }
        body{
            /*background: url("logo.png");
            background-color: black;
            padding-top: 500px;*/

        }
        #calendar {
            border-radius: 18px;
            width: 610px;
            margin-top: 100px;
            margin-left: 500px;
            height: 450px;
            padding: 0;
            display: block;
        }
        #top{
            box-shadow: 0px 0px 1px 0px black;
            box-sizing: border-box;
            background-color: #f95050;
            width: 600px;
            height: 72px;
            margin: 0px;
            border-top-left-radius: 18px;
            border-top-right-radius: 18px;
            line-height: 72px;
            font-size: 45px;
            color: white;
            position: relative;
            text-align: center;
        }
        .calendar1{
            padding: 1px;
            width: 600px;
            margin-left: 500px;
            height: 61px;
            border-radius: 18px;
            background-color: white;
            box-shadow: 0px 0px 1px 0px black;
            margin-top: 100px;

        }
        .ngay_ngoai{
            box-shadow: 0px 0px 1px 0px #bdbdbd ;
            background-color: #ffffff;
            background: no-repeat;
            text-align: center;
            width: 14.2857%;
            line-height: 72px;
            height: 72px;
            font-weight: bold;
        }
        .ngay_a{
            box-shadow: 0px 0px 1px 0px #bdbdbd ;
            background-color: #ffffff;
            background: no-repeat;
            text-align: center;
            width: 14.2857%;
            line-height: 72px;
            height: 72px;
            font-weight: bold;
        }
        .calendar1 div div{
            width: 85px;
            text-align: center;
            line-height: 61px;
            color: #ff0000;
            border-radius: 18px ;
        }
        #calendar div, .calendar1 div{
            display: inline-block;
        }
        .today {
            color: white;
            font-weight: bold;
            box-shadow: 0px 0px 1px 0px #bdbdbd ;
            background-color: #ffffff;
            background: no-repeat;
            text-align: center;
            width: 14.2857%;
            line-height: 72px;
            height: 72px;
        }
        .ngay_ngoai {
            color: #bdbdbd;
            font-weight: bold;
        }
        .thu_tuan div{
            border: none;
        }
        .tuan{
            width: 600px;
        }
        .tuan:last-child div:first-child{
            border-bottom-left-radius: 18px;
        }
        .tuan:last-child div:last-child{
            border-bottom-right-radius: 18px;
        }
        .tuan:last-child{
            box-shadow: 0px 5px 1px 0px #bdbdbd;
            border-radius: 18px;
        }
        #today{
            background-color: #ff0000;
            padding: 20px;
            border-radius: 50%;
        }
        button{
            border: none;
            background-color: transparent;
            top: 20px;
            color: white;
        }
        button:focus{
            outline: none;
        }
        button:hover{
            -webkit-transform: scale(1.2);
        }
    </style>
</head>
<body>
<?php
    $monthnames = array("January","Februrary","March","April","May", "June","July","August","September","October","November","Decemeber");
    $monthDays = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $now = getdate();
    echo '<div id = "main">';
    echo '<div id="calendar">';
    echo '<div id="top">';
    echo $now["mday"];
    echo " ";
    echo $monthnames[$now["mon"]];
    echo " ";
    echo $now["year"];
    echo '</div>';
    echo '<div id="calendar_day"></div>';
    $week=0;
    $total=$monthDays[$now["mon"]];
            for($i=0;$i<5;$i++) {
                if ($week == 0) {
                    echo '<div class="tuan">';
                    $ngay_truoc = $monthDays[$now["mon"] - 1] - 6 + $i;
                    if ($i % 2 == 0) {
                        echo '<div class= "ngay_ngoai" style="background-color: white">' . $ngay_truoc . '</div>';
                    }
                if ($i % 2 == 1) {
                    echo'<div class= "ngay_ngoai" style="background-color: #fcfcfc">' . $ngay_truoc . '</div>';
                }
                $week++;
            }
            if ($week != 0) {
                $ngay_truoc = $monthDays[$now["mon"] - 1] - 6 + $i+1;
                if ($i % 2 == 0) {
                    echo '<div class= "ngay_ngoai" style="background-color: white">' . $ngay_truoc . '</div>';
                }
                if ($i % 2 == 1) {
                    echo '<div class= "ngay_ngoai" style="background-color: #fcfcfc">' . $ngay_truoc . '</div>';
                }
                $week++;
            }
            if ($week == 7) {
                echo '</div>';
                $week = 0;
            }
        }
        for ($i = 1; $i <= $total; $i++) {
            if ($week == 0) {
                echo '<div class="tuan">';
            }
            if ($now["mday"] == $i) {
                if($i%2==0){
                    echo '<div class="today" style="background-color: white"><a id="today" >' . $i . '</a></div>';
                }
                if($i%2==1){
                    echo '<div class="today" style="background-color: #fcfcfc"><a id="today" >' . $i . '</a></div>';
                }
            }
            else {
                if($i%2==0) {
                    echo '<div class = "ngay_a"id="a_' . $i . '"style="background-color: white">' . $i . '</div>';
                }
                if($i%2==1) {
                    echo '<div class = "ngay_a" id="a_' . $i . '"style="background-color: #fcfcfc">' . $i . '</div>';
                }
            }
            $week++;
            if ($week == 7) {
                echo '</div>';
                $week = 0;
            }
        }
        for ($i = 1; $week != 0; $i++) {
            $ngay_truoc =  $i;
            if($i%2==1){
                echo '<div class= "ngay_ngoai" style="background-color: white">' . $ngay_truoc .'</div>';
            }
            if($i%2==0){
                echo '<div class= "ngay_ngoai" style="background-color: #fcfcfc">' . $ngay_truoc .'</div>';
            }            $week++;
            if ($week == 7) {
                echo '</div>';
                $week = 0;
            }
        }
    echo '</div>';
    echo '<div class = "calendar1">';
        echo '<div id="thu_tuan"><div>MO</div><div>TU</div><div>WE</div><div>TH</div><div>FR</div><div>SA</div><div>SU</div></div>';
    echo '</div>';
    echo '</div>';
?>
</body>
</html>