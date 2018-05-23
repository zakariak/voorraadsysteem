<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Toolsforever</title>
    <link rel="stylesheet" href="views/style/style.css">
  </head>
<body>
<div class="row">
  <div class="col-2">
    <div class="logo">
      logo
    </div>
  </div>

<div class="col-6">
<div class="">
  ToolsForever
</div>
</div>
  <div class="col-4">
    <div class="login">
      <?php if(!isset($loggedin)) { ?>
      <form class="" action="index.php?controller=Users&action=login" method="post">
        <label for="username">Username</label> <input type="text" name="username" value="karboub"> <br>
        <label for="password">Password-</label> <input type="password" name="password" value="karboub"><br>
        <input type="submit" name="Login" value="Login">
      </form>
    <?php } else { var_dump($loggedin); } ?>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-1">
    <ul>
      <li><a href="index.php?controller=pages&action=home">Home</a></li>
      <li><a href="index.php?controller=pages&action=home">About</a></li>
      <li><a href="index.php?controller=pages&action=home">Page</a></li>
    </ul>
  </div>
  <div class="col-11">
    Content
  </div>
</div>



</body>
