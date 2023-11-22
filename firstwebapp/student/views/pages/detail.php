<!DOCTYPE html>
<html>
    <?php
        require dirname(__FILE__) . "/../meta/meta.php";
        show_head();
    ?>
    <body>
        <h1>選択情報</h1>
        <?php
            require dirname(__FILE__) . "/../../view.php";
            require dirname(__FILE__) . "/../../common/dbmanager.php";
            $dbm = new DBManager();
            if (!isset($_GET["id"])) {
                echo "<p>対象の学生が見つかりません。</p>";
            } else {
                $id = $_GET["id"];
                $students = $dbm->get_student($id);
                show_students($students);
            }
        ?>
        <p>
            <a href="#">更新</a>
        </p>
        <p>
            <a href="#">削除</a>
        </p>
        <p>
            <a href="list.php">一覧に戻る</a>
        </p>
    </body>
</html>
