<?php

// Функція яка створює масив випадкових чисел
function generateRandomArray($length, $min, $max) {
    $randomArray = [];
    for ($i = 0; $i < $length; $i++) {
        $randomArray[] = rand($min, $max);
    }
    return $randomArray;
}

// Створення масиву із 10 випадкових чисел в діапазоні від 1 до 100
$myArray = generateRandomArray(10, 1, 100);

// Знаходимо найбільший та найменший елемент масиву
$minValue = min($myArray);
$maxValue = max($myArray);

// Сортуємо масив
sort($myArray);

// Виводимо масив та знайдені мінімальний і максимальний елементи
echo "Масив: " . implode(", ", $myArray) . PHP_EOL;
echo "Найменший елемент: " . $minValue . PHP_EOL;
echo "Найбільший елемент: " . $maxValue . PHP_EOL;