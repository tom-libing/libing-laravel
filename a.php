<?php
try {
    $dbh = new PDO('mysql:host=mysql;dbname=mysql', 'root', 'lb5261222');
    foreach($dbh->query('SELECT * from user') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
