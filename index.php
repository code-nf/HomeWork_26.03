<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Простой алгоритм на PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        .result { margin-top: 20px; padding: 10px; background: #f0f0f0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Простой алгоритм: Калькулятор оценок</h1>
        
        <form method="post">
            <p>Введите количество баллов (от 0 до 100):</p>
            <input type="number" name="score" min="0" max="100" required>
            <button type="submit">Рассчитать</button>
        </form>
        
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Получаем введенное значение
                $score = $_POST['score'];
                
                // Проверяем, что значение в допустимом диапазоне
                if ($score < 0 || $score > 100) {
                    echo "<p>Ошибка: введите число от 0 до 100</p>";
                } else {
                    // Определяем оценку на основе баллов
                    $grade = '';
                    
                    // TODO: Дописать алгоритм определения оценки
                    // Используйте условные операторы (if-elseif-else)
                    // Оценки:
                    // 90-100 - "Отлично"
                    // 75-89 - "Хорошо"
                    // 60-74 - "Удовлетворительно"
                    // 0-59 - "Неудовлетворительно"
                    
                    if ($score >= 90) {
                        $grade = "Отлично";
                    } elseif ($score >= 75) {
                        $grade = "Хорошо";
                    } elseif ($score >= 60) {
                        $grade = "Удовлетворительно";
                    } else {
                        $grade = "Неудовлетворительно";
                    }
                    
                    // Выводим результат
                    echo "<p>При {$score} баллах оценка: <strong>{$grade}</strong></p>";
                }
            }
            ?>
        </div>
        
        <h2>Дополнительное задание</h2>
        <div class="result">
            <?php
            // TODO: Напишите код, который выводит все четные числа от 0 до 20
            // Каждое число должно быть на новой строке
            
            echo "<p>Четные числа от 0 до 20:</p>";
            for ($i = 0; $i <= 20; $i += 2) {
                echo $i . "<br>";
            }
            ?>
        </div>
    </div>
</body>
</html>
