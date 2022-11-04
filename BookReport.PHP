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
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Quanity</th>
              <th scope="col">Sales Price</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn=mysqli_connect("localhost","root","","zion");
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT ID, Title from book";
            $result = $conn-> query($sql);
            //
            $sql2 = "SELECT BookID, UnitPrice, Quanity from sale";
            $result2 = $conn-> query($sql2);
            
            //"</td><td>". $row[$NumOfBooks].
            if($result-> num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["ID"] ."</td><td>". $row["Title"]."</td></tr>";
              }
              echo "</table>";
            }
            else {
              echo "No Results!";
            }

            $conn-> close();
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>