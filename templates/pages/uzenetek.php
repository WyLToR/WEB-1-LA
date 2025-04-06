<?php
if (isset($_SESSION["csn"]) && isset($_SESSION["login"]) && isset($_SESSION["un"])) {
    try {
        $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        // Lekérdezés előkészítése
        $sqlSelect = "
            SELECT logs.id, logs.userId, logs.action, users.username, users.last_name, users.first_name
            FROM logs
            JOIN users ON logs.userId = users.id
        ";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute();
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC); // Több sor lekérése

        if ($rows) {
            ?>
            <table>
                <thead>
                <tr>
                    <th>Azonosító</th>
                    <th>User_ID</th>
                    <th>Felhasználó Név</th>
                    <th>Vezetéknév</th>
                    <th>Keresztnév</th>
                    <th>Művelet</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($rows as $item) {
                    ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['userId'] ?></td>
                        <td><?= $item['username'] ?></td>
                        <td><?= $item['last_name'] ?></td>
                        <td><?= $item['first_name'] ?></td>
                        <td><?= $item['action'] ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        }
    } catch (PDOException $e) {
        $errormessage = "Hiba: " . $e->getMessage();
    }
} else {
    ?>
    <h1>Az oldal megtekintéséhez elsőnek <a href="belepes">jelentkezz</a> be</h1>
    <?php
}
?>
