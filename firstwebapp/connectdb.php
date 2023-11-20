<!DOCTYPE html>
<html>
    <head>
        <title>hoge</title>
    </head>
    <body>
        <?php 
        $host = $_ENV["DB_HOST"];
        $port = $_ENV["DB_PORT"];
        $dbname = $_ENV["DB_DATABASE"];
        $dbuser = $_ENV["DB_USERNAME"];
        $db_pass = $_ENV["DB_PASSWORD"];
        try {
            $dsn = "mysql:host={$host};port={$host};dbname={$dbname};";
            $db = new PDO($dsn, $dbuser, $db_pass);
            $query = "SELECT * FROM student;";
            $stmt = $db->prepare($query);
            $res = $stmt->execute();
            if ($res) {
                $all = $stmt->fetchAll();
                foreach($all as $value) {
                    echo "<p>";
                    echo $value["id"] . "&nbsp;" . $value["name"];
                    echo "</p>";
                }
            }
            $db = null;
        } catch(PDOException $e) {
            echo "failed db execution";
            echo $e->getMessage();
        }
        ?>
    </body>
</html>
