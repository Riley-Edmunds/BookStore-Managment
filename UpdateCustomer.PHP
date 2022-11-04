<!doctype html>


<html lang="en">
<?php
$conn=mysqli_connect("localhost","root","","zion");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$FirstName='';
$LastName = '';
$NewAddress='';

$FirstName = $_POST['FirstName'] ?? '';
$LastName = $_POST['LastName'] ?? '';
$NewAddress = $_POST['NewAddress'] ?? '';

if(isset($_POST['submitChange'])) {
  $sql = "SELECT * FROM customer WHERE LastName='$LastName' AND FirstName = '$FirstName'";
  $result = mysqli_query($conn,$sql);

  if($result) {
    $sql2 = "UPDATE `customer` SET `Address` ='$NewAddress' WHERE LastName='$LastName' AND FirstName = '$FirstName'";
    $result2 = mysqli_query($conn,$sql2);
    header("Location: Home.PHP");
  }
  
}
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>UpdateCustomer</title>
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
                <form action="UpdateCustomer.php" method="POST">
                    <!--This could be changed to ID so it would always be unique-->
                    <span class="input-group-addon" id="sizing-addon2">First:</span>
                    <input type="text"  name="FirstName" class="form-control" placeholder="First Name"  aria-describedby="sizing-addon2">
                    <span class="input-group-addon" id="sizing-addon2">Last Name:</span>
                    <input type="text"  name="LastName" class="form-control" placeholder="Last Name"  aria-describedby="sizing-addon2">

                    <span class="input-group-addon" id="sizing-addon2">New Address:</span>
                    <input type="text" name="NewAddress" class="form-control" placeholder="New Address" aria-describedby="sizing-addon2">
                  
                  
                    <button type="submit" name="submitChange" class="btn btn-default" value="submitChange" >Submit Changes</button>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>
