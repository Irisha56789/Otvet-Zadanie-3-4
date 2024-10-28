<?php
// Задание 1: Определение простой функции и возвращаемые значения
// Определяем функцию multiply
function multiply($a, $b) {
    return $a * $b; // Возвращаем произведение двух чисел
}

// Пример вызова функции
echo multiply(3, 4); // Ожидаемый результат: 12

// Задание 2: Область видимости переменных

// Создаем глобальную переменную
$globalVar = 50;

function sumGlobal() {
    global $globalVar; // Делаем глобальную переменную доступной внутри функции
    $localVar = 100;  // Создаем локальную переменную
    return $globalVar + $localVar; // Возвращаем сумму глобальной и локальной переменных
}

// Пример вызова функции
echo sumGlobal(); // Ожидаемый результат: 150

// Задание 3: Рекурсия

function factorial($n) { 
    if ($n <= 1) { 
        return 1; // Условие остановки рекурсии
    } 
    return $n * factorial($n - 1); // Рекурсивный вызов функции
}

// Пример вызова функции
echo factorial(5); // Ожидаемый результат: 120

$array = ["apple", "banana", "cherry"]; 

$result = array_map(function($str) { 
    return strtoupper($str); // Преобразуем строку в верхний регистр
}, $array); 

print_r($result); // Ожидаемый результат: ["APPLE", "BANANA", "CHERRY"]

// Задание 4: Анонимные функции

$array = ["apple", "banana", "cherry"]; 

$result = array_map(function($str) { 
    return strtoupper($str); // Преобразуем строку в верхний регистр
}, $array); 

print_r($result); // Ожидаемый результат: ["APPLE", "BANANA", "CHERRY"]

// Задание 5: Стрелочные функции

$sum = fn($a, $b) => $a + $b; // Стрелочная функция для вычисления суммы двух чисел

echo $sum(3, 4); // Ожидаемый результат: 7

// Задание 6: Замыкания / Closure

function counter() { 
    $count = 0; // Инициализация счетчика
    return function() use (&$count) { // Замыкание с доступом к переменной $count
        $count++; 
        return $count; // Возвращаем текущее значение счетчика
    }; 
} 

$myCounter = counter(); // Получаем замыкание
echo $myCounter(); // Ожидаемый результат: 1
echo $myCounter(); // Ожидаемый результат: 2

// Задание 7: Генераторы и оператор yield

function generateNumbers() { 
    for ($i = 1; $i <= 5; $i++) { 
        yield $i; 
    } 
} 

$generator = generateNumbers(); 
foreach ($generator as $number) { 
    echo $number . " "; // Ожидаемый результат: 1 2 3 4 5 
}

// Задание 8: Использование встроенных функций

$array = [3, 7, 2, 8, 4, 10, 1]; 

$minValue = min($array); 
$maxValue = max($array); 

echo "Минимум: " . $minValue . "\n"; // Ожидаемый результат: Минимум: 1
echo "Максимум: " . $maxValue . "\n"; // Ожидаемый результат: Максимум: 10

?>