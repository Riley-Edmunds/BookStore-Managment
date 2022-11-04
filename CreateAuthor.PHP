<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Login</title>
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
                <form action="Processing.php" method="POST">
                    <span class="input-group-addon" id="sizing-addon2">Author Name:</span>
                    <input type="username" is="username" name="AuthorName" class="form-control" placeholder="AuthorName" aria-describedby="sizing-addon2">

                    <button type="submit" name="submit" class="btn btn-default" value="submit" onclick="window.location.href='http://localhost/CS351DB/Home.HTML';">Submit</button>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>

<?php

?>