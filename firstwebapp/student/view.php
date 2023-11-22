<?php

function show_students(array $students)
{
    // TODO: リンク
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
        $href = "./detail.php?id={$s->get_id()}";
        $row = "
            <tr>
                <td>{$s->get_id()}</td>
                <td>
                    <a href={$href}>
                        {$s->get_name()}
                    </a>
                </td>
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
