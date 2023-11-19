<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>hoge</title>
    </head>
    <body>
        <?php
        $_SESSION["data"] = "PHP";
        echo "<p>session_id: " . session_id() . "</p>\n";
        echo "<p>session: " . $_SESSION["data"] . "</p>\n";
        ?>
    </body>
</html>


