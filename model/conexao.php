<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=transporta", "root", "");
} catch (Exception $e) {
    echo "Erro:" . $e->getMessage();
}
