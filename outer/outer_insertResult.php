<?php
    $con = mysqli_connect("localhost", "projectUser", "1234", "clothes") or die("MySQL 접속 실패!!");
    
    $name = $_POST["name"];
    $color = (isset($_POST["color"]) && $_POST["color"]) ? $_POST["color"] : NULL;
    $price = (isset($_POST["price"]) && $_POST["price"]) ? $_POST["price"] : 'NULL';
    $date = date("Y-m-j");
    $preference = (isset($_POST["preference"]) && $_POST["preference"]) ? $_POST["preference"] : 'NULL';
    $length = (isset($_POST["length"]) && $_POST["length"]) ? $_POST["length"] : 'NULL';
    $shoulder_width = (isset($_POST["shoulder_width"]) && $_POST["shoulder_width"]) ? $_POST["shoulder_width"] : 'NULL';
    $bust_width = (isset($_POST["bust_width"]) && $_POST["bust_width"]) ? $_POST["bust_width"] : 'NULL';
    $waist_width = (isset($_POST["waist_width"]) && $_POST["waist_width"]) ? $_POST["waist_width"] : 'NULL';
    $bottom_width = (isset($_POST["bottom_width"]) && $_POST["bottom_width"]) ? $_POST["bottom_width"] : 'NULL';
    $armhole = (isset($_POST["armhole"]) && $_POST["armhole"]) ? $_POST["armhole"] : 'NULL';
    $sleeve_length = (isset($_POST["sleeve_length"]) && $_POST["sleeve_length"]) ? $_POST["sleeve_length"] : 'NULL';
    $sleeve_width = (isset($_POST["sleeve_width"]) && $_POST["sleeve_width"]) ? $_POST["sleeve_width"] : 'NULL';

    $sql = "insert into outerwear values (
        '".$name."', '".$color."', ".$price.", '".$date."', ".$preference.",
        ".$length.", ".$shoulder_width.", ".$bust_width.", ".$waist_width.", ".$bottom_width.", ".$armhole.", ".$sleeve_length.", ".$sleeve_width."
        )";

    $ret = mysqli_query($con, $sql);

    echo "<p id='title'>겉옷 추가</p>";
    if($ret) {
        echo "<div id='result'>";
        echo "데이터가 성공적으로 입력되었습니다.";
        echo "</div>";
    }
    else {
        echo "<div id='result'>";
        echo "데이터 입력 실패!!"."<br>";
        echo "실패 원인: ".mysqli_error($con);
        echo "</div>";
    }

    mysqli_close($con);

    echo "<div id='result'>";
    echo "<br><br> <a href='outer_select.php'>목록으로</a>";
    echo "</div>";
?>

<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
        
        <style>
            a {
                color: black;
                text-align: center;
                text-decoration: none;
                margin: 5px;
            }
            #title {
                font-family: 'Jua', sans-serif;
                font-size: 70px;
                text-align: center;
                margin: 50px;
            }
            #result {
                text-align: center;
            }
        </style>
    </head>
</html>