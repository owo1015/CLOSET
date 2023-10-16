<?php 
    $con = mysqli_connect("localhost", "projectUser", "1234", "clothes") or die("MySQL 접속 실패!!");

    $name = $_POST["name"];

    $sql = "delete from top where name='".$name."'";

    $ret = mysqli_query($con, $sql);
 
    echo "<p id='title'>'$name' 정보 삭제</p>";
    if($ret) { 
        echo "<div id='result'>";
        echo "데이터가 성공적으로 삭제되었습니다.";
        echo "</div>";
    }
    else { 
        echo "<div id='result'>";
        echo "데이터 삭제 실패!!"."<br>";
        echo "실패 원인: ".mysqli_error($con);
        echo "</div>";
    } 
    mysqli_close($con);

    echo "<div id='result'>";
    echo "<br><br> <a href='top_select.php'>목록으로</a>";
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