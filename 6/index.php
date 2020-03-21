<?php
$conn = mysqli_connect("localhost", "root", "", "db_product");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Table Produk :</h2>
  <p>Produk Yang ter Record :</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Cashier</th>
        <th>Product</th>
        <th>Category</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $query = mysqli_query($conn, "SELECT * FROM product");
        while($data = mysqli_fetch_assoc($query)){
    ?>
      <tr>
        <?php $sql1 = mysqli_query($conn, "SELECT name FROM cashier WHERE id_cashier = $data[id_cashier]");
        while($data1 = mysqli_fetch_assoc($sql1)){ ?>
        <td><?php echo $data1['name']; }?></td>

        <td><?php echo $data['name']; ?></td>

        <?php $sql1 = mysqli_query($conn, "SELECT name FROM category WHERE id_category = $data[id_category]");
        while($data1 = mysqli_fetch_assoc($sql1)){ ?>
        <td><?php echo $data1['name']; }?></td>

        <td><?php echo $data['price'];?></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>

</body>
</html>
