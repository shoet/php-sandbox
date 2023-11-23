<!DOCTYPE html>
<html>
    <?php
        require dirname(__FILE__) . "/../meta/meta.php";
        show_head();
    ?>
    <body>
        <h1>追加</h1>
        <?php
            require dirname(__FILE__) . "/../components/student_form.php";
            show_student_form(
                function() { echo "hoge"; },
            );
        ?>
    </body>
</html>
