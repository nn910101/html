<?php
    session_start();#將SESSION函式開啟
    unset($_SESSION["counter"]);#重置變數中session中的counter數值
    echo "counter重置成功....";#輸出counter重置成功....
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";#將頁面導向至counter.php 延遲2秒

?>