<!DOCTYPE html>
<html>
<head></head>
<body>
<section>
    <h1>Categories</h1>
    <ul>
        <?php foreach ($Categorie as $Categorie) : ?>
            <li><?= $Categorie['name'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>
