<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="views/about.view.php">About us</a>
            </li>
            <li>
                <a href="views/contact.view.php">Contact us</a>
            </li>
            <li>
                <a href="views/about-culture.view.php">Our Culture</a>
            </li>
        </ul>
    </nav>

    <h1>Doelijst <?= $takke; ?></h1>
    <ul>
        <?php foreach ($taakjes as $taak) : ?>

            <li>
                <?php if ($taak->voltooid) : ?>
                    <s><?= $taak->beschrijving ?></s>
                <?php else : ?>

                    <?= $taak->beschrijving ?>
                <?php endif ?>
            </li>

        <?php endforeach; ?>
    </ul>
</body>

</html>