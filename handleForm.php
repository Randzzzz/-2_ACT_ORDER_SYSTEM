<style>
  .container {
    font-family: Arial;
    border: 1px dotted;
  }

  #title {
    text-align: center;

  }

  .container1 {
    font-family: Arial;
    border: 1px dotted red;
  }
</style>

<?php
session_start();
date_default_timezone_set("Asia/Manila");

if (isset($_POST['result'])) {

  $foodSelect = $_POST['foods'];
  $quantity = $_POST['quantity'];
  $cash = $_POST['cash'];
  $price = 0;

  switch ($foodSelect) {
    case 'burger':
      $price = 50;
      break;
    case 'fries':
      $price = 75;
      break;
    case 'steak':
      $price = 150;
      break;
  }

  $totalCost = $price * $quantity;
  $totalChange = $cash - $totalCost;
  $needCash = $totalCost - $cash;

  if ($cash >= $totalCost) {
    echo "<div class='container'>";
    echo "<h2 id='title'>RECEIPT</h2>";
    echo "<h2>Total Price: " . $totalCost . "</h2>";
    echo "<h2>You Paid: " . $cash . "</h2>";
    echo "<h2>CHANGE: " . $totalChange . "</h2>";
    echo "<h2><i>" . date("d/m/Y") . " " . date("h:i:sa") . "</i></h2>";
    echo "</div>";
  } else {
    echo "<div class='container1'><h2>Sorry, balance not enough.</h2></div>";
  }
}
?>