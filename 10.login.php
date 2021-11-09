<?php
   #建立資料庫連結 位址為localhost 帳號為root 沒有密碼 與mydb建立連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #從資料庫查詢資料 將user中所有資料選取起來
   $result=mysqli_query($conn, "select * from user");
   #從查詢出來的資料一筆一筆抓出來 並儲存在變數row裡面
   $login=FALSE;#將變數login設定為false
   while ($row=mysqli_fetch_array($result))#設定while迴圈 條件為若變數ROW裡還有資料
   {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;#若login.html輸入ID及PWD欄位符合從資料庫抓取出來的資料 則將變數login設定為true
     }
   } 
   if ($login==TRUE)#若變數login=true
    {
    session_start();#將SESSION函式開啟
    $_SESSION["id"]=$_POST["id"];#若變數session中的ID等於login.html中ID欄位輸入的字串
    echo "welcome!!";#輸出welcome!!
    echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";#延遲3秒 將頁面導向至bulletin.php
    }

  else{
    echo "id/pwd wrong!!";#否則輸出id/pwd wrong!!
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";#延遲3秒 將頁面導向至login.html
  }
?>