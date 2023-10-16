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
            #insert{
                text-align: center;
                background-color: #E6E6FA;
                border-radius: 15px;
                margin-top: 20px;
                margin-left: 30%;
                margin-right: 30%;
                padding: 25px;
            }
            #insert input {
                margin: 5px;
            }
            #submit {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <p id='title'>하의 추가</p>
        <form method="post" action="bottom_insertResult.php">
            <div id='insert'>
                상품명&nbsp; <input type="text" name="name"> <br>
                색 상&nbsp; <input type="text" name="color"> <br>
                가 격&nbsp; <input type="text" name="price"> <br>
                선호도&nbsp; <input type="text" name="preference"> <br><br>
                총 장&nbsp; <input type="text" name="length"> <br>
                허리너비&nbsp; <input type="text" name="waist_width"> <br>
                엉덩이너비&nbsp; <input type="text" name="hip_width"> <br>
                허벅지너비&nbsp; <input type="text" name="thigh_width"> <br>
                밑단너비&nbsp; <input type="text" name="bottom_width"> <br>
                밑 위&nbsp; <input type="text" name="rise"> <br><br>
                <p>(상품명은 필수 입력)</p>
            </div>
            <br><br>
            <div id='submit'>
                <input type="submit" value="저장">
            </div>
        </form>
    </body>
</html>