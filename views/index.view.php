<?php require('partials/head.php'); ?>

<ul><strong>Gebruikers</strong>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->name; ?></li>
    <?php endforeach; ?>
</ul>
<h1>Vul je naam maar in hoor</h1>

<form method="POST" action="/names">
    <input name="name"></input>
    <button type="submit">Indienen maar!</button>
</form>
<?php require('partials/footer.php'); ?>