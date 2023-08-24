<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

    <div class="container" style="align-content: center; display:flex">
        <h1 style="color:deeppink">PawsInStyle</h1>
        <button style="color: deeppink; width: 40px; height: 40px; margin-left: 20px; margin-top: 20px ">Cart</button><br><br>
    </div>


    <form action="<?=base_url()?>/homepage/index" method="get">
        <label>Title</label>
        <input type="text" name="search_title" value="<?= $title ?? '' ?>">

        <label>Description</label>
        <input type="text" name="search_description" value="<?= isset($description) ? $description : '' ?>">

        <button type="submit">Search</button>
    </form>

    <br><br>
    <div class="container" style="display: flex; flex-wrap: wrap;">
        <div>
            <h3>Categories</h3>
            <?php foreach ($category as $cat): ?>
                <p><?= $cat["name"] ?></p>
            <?php endforeach; ?>
        </div>

        <div class="container-fluid" style="display: flex">
            <?php foreach ($products as $product): ?>
                <div style="flex: 1; border: 1px solid #ccc; padding: 10px; margin: 10px;">
                    <p><?= $product["product_id"] ?></p>
                    <p><?= $product["title"] ?></p>
                    <p><?= $product["price"] ?></p>
                    <p><?= $product["description"] ?></p>
                    <p><?= $product["rating"] ?></p>
                    <input type="button" value="See the article" onClick="window.location '<?= base_url() ?>/homepage/profile/<?= $product["product_id"] ?>'"/>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



</body>
</html>
