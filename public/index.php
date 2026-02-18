<?php
echo "Поздравляем, проект успешно запущен. Ниже начальный список пород.";

echo "<br>";
echo "<br>";
echo "<hr>";

$stmt = $pdo->query("SELECT * FROM breeds");
$breeds = $stmt->fetchAll();

foreach ($breeds as $breed){
    print_r($breed['title']);
    echo "<br>";
}

echo "<hr>";