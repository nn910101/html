<?php
    #建立資料庫連結 位址為localhost 帳號為root 沒有密碼 與mydb建立連結
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    #從資料庫查詢資料 將user中所有資料選取起來
    $result=mysqli_query($conn, "select * from user");
    #從查詢出來的資料一筆一筆抓出來 並儲存在變數row裡面
    $row=mysqli_fetch_array($result);

    echo $row["id"] . " " . $row["pwd"]; 
    echo $row["id"] . " " . $row["pwd"]; 
    #將儲存在變數row裡面的ID與PWD欄位輸出出來 總共輸出兩次
?>
