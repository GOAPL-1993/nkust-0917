<?php require 'includes/config.php'; ?>
<!doctype html>
<html>

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>
  <div class='container'>
    <div class="jumbotron">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    </div>
    <?php
    include "includes/menu.php";
    echo "<div class='row'>";
    $sql = "SELECT * FROM product";
    //以下執行SQL查詢指令，並把結果傳回給$result變數
    $result = $conn->query($sql);
    if ($user_type == NULL) {
      while ($row = $result->fetch_assoc()) {
        $description = $row["description"];
        $name = $row["name"];
        $photo = $row["photo"];
        echo "<div class='col-md-3 col-sm-6 col-xs-12'>";
        echo "<div class='card'>";
        echo "<img src='$photo' class='card-img-top' alt='...''>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>$name</h5>";
        echo  "<p class='card-text'>$description</p>";
        echo "<a href='#' class='btn btn-primary'>Go somewhere</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }
    } else {
      echo "0 results"; // 如果資料表中沒有記錄，要顯示的內容
    }
    echo "</div>";
    ?>

    <title>Hello, world!</title>
  </div>
  </head>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>