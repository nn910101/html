<?php 
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234"))
        echo "Welcome";
        #偵測login.html中id欄位中 若輸入的字串為john, pwd為john1234, 則輸出Welcome
    else
        echo "fail login";
        #若未達成上述條件 則輸出fail login
?>
