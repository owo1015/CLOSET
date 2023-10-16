<?php
    $con = mysqli_connect("localhost", "projectUser", "1234", "clothes") or die("MySQL 접속 실패!!");
    
    $sql = "SELECT * FROM dress";

    $sortby = isset($_GET['sort']) ? $_GET['sort'] : 'name';
    if($sortby == 'name') {
        $sql .= " order by name";
    }
    elseif($sortby == 'color') {
        $sql .= " order by color";
    }
    elseif($sortby == 'price') {
        $sql .= " order by price is null asc, price asc";
    }
    elseif($sortby == 'date') {
        $sql .= " order by date";
    }
    elseif($sortby == 'preference') {
        $sql .= " order by preference is null asc, preference asc";
    }

    $ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
    }
    else {
        echo "clothes 데이터 검색 실패!!"."<br>";
        echo "실패 원인: ".mysqli_error($con);
        exit();
    }

    echo "<div id='menu'>";
    echo "<A HREF='../top/top_select.php'>상의</A>";
    echo "<A HREF='../outer/outer_select.php'>겉옷</A>";
    echo "<A HREF='../bottom/bottom_select.php'>하의</A>";
    echo "<A HREF='dress_select.php'><b>원피스</b></A>";
    echo "<A HREF='../shoes/shoes_select.php'>신발</A>";
    echo "</div>";

    echo "<br><br> <a href='dress_insert.php' id='insert'>원피스 추가</a> <br><br>";

    echo "<div class='search'>";
    echo "<form action='dress_search.php' method='get'>";
    echo "<select name='category'>";
    echo "<option value='0'>선택</option>";
    echo "<option value='name'>상품명</option>";
    echo "<option value='color'>색상</option>";
    echo "<option value='price'>가격</option>";
    echo "<option value='date'>구매날짜</option>";
    echo "<option value='preference'>선호도</option>";
    echo "</select>";
    echo "<input type='text' name='search' size='20' required='required'>";
    echo "<button>검색</botton>";
    echo "</form>";
    echo "</div>";

    echo "<table border-top=1>";
    echo "<tr>";
    echo "<th><a href='dress_select.php?sort=name'>상품명</th> <th><a href='dress_select.php?sort=color'>색상</th> <th><a href='dress_select.php?sort=price'>가격</th>";
    echo "<th>총장</th> <th>어깨너비</th> <th>가슴너비</th> <th>허리너비</th> <th>밑단너비</th> <th>암홀</th> <th>소매길이</th> <th>소매너비</th>";
    echo "<th><a href='dress_select.php?sort=date'>구매날짜</th> <th><a href='dress_select.php?sort=preference'>선호도</th> <th>수정</th> <th>삭제</th>";
    echo "</tr>";

    while($row = mysqli_fetch_array($ret)) {
        echo "<tr>";
        echo "<td>", $row['name'], "</td>";
        echo "<td>", $row['color'], "</td>";
        echo "<td>", $row['price'], "</td>";
        echo "<td>", $row['length'], "</td>";
        echo "<td>", $row['shoulder_width'], "</td>";
        echo "<td>", $row['bust_width'], "</td>";
        echo "<td>", $row['waist_width'], "</td>";
        echo "<td>", $row['bottom_width'], "</td>";
        echo "<td>", $row['armhole'], "</td>";
        echo "<td>", $row['sleeve_length'], "</td>";
        echo "<td>", $row['sleeve_width'], "</td>";
        echo "<td>", $row['date'], "</td>";
        echo "<td>", $row['preference'], "</td>";
        echo "<TD id='update'>", "<A HREF='dress_update.php?name=", $row['name'], "'>수정</A></TD>";
        echo "<TD id='delete'>", "<A HREF='dress_delete.php?name=", $row['name'], "'>삭제</A></TD>";
    }

    mysqli_close($con);
    echo "</table>";

    echo "<br><a href='../index.html'>메인 화면</a>";
?>

<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
        
        <style>
            a {
                color: black;
                text-decoration: none;
                margin: 5px;
            }
            #menu {
                font-family: 'Jua', sans-serif;
                font-size: 30px;
                text-align: center;
                margin: 50px;
            }
            #menu a {
                margin: 35px;
            }
            table {
                width: 100%;
                border-top: 1px solid #444444;
                border-collapse: collapse;
            }
            th, td {
                border-bottom: 1px solid #444444;
                padding: 10px;
            }
            th {
                text-align: center;
                background-color: #E6E6FA;
            }
            td {
                text-align: center;
            }
            #insert, #update, #delete {
                font-weight: bold;
                padding: 0px;
            }
        </style>
    </head>
</html>