<?php
    error_reporting(0);#設置PHP的報錯級別
    $conn=mysqli_connect("localhost","root","", "mydb");#建立資料庫連結 位址為localhost 帳號為root 沒有密碼 與mydb建立連結
    $result=mysqli_query($conn, "select * from bulletin");#從資料庫查詢資料 將bulletin中所有資料選取起來
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";;#輸出欄位 佈告編號/佈告類別/標題/佈告內容/發布時間
    while ($row=mysqli_fetch_array($result))#設定while迴圈 條件為若變數ROW裡還有資料
    {
        echo "<tr><td>";#輸出欄位
        echo $row["bid"];#輸出從資料庫裡抓出來 名為bid類別的資料
        echo "</td><td>";#輸出欄位
        echo $row["type"];#輸出從資料庫裡抓出來 名為type類別的資料
        echo "</td><td>"; #輸出欄位
        echo $row["title"];#輸出從資料庫裡抓出來 名為title類別的資料
        echo "</td><td>";#輸出欄位
        echo $row["content"]; #輸出從資料庫裡抓出來 名為content類別的資料
        echo "</td><td>";#輸出欄位
        echo $row["time"];#輸出從資料庫裡抓出來 名為time類別的資料
        echo "</td></tr>";#輸出欄位
    }
    echo "</table>"#結束欄位規劃
?>
