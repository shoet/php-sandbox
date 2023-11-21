<!DOCTYPE html>
<html>
    <?php
        require dirname(__FILE__) . "/../meta/meta.php";
        show_head();
    ?>
    <body>
        <h1>一覧</h1>
        <?php
            require dirname(__FILE__) . "/../../view.php";
            require dirname(__FILE__) . "/../../common/dbmanager.php";
            $dbm = new DBManager();
            $students = $dbm->get_all_students();
            show_students($students);
        ?>
    </body>
</html>
