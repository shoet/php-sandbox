<!DOCUTYPE html>
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="static/css/style.css" />
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>名前</th>
          <th>年齢</th>
        </tr>
      </thead>
      <tr>
        <?php
        $data = [
          [ "name"=>"Taro", "age"=>20 ],
          [ "name"=>"Taro", "age"=>20 ]
        ];
        foreach ($data as $d) {
          echo <<<EOF
            <tr>
              <td>${d["name"]}</td>
              <td>${d["age"]}</td>
            </tr>
          EOF;
        }
        ?>
      </tbody>
    </table>
  </body>
</html>
