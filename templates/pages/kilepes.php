<?php
if (isset($_SESSION['login'])) {
    try {
        $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        // Felhasználó keresése a session alapján
        $sqlSelect = "SELECT id, last_name, first_name FROM users WHERE username = :username";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':username' => $_SESSION['login']));
        $user = $sth->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $log = "INSERT INTO logs (userId, action) VALUES (:userId, :action)";
            $sth = $dbh->prepare($log);
            $sth->execute(array(':userId' => $user['id'], ':action' => 'Felhasználó kijelentkezett'));

            session_unset();
            session_destroy();
        }
    } catch (PDOException $e) {
        $errormessage = "Hiba: " . $e->getMessage();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
