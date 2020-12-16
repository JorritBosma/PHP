<?php require('partials/head.php'); ?>

<h1>Doelijst
    <?= $takke; ?>
</h1>
<ul>
    <?php foreach ($taakjes as $taak) : ?>

        <li>
            <?php if ($taak->voltooid) : ?>
                <s>
                    <?= $taak->beschrijving ?>
                </s>
            <?php else : ?>

                <?= $taak->beschrijving ?>
            <?php endif ?>
        </li>

    <?php endforeach; ?>
</ul>
<?php require('partials/footer.php'); ?>