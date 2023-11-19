<!DOCTYPE html>
<html>
    <head>
        <title>hoge</title>
    </head>
    <body>
        <?php
        require_once 'numlist.php';
        $numList = new NumList(["Tokyo", "Osaka", "Nagoya"]);
        $numList->show();
        ?>
    </body>
</html>
