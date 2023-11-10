<!DOCTYPE html>
<html>
    <head>
        <title>Device Page</title>
    </head>
    <body>
        <?php
        require_once 'audio_io.php';
        $audioIo = new AudioIO("audio_io_1");
        $deviceId = ShowDevice($audioIo);
        echo "<p>$deviceId</p>";
        ?>
    </body>
</html>
