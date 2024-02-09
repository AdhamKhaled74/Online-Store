<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <style>
        h3 {
            font-family: 'Manrope', sans-serif;
            font-weight: bold;
            margin-top: 35px;
        }

        .card {
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .card img {
            width: 100%;
            height: 200px;
        }

        main {
            width: 60%;
        }

        * {
            font-family: 'Manrope', sans-serif;
            font-weight: bold;
        }
        .navbar-brand{
            margin-left: 20px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="card.php">My Cart🛒 </a>
    </nav>
    <center>
        <h3> All Available Products </h3>
    </center>
    <?php
    include("config.php");
    $result = mysqli_query($conn, "SELECT * FROM store");
    while ($row = mysqli_fetch_array($result)) {
        echo "
      <center>
            <main>
     <div class='card' style='width: 18rem;'>
        <img src='$row[image]' class='card-img-top'>
            <div class='card-body'>
              <h5 class='card-name'>$row[name]</h5>
              <p class='card-price'>$row[price]</p>
              <div class='d-flex g-3 justify-content-around ' >
              <a href='val.php? id=$row[id]' class='btn btn-success'> Add to cart </a>
              </div>
            </div>
     </div>
     </main>
      </center>
      ";
    }
    ?>
</body>

</html>