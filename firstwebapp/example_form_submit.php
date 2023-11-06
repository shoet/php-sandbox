<!DOCUTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Example Form</title>
    <link rel="stylesheet" href="static/css/style.css" />
  </head>
  <body>
    <h1>確認</h1>
      <div>
        <span>name: </span>
        <span><?php echo $_POST["name"] ?></span>
      </div>
      <div>
        <span>email: </span>
        <span><?php echo $_POST["email"] ?></span>
      </div>
      <div>
        <span>password: </span>
        <span><?php echo $_POST["password"] ?></span>
      </div>
  </body>
</html>
