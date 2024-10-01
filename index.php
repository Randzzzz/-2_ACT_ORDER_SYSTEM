<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font: Arial;
    }

    table,
    th,
    td {
      border: 1px solid;
      font-size: 20px;
      width: 14%;
    }

    form {
      margin: 10px 0;
    }
  </style>
</head>

<body>

  <?php session_start(); ?>

  <h1>Menu</h1>
  <table>
    <tr>
      <th>Order</th>
      <th>Amount</th>
    </tr>
    <tr>
      <td>Burger</td>
      <td>50</td>
    </tr>
    <tr>
      <td>Fries</td>
      <td>75</td>
    </tr>
    <tr>
      <td>Steak</td>
      <td>150</td>
    </tr>
  </table>

  <form action="handleForm.php" method="POST">
    <label for="foods">Select an order:</label>
    <select name="foods">
      <option value="burger">Burger</option>
      <option value="fries">Fries</option>
      <option value="steak">Steak</option>
    </select>

    <p>Quantity <input type="number" name="quantity"></input></p>
    <p>Cash <input type="number" name="cash"></input></p>

    <input type="submit" value="Submit" name="result">
  </form>
</body>

</html>