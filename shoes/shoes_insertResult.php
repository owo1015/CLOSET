<?php
    $con = mysqli_connect("localhost", "projectUser", "1234", "clothes") or die("MySQL 접속 실패!!");
    
    $name = $_POST["name"];
    $color = (isset($_POST["color"]) && $_POST["color"]) ? $_POST["color"] : NULL;
    $price = (isset($_POST["price"]) && $_POST["price"]) ? $_POST["price"] : 'NULL';
    $date = date("Y-m-j");
    $preference = (isset($_POST["preference"]) && $_POST["preference"]) ? $_POST["preference"] : 'NULL';
    $size = (isset($_POST["size"]) && $_POST["size"]) ? $_POST["size"] : 'NULL';
    $width = (isset($_POST["width"]) && $_POST["width"]) ? $_POST["width"] : 'NULL';
    $height = (isset($_POST["height"]) && $_POST["height"]) ? $_POST["height"] : 'NULL';
    $heel_height = (isset($_POST["heel_height"]) && $_POST["heel_height"]) ? $_POST["heel_height"] : 'NULL';
    
    $sql = "insert into shoes values (
        '".$name."', '".$color."', ".$price.", '".$date."', ".$preference.",
        ".$size.", ".$width.", ".$height.", ".$heel_height."
        )";

    $ret = mysqli_query($con, $sql);

    echo "<p id='title'>신발 추가</p>";
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
    echo "<br><br> <a href='shoes_select.php'>목록으로</a>";
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