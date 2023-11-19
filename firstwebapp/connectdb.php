<!DOCTYPE html>
<html>
    <head>
        <title>hoge</title>
    </head>
    <body>
        <?php try {
            $dsn = "mysql:host=127.0.0.1;port=1234;dbname=school";
            $db = new PDO($dsn, "root", "secret");
            $query = "SELECT * FROM student;";
            $stmt = $db->prepare($query);
            $res = $stmt->execute();
            if ($res) {
                $all = $stmt->fetchAll();
                foreach($all as $value) {
                    echo "<p>";
                    echo $value["id"];
                    echo "&nbsp;" . $value["name"];
                    echo "</p>";
                }
            }
        } catch(PDOException $e) {
            echo "failed db execution";
            echo $e->getMessage();
        }
        ?>
    </body>
</html>
