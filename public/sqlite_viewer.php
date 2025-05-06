<?php
$pdo = new PDO('sqlite:../database/database.sqlite');
$query = $pdo->query('SELECT * FROM users');
$results = $query->fetchAll(PDO::FETCH_ASSOC);
print_r($results);
