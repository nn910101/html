<?php
    session_start();#將SESSION函式開啟
    unset($_SESSION["id"]);#重置變數session中的ID
    echo "登出成功....";#輸出登出成功....
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";#延遲3秒 將頁面導向至login.html

?>