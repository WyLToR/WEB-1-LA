<?php
$dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD,
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

$sqlSelect = "select id from users where username = :username";
$sth = $dbh->prepare($sqlSelect);
$sth->execute(array(':username' => $_POST['login']));
$row = $sth->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $log = "insert into logs(userId, action) values(:userId, :action)";
    $sth = $dbh->prepare($log);
    $sth->execute(array(':userId' => $row["id"], ':action' => 'Képfeltöltés történt'));
}
