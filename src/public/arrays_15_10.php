<?php

$size = isset($_GET['size']) ? (int)$_GET['size'] : 3;

echo "<h2> Квадрат із діагоналлю (розмір: $size)</h2>";
echo "<pre style='font-family: monospace; font-size: 20px;'>";

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        
        if ($i === $j) {
            echo "X";
        } else {
            echo "*";
        }
    }
    echo "\n"; 
}

echo "</pre>";




//  масив студентів
$studentList = [
    ['name' => 'Олена', 'score' => 10],
    ['name' => 'Андрій', 'score' => 5],
    ['name' => 'Марія', 'score' => 8],
    ['name' => 'Іван', 'score' => 3],
    ['name' => 'Софія', 'score' => 10],
];


$op = isset($_GET['op']) ? $_GET['op'] : 'eq';
$val = isset($_GET['val']) ? (int)$_GET['val'] : 5;


$filteredStudents = array_filter($studentList, function($student) use ($op, $val) {
    if ($op === 'eq') {
        return $student['score'] === $val;
    } elseif ($op === 'gt') {
        return $student['score'] > $val;
    } elseif ($op === 'lt') {
        return $student['score'] < $val;
    }
    return true;
});

echo "<h2>Частина Б. Список студентів (Фільтр: оператор '$op', значення '$val')</h2>";
echo "<ul>";
foreach ($filteredStudents as $student) {
    echo "<li>" . $student['name'] . " — бал: " . $student['score'] . "</li>";
}
echo "</ul>";
?>