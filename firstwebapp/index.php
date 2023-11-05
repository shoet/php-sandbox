<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="static/css/style.css" />
  </head>
  <body>
    <h1>TODO List</h1>
    <p>hoge</p>
    <p><?php echo "from php"; ?></p>

    <?php
      $a = 1 + 3;
    echo <<<EOF
      <p>$a</p>
    EOF
    ?>

    <?php
    $first_name = "Taro";
    $last_name = "Tanaka";
    $birth_year = 1970;
    $birth_month = 1;
    $birth_day = 1;
    echo "
    <p>
      彼の名前は、${first_name}${last_name}です。</br>
      生年月日は、${birth_year}年${birth_month}月${birth_day}日です。
    </p>
    ";
    var_dump($birth_day);
    ?>

    <?php
    $water_temperature = 99;
    echo "<p>水の温度：${water_temperature}</p>";
    if ($water_temperature >= 100) {
      echo "<p>気体になりました。</p>";
    } else {
      echo "<p>水のままです。</p>";
    }
    ?>

    <?php
      $link = "http://example.com";
      echo "<p><a href=${link}>リンク</a></p>";
    ?>

    <?php
      for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
          $ans = $i * $j;
          $s = "${i} x ${j} = ${ans}";
          echo "${s}&nbsp";
        }
      }
    ?>

    <?php
      echo "<p>init</p>";
      $ar = [1,2,3];
      for ($i = 0; $i < count($ar); $i++) {
        echo "<p>${ar[$i]}</p>";
      }
      echo "<p>pop</p>";
      array_pop($ar);
      for ($i = 0; $i < count($ar); $i++) {
        echo "<p>${ar[$i]}</p>";
      }
      echo "<p>push 4</p>";
      array_push($ar, 4);
      for ($i = 0; $i < count($ar); $i++) {
        echo "<p>${ar[$i]}</p>";
      }
      echo "<p>shift</p>";
      array_shift($ar);
      for ($i = 0; $i < count($ar); $i++) {
        echo "<p>${ar[$i]}</p>";
      }
      // スライス
      echo "<p>slice</p>";
      echo "<p>before</p>";
      $new_ar = [1,2,3];
      for ($i = 0; $i < count($new_ar); $i++) {
        echo "<p>${new_ar[$i]}</p>";
      }
      echo "<p>after</p>";
      $new_ar = array_slice($new_ar, 1, 2);
      for ($i = 0; $i < count($new_ar); $i++) {
        echo "<p>{$new_ar[$i]}</p>";
      }

      echo "<p>merge</p>";
      $new_ar = array_merge($ar, $new_ar);
      for ($i = 0; $i < count($new_ar); $i++) {
        echo "<p>{$new_ar[$i]}</p>";
      }
    ?>

    <h2>TODO</h2>
    <?php
    echo <<<EOF
      <ul>
        <li>aaa</li>
        <li>bbb</li>
        <li>ccc</li>
      </ul>
    EOF;
    ?>

    <h2>INPROGRESS</h2>

    <?php
    echo <<<EOF
      <ul>
        <li>aaa</li>
        <li>bbb</li>
        <li>ccc</li>
      </ul>
    EOF;
    ?>

    <h2>DONE</h2>

    <?php
    echo <<<EOF
      <ul>
        <li>aaa</li>
        <li>bbb</li>
        <li>ccc</li>
      </ul>
    EOF;
    ?>
    
  </body>
</html>
