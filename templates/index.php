<?php session_start(); ?>
<?php if (file_exists('./logicals/' . $keres['fajl'] . '.php')) {
    include("./logicals/{$keres['fajl']}.php");
} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $ablakcim['cim'] . ((isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '') ?></title>
    <link rel="stylesheet" href="./styles/stilus.css" type="text/css">
    <?php if (file_exists('./styles/' . $keres['fajl'] . '.css')) { ?>
        <link rel="stylesheet" href="./styles/<?= $keres['fajl'] ?>.css" type="text/css"><?php } ?>
</head>
<body>
<header>
    <div class="header_head">
        <div class="header_head--cim">
            <img src="./assets/<?= $fejlec['kepforras'] ?>" alt="<?= $fejlec['kepalt'] ?>">
            <h1><?= $fejlec['cim'] ?></h1>
        </div>
        <div>
            <?php if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php } ?>
            <?php if (isset($_SESSION['login'])) { ?>Bejlentkezve:
                <strong><?= $_SESSION['csn'] . "(" . $_SESSION['login'] . ")" ?></strong><?php } ?>
        </div>
    </div>
    <nav class="navigation">
        <ul>
            <?php foreach ($oldalak as $url => $oldal) { ?>
                <?php if (!isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                    <li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                        <a href="<?= ($url == '/') ? '.' : $url ?>">
                            <?= $oldal['szoveg'] ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </nav>
</header>
<div id="wrapper">
    <div id="content">
        <?php include("./templates/pages/{$keres['fajl']}.php"); ?>
    </div>
</div>
<footer>
    <?php if (isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
    &nbsp;
    <?php if (isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
</footer>
</body>
</html>
