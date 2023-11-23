<?php

function show_student_form($action, Student $student = null)
{
    echo "<form method=post>";

    echo "<div>";
    echo "<span>名前</span>";
    echo "<input type=text name=student_id value=" . ($student ? $student->get_student_id() : "") . ">";
    echo "</div>";

    echo "<div>";
    echo "<span>学年</span>";
    echo "<select name=grade>";
    echo "<option value=1>1</option>";
    echo "<option value=2>2</option>";
    echo "<option value=3>3</option>";
    echo "</select>";
    echo "</div>";

    echo "<div>";
    echo "<button>" . ($student ? "更新" : "追加") . "</button>";
    echo "</div>";

    echo "</form>";
}

