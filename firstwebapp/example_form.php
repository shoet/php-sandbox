<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Example Form</title>
    <link rel="stylesheet" href="static/css/style.css" />
  </head>
  <body>
    <h1>入力フォーム</h1>
    <form method="POST" action="example_form_submit.php">
      <div>
        <span>name</span>
        <input type="text" name="name" placeholder="Name" />
      </div>
      <div>
        <span>email</span>
        <input type="text" name="email" placeholder="Email" />
      </div>
      <div>
        <span>password</span>
        <input type="password" name="password" placeholder="Password" />
      </div>
      <div>
        <button type="submit">送信</button>
      </div>
    </form>
  </body>
</html>
