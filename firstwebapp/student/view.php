<?php

function show_students(array $students)
{
    echo "<table>";
    echo <<<EOF
    <thead>
        <tr>
            <th>学生番号</th>
            <th>名前</th>
            <th>学年</th>
        </tr>
    </thead>
    EOF;

    $rows = [];
    foreach ($students as $s) {
        $row = "
            <tr>
              <td>{$s->get_id()}</td>
              <td>{$s->get_name()}</td>
              <td>{$s->get_grade()}</td>
            </tr>
        ";
        array_push($rows, $row);
    }
    $rows_str = implode("\n", $rows);

    echo "<tbody>";
    echo $rows_str;
    echo "</tbody>";

    echo "</table>";
}
