<?php
    $con = mysqli_connect("localhost", "projectUser", "1234", "clothes") or die("MySQL 접속 실패!!");

    $name = $_POST["name"];
    $color = (isset($_POST["color"]) && $_POST["color"]) ? $_POST["color"] : NULL;
    $price = (isset($_POST["price"]) && $_POST["price"]) ? $_POST["price"] : 'NULL';
    $date = $_POST["date"];
    $preference = (isset($_POST["preference"]) && $_POST["preference"]) ? $_POST["preference"] : 'NULL';
    $length = (isset($_POST["length"]) && $_POST["length"]) ? $_POST["length"] : 'NULL';
    $waist_width = (isset($_POST["waist_width"]) && $_POST["waist_width"]) ? $_POST["waist_width"] : 'NULL';
    $hip_width = (isset($_POST["hip_width"]) && $_POST["hip_width"]) ? $_POST["hip_width"] : 'NULL';
    $thigh_width = (isset($_POST["thigh_width"]) && $_POST["thigh_width"]) ? $_POST["thigh_width"] : 'NULL';
    $bottom_width = (isset($_POST["bottom_width"]) && $_POST["bottom_width"]) ? $_POST["bottom_width"] : 'NULL';
    $rise = (isset($_POST["rise"]) && $_POST["rise"]) ? $_POST["rise"] : 'NULL';
    
    $sql = "update bottom set
        name='".$name."', color='".$color."', price=".$price.", date='".$date."', preference=".$preference.",
        length=".$length.", waist_width=".$waist_width.", hip_width=".$hip_width.", thigh_width=".$thigh_width.", bottom_width=".$bottom_width.", rise=".$rise."
    WHERE name='".$name."'";

    $ret = mysqli_query($con, $sql);

    echo "<p id='title'>'$name' 정보 수정</p>";
    if($ret) { 
        echo "<div id='result'>";
        echo "데이터가 성공적으로 수정되었습니다.";
        echo "</div>";
    }
    else { 
        echo "<div id='result'>";
        echo "데이터 수정 실패!!"."<br>";
        echo "실패 원인: ".mysqli_error($con);
        echo "</div>";
    } 
    mysqli_close($con);

    echo "<div id='result'>";
    echo "<br><br> <a href='bottom_select.php'>목록으로</a>";
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