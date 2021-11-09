<?php
   #建立資料庫連結 位址為localhost 帳號為root 沒有密碼 與mydb建立連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #從資料庫查詢資料 將user中所有資料選取起來
   $result=mysqli_query($conn, "select * from user");
   #將變數login設定為false
   $login=FALSE;
   while ($row=mysqli_fetch_array($result))#設定while迴圈 條件為若變數ROW裡還有資料
   {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"]))
       $login=TRUE;#若login.html輸入ID及PWD欄位符合從資料庫抓取出來的資料 則將變數login設定為true
     }
   } 
   if ($login==TRUE)
     echo "welcome!!";#若變數login為true 輸出welcome
  else
     echo "id/pwd wrong!!";#否則輸出id/pwd wrong!!
?>