<?php
    session_start();#將SESSION函式開啟
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;#使用isset判斷函式 若不符合 counter數值=1
    else
        $_SESSION["counter"]++;#若符合 則counter+1

    echo "counter=".$_SESSION["counter"];#輸出字串counter+變數session中的counter
    echo "<br><a href=reset_counter.php>重置counter</a>";#換行輸出超連結 連結目的地為reset_counter.php 顯示為重置counter
?>