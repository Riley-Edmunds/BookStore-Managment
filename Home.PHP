<?php
// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.html');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">CS351</a>
          </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
          <div class="input-group">
            <button type="button" class="btn btn-default" onclick="window.location.href='http://localhost/CS351DB/CreateAuthor.PHP';">CreateAuthor</button>
          </div>
          <div class="input-group">
            <button type="button" class="btn btn-default" onclick="window.location.href='http://localhost/CS351DB/UpdateCustomer.PHP';">UpdateCustomer</button>
          </div>
          <div class="input-group">
            <button type="button" class="btn btn-default" onclick="window.location.href='http://localhost/CS351DB/BookReport.PHP';">BookReport</button>
          </div>
          <div class="input-group">
            <button type="button" class="btn btn-default" onclick="window.location.href='http://localhost/CS351DB/AuthorReport.PHP';">AuthorReport</button>
          </div>
          <div class="input-group">
            <form method='post' action="">
              <button type="submit" value="Logout" name="but_logout" class="btn btn-default">Log Out</button>
            </form>
          </div>
        </div>
    </div>
  </body>
</html>