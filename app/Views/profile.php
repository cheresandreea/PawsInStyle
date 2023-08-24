<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<h1 style="color:deeppink">PawsInStyle</h1>

<div style="flex: 1; border: 1px solid #ccc; padding: 10px; margin: 10px;">
    <p>Product id: <?= $product["product_id"]?></p>
    <p>Title: <?= $product["title"]?></p>
    <p>Description: <?= $product["description"]?></p>
    <p>Rating: <?= $product["rating"]?></p>
    <p>Price: <?= $product["price"]?></p>
    <p>Admin id: <?= $product["admin_id"]?></p>
    <p>Admin name: <?= $product["admin_name"]?></p>
    <p>Category name: <?= $product["category_name"] ?></p>

</div>

<form method="POST">
    <label for="quantity">Select Quantity:</label>
    <select id="quantity" name="quantity">
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "<option value='$i'>$i</option>";
        }
    ?>
    </select>

    <input type="button" value="Add to cart" onClick="window.location '<?= base_url() ?>/homepage/profile/<?= $product["quantity"] ?>'"/>


</form>

<h3></h3>
</body>
</html>
