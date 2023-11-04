<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="static/css/style.css" />
  </head>
  <body>
    <h1>TODO List</h1>
    <p>hoge</p>
    <p><?php echo "from php"; ?></p>

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
