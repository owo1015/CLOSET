<?php 
    $con = mysqli_connect("localhost", "projectUser", "1234", "clothes") or die("MySQL 접속 실패!!");

    $sql = "select * from dress where name='".$_GET['name']."'";

    $ret = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($ret);
    $name = $row['name'];
    $color = $row["color"];
    $price = $row["price"];
    $date = $row["date"];
    $preference = $row["preference"];
    $length = $row["length"];
    $shoulder_width = $row["shoulder_width"];
    $bust_width = $row["bust_width"];
    $waist_width = $row["waist_width"];
    $bottom_width = $row["bottom_width"];
    $armhole = $row["armhole"];
    $sleeve_length = $row["sleeve_length"];
    $sleeve_width = $row["sleeve_width"];

    echo "<p id='title'>'$name' 정보 수정</p>";
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
            #update{
                text-align: center;
                background-color: #E6E6FA;
                border-radius: 15px;
                margin-top: 20px;
                margin-left: 30%;
                margin-right: 30%;
                padding: 25px;
            }
            #update input {
                margin: 5px;
            }
            #submit {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <form method="post" action="dress_updateResult.php">
            <div id='update'>
                상품명&nbsp; <input type="text" name="name" value=<?php echo $name ?>> <br>
                색 상&nbsp; <input type="text" name="color" value=<?php echo $color ?>> <br>
                가 격&nbsp; <input type="text" name="price" value=<?php echo $price ?>> <br>
                구매날짜&nbsp; <input type="text" name="date" value=<?php echo $date ?>> <br>
                선호도&nbsp; <input type="text" name="preference" value=<?php echo $preference ?>> <br><br>
                총 장&nbsp; <input type="text" name="length" value=<?php echo $length ?>> <br>
                어깨너비&nbsp; <input type="text" name="shoulder_width" value=<?php echo $shoulder_width ?>> <br>
                가슴너비&nbsp; <input type="text" name="bust_width" value=<?php echo $bust_width ?>> <br>
                허리너비&nbsp; <input type="text" name="waist_width" value=<?php echo $waist_width ?>> <br>
                밑단너비&nbsp; <input type="text" name="bottom_width" value=<?php echo $bottom_width ?>> <br>
                암 홀&nbsp; <input type="text" name="armhole" value=<?php echo $armhole ?>> <br>
                소매길이&nbsp; <input type="text" name="sleeve_length" value=<?php echo $sleeve_length ?>> <br>
                소매너비&nbsp; <input type="text" name="sleeve_width" value=<?php echo $sleeve_width ?>> <br><br>
            </div>
            <br><br>
            <div id='submit'>
                <input type="submit" value="저장">
            </div>
        </form>
    </body>
</html>