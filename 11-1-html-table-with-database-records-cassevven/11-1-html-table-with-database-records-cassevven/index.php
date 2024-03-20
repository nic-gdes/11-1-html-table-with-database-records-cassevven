<?php include('./config/remote.php');

$mysql = "SELECT id,name,price FROM items";
$result = mysqli_query($conn, $mysql);

$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="table-container">
<table class="table">
    <tbody>
        <tr>
            <th colspan="2" class="table-header-top">Products</th>
        </tr>
        <tr>
            <th class="table-header">Name</th>
            <th class="table-header">Price</th>
        </tr>
        <?php foreach ($products as $items) : ?>
            <tr>
                <th class="table-item"><?php echo $items['name']; ?></th>
                <th class="table-item"><?php echo '$' . $items['price']; ?></th>
            </tr>
            <?php endforeach ?>
        </tbody>
    <table>
</div>
        </body>
        </html>

