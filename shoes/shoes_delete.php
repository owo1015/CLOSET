<?php 
    $con = mysqli_connect("localhost", "projectUser", "1234", "clothes") or die("MySQL 접속 실패!!");

    $sql = "select * from shoes where name='".$_GET['name']."'";

    $ret = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($ret);
    $name = $row['name'];
    $color = $row["color"];
    $price = $row["price"];
    $date = $row["date"];
    $preference = $row["preference"];
    $size = $row["size"];
    $width = $row["width"];
    $height = $row["height"];
    $heel_height = $row["heel_height"];
    
    echo "<p id='title'>'$name' 정보 삭제</p>"
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">

        <style>
            p {
                font-family: 'Jua', sans-serif;
                font-size: 25px;
                text-align: center;
                margin: 10px;
            }
            #title {
                font-size: 70px;
                margin: 50px;
            }
            #delete{
                text-align: center;
                background-color: #E6E6FA;
                border-radius: 15px;
                margin-top: 20px;
                margin-left: 30%;
                margin-right: 30%;
                padding: 25px;
            }
            #delete input {
                margin: 5px;
            }
            #submit {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <form method="post" action="shoes_deleteResult.php">
            <div id='delete'>
                상품명&nbsp; <input type="text" name="name" value=<?php echo $name ?>> <br>
                색 상&nbsp; <input type="text" name="color" value=<?php echo $color ?>> <br>
                가 격&nbsp; <input type="text" name="price" value=<?php echo $price ?>> <br>
                구매날짜&nbsp; <input type="text" name="date" value=<?php echo $date ?>> <br>
                선호도&nbsp; <input type="text" name="preference" value=<?php echo $preference ?>> <br><br>
                사이즈&nbsp; <input type="text" name="size" value=<?php echo $size ?>> <br>
                볼넓이&nbsp; <input type="text" name="width" value=<?php echo $width ?>> <br>
                총높이&nbsp; <input type="text" name="height" value=<?php echo $height ?>> <br>
                굽높이&nbsp; <input type="text" name="heel_height" value=<?php echo $heel_height ?>> <br><br>
                <p>삭제하시겠습니까?</p>
            </div>
            <br><br>
            <div id='submit'>
                <input type="submit" value="삭제">
            </div>
        </form>
    </body>
</html>